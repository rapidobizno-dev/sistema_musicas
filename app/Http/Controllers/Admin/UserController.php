<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function index()
    {
        $response['users'] = User::all();
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        return view('admin.users.list.index', $response);
    }

    public function create()
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        return view('Auth.register', $response);
    }

    public function store(Request $request)
    {
        /* User::create($request->all()); */
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string', 'in:admin,editor,user'],
        ], [
            'password.confirmed' => 'As senhas não coincidem.',
            'email.unique' => 'Este e-mail já está em uso.',
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'role.required' => 'O papel do usuário é obrigatório.',
        ]);
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);

        /* Salvando registro de atividade */
        if ($user) {
            activity()
                ->causedBy(auth()->user()) // quem fez a ação
                ->performedOn($user)     // qual model foi afetado
                ->withProperties(['nome' => $user['name']])
                ->log('Criou um novo cliente');
        }

        return redirect()->route('admin.user.index')->with('success', 'User created successfully.');
    }

    public function show(User $user)
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        $username = Auth::user()->name;
        /* pegando atividades do utilizador */
        /* $logs = Activity::with('causer')->orderBy('created_at', 'desc')->get(); */
        $logs = Activity::with('causer')
            ->where('causer_id', $user->id)
            ->where('causer_type', User::class)
            ->orderBy('created_at', 'desc')
            ->get();
        $response['logs'] = $logs;

        $response['user'] = $user;
        return view('admin.users.details.index', $response);
    }

    public function edit(User $user)
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        $response['user'] =  $user;
        return view('admin.users.edit.index', $response);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return redirect()->route('admin.user.index')->with('success', 'User updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully.');
    }
}

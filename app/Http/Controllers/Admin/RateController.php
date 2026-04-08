<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rate;

class RateController extends Controller
{

    public function index()
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        $response['notificationCount'] = $admin->notifications()->count();
        /* end notifications */
        $response['rate'] = Rate::orderByDesc('created_at')->get();
        return view('admin.rate.list.index', $response);
    }

    public function create()
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        $response['notificationCount'] = $admin->notifications()->count();
        /* end notifications */
        return view('admin.rate.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'rate' => ['required', 'integer']
        ]);

        $rate = Rate::create([
            'rate' => $request->rate
        ]);

        if($rate){
            return redirect()->route('admin.rate.list')->with('success', 'Cadastrado com sucesso!');
        }
        return redirect()->back()->with('error', 'Erro ao cadastrar!'); 
    }

    public function show(Rate $rate)
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        $response['notificationCount'] = $admin->notifications()->count();
        /* end notifications */
        $response['rate'] = $rate;
        return view('admin.rate.details.index', $response);
    }

    public function edit(Rate $rate)
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        $response['notificationCount'] = $admin->notifications()->count();
        /* end notifications */
        $response['rate'] = $rate;
        return view('admin.rate.edit.index', $response);
    }

    public function update(Request $request, Rate $rate)
    {
        
        $request->validate([
            'rate' => ['required', 'integer']
        ]);

        $rate->update([
            'rate' => $request->rate
        ]);

        if($rate){
            /* registrando atividade */
            if($rate){
                activity()
                    ->causedBy(auth()->user()) // quem fez a ação
                    ->performedOn($rate)     // qual model foi afetado
                    ->withProperties(['rate' => $rate['rate']])
                    ->log('Alterou a taxa de conversão');
            }
            return redirect()->back()->with('success', 'Atualizado com sucesso!');
        }
        return redirect()->back()->with('error', 'Erro ao atualizar!');


    }

    public function destroy(Rate $rate)
    {
        $rate->delete();
        return redirect()->route('admin.rate.list');
    }
}

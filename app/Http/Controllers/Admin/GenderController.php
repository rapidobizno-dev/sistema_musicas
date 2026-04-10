<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gender;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenderController extends Controller
{

    public function index()
    {
        $response['genders'] = Gender::orderByDesc('created_at')->get();

        return view('admin.gender.list.index', $response);
    }

    public function create()
    {
        return view('admin.gender.create.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome deve ter no máximo 255 caracteres.',
            'description.string' => 'O campo descrição deve ser uma string.',
            'description.max' => 'O campo descrição deve ter no máximo 255 caracteres.',
        ]);

        $gender = new Gender();
        $gender->name = $request->input('name');
        $gender->description = $request->input('description');
        $gender->save();

        return redirect()->route('admin.gender.list')->with('success', 'Salvo com sucesso!');
    }

    public function show($id)
    {
        $response['gender'] = Gender::findOrFail($id);

        return view('admin.gender.details.index', $response);
    }

    public function edit($id)
    {
        $response['gender'] = Gender::findOrFail($id);

        return view('admin.gender.edit.index', $response);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'name.string' => 'O campo nome deve ser uma string.',
            'name.max' => 'O campo nome deve ter no máximo 255 caracteres.',
            'description.string' => 'O campo descrição deve ser uma string.',
            'description.max' => 'O campo descrição deve ter no máximo 255 caracteres.',
        ]);

        $gender = Gender::findOrFail($id);
        $gender->name = $request->input('name');
        $gender->description = $request->input('description');
        $gender->update();

        return redirect()->route('admin.gender.list')->with('success', 'Atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $gender = Gender::findOrFail($id);
        $gender->delete();

        return redirect()->back()->with('success', 'Deletado comsucesso!');
    }
}

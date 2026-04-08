<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\TypeCategory;
use Illuminate\Support\Str;

class CategoryController extends Controller
{

    public function index()
    {
        $response['categories'] = Category::with('typeCategory')->orderByDesc('id')->get();
        //$categories = Category::all();
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        return view('admin.categories.list.index', $response);
    }

    public function create()
    {
        /*  $typeCategories = typeCategory::where('name->name')->get(); */
        $response['typeCategories'] = TypeCategory::all();
         /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        return view('admin.categories.create.index', $response);
    }

    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
            /* 'type' => 'required|string|max:50', */
            'description' => 'nullable|string|max:1000',
            'typecategory_id' => 'required|exists:type_categories,id',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            /* 'type.required' => 'O tipo é obrigátorio.', */
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);
        Category::create([
            'name' => $request->name,
            /* 'type' => $request->type, */
            'description' => $request->description,
            'typecategory_id' => $request->typecategory_id,
        ], [
            'name' => $request->name,
            /* 'type' => $request->type, */
            'description' => $request->description,
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categória criada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Categória!');
    }

    public function show(Category $category)
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        $response['category'] = $category;

        return view('admin.categories.details.index', $response);
    }

    public function edit(Category $category)
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        $response['category'] = $category;
        $response['typeCategories'] = TypeCategory::all();
        return view('admin.categories.edit.index', $response);
    }

    public function update(Request $request, Category $category)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            /* 'slug' => 'required|string|max:255|unique:categories,slug,' . $category->id, */
            'type' => 'required|string|max:50',
            /* 'status' => 'required|in:active,inactive', */
            'description' => 'nullable|string|max:1000',
            'typecategory_id' => 'required|exists:type_categories,id',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            /* 'slug.required' => 'O Slug é obrigátorio.', */
            /* 'slug.unique' => 'O Slug deve ser unico.', */
            'type.required' => 'O tipo é obrigátorio.',
            /* 'status.required' => 'Obrigátorio seleciona um status.', */
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);

        $category->update([
            'name' => $request->name,
            /* 'slug' => $request->slug, */
            'type' => $request->type,
            /* 'status' => $request->status === 'active' ? 'active' : 'inactive', */
            'description' => $request->description,
            'typecategory_id' => $request->typecategory_id,
        ], [
            'name' => $request->name,
            /* 'slug' => $request->slug, */
            'type' => $request->type,
            /* 'status' => $request->status === 'active' ? 'active' : 'inactive', */
            'description' => $request->description,
            'typecategory_id.required' => 'O tipo de categoria é obrigatória.',
            'typecategory_id.exists' => 'O tipo de categoria selecionada é inválida.',
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Categória atualizada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Categória!');
    }

    public function destroy(Category $category)
    {
        //
        $category = Category::findOrFail($category->id);

        // Verifica se a categoria está associada a algum artigo
        if (!$category) {
            return redirect()->back()->with('error', 'categoria não encontrada!');
        }


        // Exclui a categoria do banco de dados

        $category->delete();
        return redirect()->route('admin.categories.index')->with('success', 'Categoria apagado com sucesso!');
    }
}

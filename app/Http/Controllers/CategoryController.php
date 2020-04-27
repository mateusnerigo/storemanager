<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $msg = [
        'name.required' => 'Preencha este campo para continuar',
        'name.unique' => 'Esta categoria já está cadastrada',
        'name.min' => 'Pelo menos 2 caracteres são necessários para o nome',
        'name.max' => 'No máximo 25 caracteres são permitidos'
    ];

    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.newCategory');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:App\Category,name|min:2|max:25',
        ], $this->msg);

        $category = Category::create([
            'name' => $request->name,
            'obs' => $request->obs
        ]);

        return redirect('/categories');
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.showCategory', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.editCategory', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $request->validate([
            'name' => $request->name == $category->name ? '' : 'required|unique:App\Category,name|min:2|max|25'
        ], $this->msg);

        if (isset($category)) {
            $category->name = $request->input('name');
            $category->obs = $request->input('obs');

            $category->save();

            return redirect("/category/${id}");
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('/categories');
    }
}

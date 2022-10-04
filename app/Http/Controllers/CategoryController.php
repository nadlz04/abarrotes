<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Requests\Category\StoreRequest;        //links que enlaza con las solicitudes (app\http\request)
use App\Http\Requests\Category\UpdateRequest;       //links que enlaza con las solicitudes (app\http\request)
class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();      //codigo para ver las categorias
        return view('admin.category.index', compact('categories'));     //codigo para listado de categorias     (compact es para eliminar la variable de la tabla)
    }


    public function create()
    {
        return view('admin.category.create');       //codigo para crear una categoria
    }


    public function store(StoreRequest $request)
    {
        Category::create($request->all());              //Request = peticion de datos
        return redirect()->route('categories.index');
    }


    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }


    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}

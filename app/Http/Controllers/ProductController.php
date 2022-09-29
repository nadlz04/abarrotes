<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Requests\Product\StoreRequest;        //links que enlaza con las solicitudes (app\http\request)
use App\Http\Requests\Product\UpdateRequest;  
class ProductController extends Controller
{


    public function index()
    {
        $products = Product::get();      //codigo para ver las categorias
        return view('admin.Product.index', compact('products'));     //codigo para listado de categorias     (compact es para eliminar la variable de la tabla)
    }


    public function create()
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.product.create', compact('categories','provaiders'));       //codigo para crear una categoria
    }


    public function store(StoreProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }


    public function show(Product $Product)
    {
        return view('admin.Product.show', compact('Product'));
    }


    public function edit(Product $Product)
    {
        $categories = Category::get();
        $providers = Provider::get();
        return view('admin.product.show', compact('product','categories','provaiders'));

    }


    public function update(UpdateRequest $request, Product $Product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $Product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}

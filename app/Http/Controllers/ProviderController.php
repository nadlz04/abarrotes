<?php

namespace App\Http\Controllers;

use App\Models\provider;
use App\Http\Requests\StoreproviderRequest;
use App\Http\Requests\UpdateproviderRequest;
use App\Http\Requests\provider\StoreRequest;        //links que enlaza con las solicitudes (app\http\request)
use App\Http\Requests\provider\UpdateRequest;
class providerController extends Controller
{
    public function index()
    {
        $provider = provider::get();      //codigo para ver las categorias
        return view('admin.provider.index', compact('provider'));     //codigo para listado de categorias     (compact es para eliminar la variable de la tabla)
    }


    public function create()
    {
        return view('admin.provider.create');       //codigo para crear una categoria
    }


    public function store(StoreproviderRequest $request)
    {
        provider::create($request->all());
        return redirect()->route('provider.index');
    }


    public function show(provider $provider)
    {
        return view('admin.provider.show', compact('provider'));
    }


    public function edit(provider $provider)
    {
        return view('admin.provider.edit', compact('provider'));
    }


    public function update(UpdateproviderRequest $request, provider $provider)
    {
        $provider::update($request->all());
        return redirect()->route('provider.index');
    }

    public function destroy(provider $provider)
    {
        $provider->delete();
        return redirect()->route('provider.index');
    }
}

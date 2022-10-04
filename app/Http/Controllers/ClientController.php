<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Requests\Client\StoreRequest;        //links que enlaza con las solicitudes (app\http\request)
use App\Http\Requests\Client\UpdateRequest; 
class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();      //codigo para ver las categorias
        return view('admin.client.index', compact('clients'));     //codigo para listado de categorias     (compact es para eliminar la variable de la tabla)
    }


    public function create()
    {
        return view('admin.client.create');       //codigo para crear una categoria
    }


    public function store(StoreClientRequest $request)
    {
        Client::create($request->all());
        return redirect()->route('clients.index');
    }


    public function show(Client $Client)
    {
        return view('admin.client.show', compact('Client'));
    }


    public function edit(Client $Client)
    {
        return view('admin.Client.edit', compact('Client'));
    }


    public function update(UpdateRequest $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('client.index');
    }

    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Client;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Requests\Sale\StoreRequest;        //links que enlaza con las solicitudes (app\http\request)
use App\Http\Requests\Sale\UpdateRequest; 

class SaleController extends Controller
{

    public function index()
    {
        $sales = Sale::get();      //codigo para ver las categorias
        return view('admin.sale.index', compact('sales'));     //codigo para listado de categorias     (compact es para eliminar la variable de la tabla)
    }


    public function create()
    {
        $clients = Client::get();
        return view('admin.purchase.create', compact('clients'));       //codigo para crear una categoria
    }


    public function store(StoreRequest $request)
    {
        $sale = Sale::create($request->all());              //Request = peticion de datos

        foreach ($request->product_id as $key => $sos) {
            $results[] = array("product_id"=>$request->product_id[$key], "quantity"=>$request->quantity[$key], "price"=>$request->price[$key],"discount"=>$request->discount[$key]);
        }
        $sale->saleDetails()->createMany($results);

        return redirect()->route('sales.index');
    }


    public function show(Sale $sale)
    {
        return view('admin.sale.show', compact('sale'));
    }


    public function edit(Sale $sale)
    {
        $clients = Client::get();
        return view('admin.purchase.edit', compact('purchase'));
    }


    public function update(UpdateRequest $request, Sale $sale)
    {
        $sale->update($request->all());
        return redirect()->route('sales.index');
    }

    public function destroy(Sale $sale)
    {
        $sale->delete();
        return redirect()->route('sales.index');
    }
}
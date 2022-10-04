<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Provider;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Requests\Purchase\StoreRequest;        //links que enlaza con las solicitudes (app\http\request)
use App\Http\Requests\Purchase\UpdateRequest; 

class PurchaseController extends Controller
{

    public function index()
    {
        $purchases = Purchase::get();      //codigo para ver las categorias
        return view('admin.purchase.index', compact('purchases'));     //codigo para listado de categorias     (compact es para eliminar la variable de la tabla)
    }


    public function create()
    {
        $providers = Provider::get();
        return view('admin.purchase.create', compact('providers'));       //codigo para crear una categoria
    }


    public function store(StoreRequest $request)
    {
        $purchase = Purchase::create($request->all());              //Request = peticion de datos

        foreach ($request->product_id as $key => $sos) {
            $results[] = array("product_id"=>$request->product_id[$key], 
            "quantity"=>$request->quantity[$key], "price"=>$request->price[$key]);
        }
        $purchase->purchaseDetails()->createMany($results);

        return redirect()->route('purchases.index');
    }


    public function show(purchase $purchase)
    {
        return view('admin.purchase.show', compact('purchase'));
    }


    public function edit(purchase $purchase)
    {
        $providers = Provider::get();
        return view('admin.purchase.edit', compact('purchase'));
    }


    public function update(UpdateRequest $request, purchase $purchase)
    {
        $purchase->update($request->all());
        return redirect()->route('purchases.index');
    }

    public function destroy(Purchase $purchase)
    {
        $purchase->delete();
        return redirect()->route('purchases.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('inventory.product.index');
    }

    public function create()
    {
        return view('inventory.product.create');
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return redirect()->route('inventory.product.edit', $product);
    }

    public function edit(Product $product)
    {
        return view('inventory.product.edit', compact('product'));
    }

    public function show()
    {
        //info
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->all());

        return redirect()->route('inventory.product.index');
    }

    public function delete(Product $product)
    {
        $product->delete();

        return redirect()->route('inventory.product.index');
    }

    public function getProductList()
    {
        $data = Product::get();
        $hasManageRoles = Auth::user()->can('manage_roles'); //Auth::user()->can('manage_products');

        return Datatables::of($data)

            ->addColumn('action', function ($data) use ($hasManageRoles) {
                $output = '';
                if ($hasManageRoles && $data->name != 'Super Admin') {
                    $output = '<div class="table-actions">
                                    <a href="' . route('inventory.product.edit', $data->id) . '" ><i class="ik ik-edit-2 f-16 mr-15 text-green"></i></a>
                                    <a href="' . url('roles/delete/' . $data->id) . '"  ><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                </div>';
                }

                return $output;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}

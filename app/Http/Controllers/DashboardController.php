<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count = Product::count();
        $counter = User::count();

        return view('admin.index', compact('count','counter'));
    }
}

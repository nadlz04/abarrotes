<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){

    $count = Product::count();
    $counter = User::count();
    return view('pages.dashboard', compact('count','counter'));
    }
}

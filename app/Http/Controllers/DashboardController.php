<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('tags')->paginate(10);

        return view('site.dashboard', ['products' => $products, 'request' => $request->all()]);
    }
}

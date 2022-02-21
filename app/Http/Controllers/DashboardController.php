<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Tag;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::whereHas('tags')->paginate(10);

        return view('site.dashboard', ['products' => $products, 'request' => $request->all()]);
    }
}

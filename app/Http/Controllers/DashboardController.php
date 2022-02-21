<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\Tag;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('tags')->paginate(10);

        // $tags = Tag::All();

        // foreach ($products as $product) {
           
        //  $product->tags->first()->pivot->amount;
        // }


        return view('site.dashboard', ['products' => $products, 'request' => $request->all()]);
    }
}

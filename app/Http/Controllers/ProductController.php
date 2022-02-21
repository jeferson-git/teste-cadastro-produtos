<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tags = Tag::all();

        return view('form.product', ['tags' => $tags]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|max:50',
            'tag' => 'required|integer',
            'amount' => 'required|integer',
            'description' => 'max:300'
        ]);

        $product = Product::create([
            'name' => $fields['name'],
            'description' => $fields['description']
        ]);

        $product->tags()->attach($fields['tag'], ['amount' => $fields['amount']]);

        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $tags = Tag::all();

        return view('form.product', ['product' => $product, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fields = $request->validate([
            'name' => 'required|max:50',
            'tag' => 'required|integer',
            'amount' => 'required|integer',
            'description' => 'max:300'
        ]);

        $product = Product::find($id);
        $product->update($fields);

        $product->tags()->syncWithPivotValues([$fields['tag']], ['amount' => $fields['amount']]);

        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('dashboard');
    }

    public function filter(Request $request)
    {
        $fields = $request->filter;
        if(!$fields) {
            $products = Product::with('tags')->paginate(10);

            return view('site.dashboard', ['products' => $products, 'request' => $request->all()]);
        }
        
        $products = Product::with('tags')->where('name', 'like', $fields.'%')->get();
        $products = $products->merge(Product::with('tags')->whereRelation('tags', 'name', 'like', $fields.'%')->get());

        return view('site.dashboard', ['products' => $products, 'paginate' => 'none']);
        
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //only member can create guest will see all product
        $products = Product::all();
//        $products = Product::query()->where([
//            'user_id' => Auth::id()
//        ])->get();
        return view('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('products.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required | decimal:0,2',
            'description' => 'required',
        ]);

        Product::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $id)
    {
        return view('products.show',['product'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $id)
    {
        return view('products.edit',['product'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $id)
    {
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required | decimal:0,2',
            'description' => 'required',
        ]);
        $id->update($data);
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        $id->delete();
        return redirect('/products');
    }
}

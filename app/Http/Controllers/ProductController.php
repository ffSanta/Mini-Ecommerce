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
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }

    public function query(string $categoryId)
    {
        //only member can create guest will see all product
        $products = Product::query()->where([
            'user_id' => Auth::id(), 'product_categories_id' => $categoryId
        ])->get();
        return view('products.query',['products'=>$products, 'categoryId'=>$categoryId]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $categoryId)
    {
        return view('products.create',['category'=>$categoryId]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string | max:18',
            'price' => 'required | decimal:0,2 | max:1000',
            'description' => 'required | string | max:255',
        ]);

        Product::create([
            'user_id' => Auth::id(),
            'product_categories_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);
        return redirect('/products/query/'.$request->category_id);
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
            'name' => 'required | string | max:18',
            'price' => 'required | decimal:0,2 | max:1000',
            'description' => 'required | string | max:255',
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

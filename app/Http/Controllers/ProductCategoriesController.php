<?php

namespace App\Http\Controllers;

use App\Models\ProductCategories;
use Illuminate\Http\Request;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function category()
    {
        $productCategory = ProductCategories::all();
        return view('products.category.index',['productCategory'=>$productCategory]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCategory()
    {
        return view('products.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCategory(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|unique:product_categories',
        ]);
        ProductCategories::create($data);
        return redirect('/products/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategories $id)
    {
        $productCategory = ProductCategories::query()->where('id',$id)->get();
        return view('products.query',['products' => $productCategory,'categoryId'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCategory(ProductCategories $id)
    {
        return view('products.category.edit',['productCategory'=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCategory(Request $request, ProductCategories $id)
    {
        $data = $request->validate([
            'name'=>'required|unique:product_categories',
        ]);
        $id->update($data);
        return redirect('/products/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyCategory(ProductCategories $id)
    {
        $id->delete();
        return redirect('/products/category');
    }
}

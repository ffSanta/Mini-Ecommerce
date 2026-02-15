<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        $productCategories = ProductCategories::all();
        return view('products.index', ['products' => $products, 'categories' => $productCategories]);
    }

    public function query(string $categoryId)
    {
        //only member can create guest will see all product
        if (Gate::allows('admin')) {
            $products = Product::query()->where([
                'product_categories_id' => $categoryId
            ])->get();
        } else {
            $products = Product::query()->where([
                'user_id' => Auth::id(), 'product_categories_id' => $categoryId
            ])->get();
        }

        return view('products.query', ['products' => $products, 'categoryId' => $categoryId]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $categoryId)
    {
        return view('products.create', ['category' => $categoryId]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required | string | max:18',
            'price' => 'required | decimal:0,2 | max:1000',
            'description' => 'required | string | max:255',
            'image' => 'required | mimes:jpeg,jpg,png | max:1024',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/'), $filename);
            $data['image'] = $filename;
        }

        Product::create([
            'user_id' => Auth::id(),
            'product_categories_id' => $request->category_id,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $data['image'],
        ]);
        return redirect('/products/query/' . $request->category_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $id)
    {
        Gate::authorize('view', $id);
        return view('products.show', ['product' => $id]);
    }

    public function showAll(string $id)
    {
        $products = Product::query()->where([
            'product_categories_id' => $id
        ])->get();
        return view('products.showAll', ['products' => $products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $id)
    {
        Gate::authorize('view', $id);
        return view('products.edit', ['product' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $id)
    {
        if ($request->image === null) {
            $data = $request->validate([
                'name' => 'required | string | max:18',
                'price' => 'required | decimal:0,2 | max:1000',
                'description' => 'required | string | max:255',
            ]);
            $id->update($data);
            return redirect('/products');
        }

        $data = $request->validate([
            'name' => 'required | string | max:18',
            'price' => 'required | decimal:0,2 | max:1000',
            'description' => 'required | string | max:255',
            'image' => 'required | mimes:jpeg,jpg,png | max:1024',
        ]);

        if ($request->has('image')) {
            $destination = 'images/' . $id->image;
            if (\File::exists($destination)) {
                \File::delete($destination);
            }

            $filename = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('/images/'), $filename);
            $data['image'] = $filename;
        }
        $id->update($data);
        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        Gate::authorize('view', $id);
        if ($id->image) {
            $destination = 'images/' . $id->image;
            if (\File::exists($destination)) {
                \File::delete($destination);
            }
        }
        $id->delete();
        return redirect('/products');
    }
}

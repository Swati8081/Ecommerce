<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProductCategory::select('id as value', 'name')->get();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();

        $product = new Product();
        $product->title = $input['name'];
        $product->category_id = $input['category_id'];
        $product->sku = $input['sku'];
        $product->mrp = $input['mrp'];
        $product->sale_price = $input['sale_price'];
        $product->short_description = $input['short_description'];
        $product->description = $input['description'];
        $product->specification = $input['specification'];
        $product->brand = $input['brand'];
        $product->tags = $input['tags'];
        $product->high_lights = $input['high_lights'];

        $product->save();

        $product_id = $product->id;

        //    return $request->image;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

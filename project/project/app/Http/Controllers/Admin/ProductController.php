<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use Laravel\Prompts\Prompt;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $data = Product::with('images', 'category')->get();
        return view('admin.product.index', compact('data'));
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
        // return $request;
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

        foreach ($request->image as $key => $value) {
            // return $value;
            $small_img = 'images/products/small_img/'. uniqid().'.'.$value->getClientOriginalExtension();
            $medium_img = 'images/products/medium_img/'. uniqid().'.'.$value->getClientOriginalExtension();
            $large_img = 'images/products/large_img/'. uniqid().'.'.$value->getClientOriginalExtension();
            
            Image::make($value)->resize(60,60)->save('storage/'.$small_img);
            Image::make($value)->resize(240,240)->save('storage/'.$medium_img);
            Image::make($value)->resize(600,600)->save('storage/'.$large_img);
            ProductImage::create([
                'product_id'=> $product_id,
                'small_img'=> $small_img,
                'medium_img'=> $medium_img,
                'large_img'=> $large_img,
            ]);
        }

        return redirect()->route('admin.product.index')->with('success', 'product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::whereId($id)->first();
        return view('admin.product.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Product::whereId($id)->first();
        $categories = ProductCategory::select('id as value', 'name')->get();
        return view('admin.product.edit', compact('data', 'categories'));
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

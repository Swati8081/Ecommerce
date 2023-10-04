<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=ProductCategory::where('id','>',1)->get();

        return view('admin.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=ProductCategory::select('id as value','name')->get();

        return view('admin.category.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //     'name' => 'required|string|max:255|unique:product_categories',
        //     'parent_id' => 'required|integer|max:20',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
    
        
        $data = new ProductCategory();
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/themes/admin/category_img/', $imageName);
            $data->image = asset('themes/admin/category_img/' . $imageName);
        }

        $data->name = $request->input('name');
        $data->slug = $request->input('slug');
        $data->parent_id = $request->input('parent_id');
    
        $data->save();
    
       
        return redirect()->route('admin.category.index')->with('success', 'Product category created successfully.');
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
        $data=ProductCategory::select('id as value','name')->get();
        $category= ProductCategory::whereId($id)->first();
        return view('admin.category.edit',compact('category','data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category= ProductCategory::find($id);

        $category->name=$request->input('name');
        $category->slug = $request->input('slug');
        $category->parent_id=$request->input('parent_id');
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/images/category_img/', $imageName);
            $category->image = asset('images/category_img/' . $imageName);
        }

        $category->update();
        return redirect()->route('admin.category.index')->with('success','Category Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

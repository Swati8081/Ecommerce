<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
       
        $products = Product::with('images', 'category')->get();
        return view('user.pages.home.index',compact('products'));
    }
    public function product(){
       
        $products = Product::with('images', 'category')->get();
        return view('user.pages.product.index',compact('products'));
    }
    public function product_details($id){
        
        $product = Product::with('images', 'category')->find($id);
        
        return view('user.pages.product.product-details', compact('product'));
    }
    public function contact(){
       
        return view('user.pages.contact.index');
    }
    public function about(){
       
        return view('user.pages.about.index');
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request){
      
      $data=Cart::whereIp($request->ip())->with('product.image')->get();
        return view('user.pages.checkout.index',compact('data'));
    }
}

<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
// return $request->ip();
      $data=Cart::whereIp($request->ip())->with('products','images')->get();
       
        return view('user.pages.cart.index',compact('data'));
    }
    public function add(Request $request)
    {
        $quantity = 1;
        $user_id = null;
        if (Auth::check()) {
            $user_id = Auth::user()->id;
        }
        $data = Cart::where('product_id', '=', $request->id)->where('ip', '=', $request->ip())->first();

        if (isset($data)) {
            $quantity = 1 + $data->quantity;
        }
         Cart::updateOrCreate(
            [
                'product_id' => $request->id,
                'ip' => $request->ip(),
            ],
            [
                'user_id' => $user_id,
                'quantity' => $quantity,
            ]
        );

        return redirect()->back()->with('success', 'product added in cart successfully');
    }
}

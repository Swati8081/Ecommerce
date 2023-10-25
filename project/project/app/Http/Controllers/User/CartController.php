<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Auth;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request){
      $data=Cart::whereIp($request->ip())->with('product.image')->get();
       
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

    public function increase(Request $request) {
        $data = Cart::find($request->id);
        $new_quantity =  $data->quantity +1;
        $data->update(['quantity'=>$new_quantity]);
        return $data;
    }

    public function decrease(Request $request) {
        $data = Cart::find($request->id);
        if ($data->quantity > 1) {
            $new_quantity =  $data->quantity -1;
            $data->update(['quantity'=>$new_quantity]);
        }
        return $data;
    }

    public function remove(Request $request) {
        $data = Cart::find($request->id)->delete();
        return $request->id." remove";
    }
}

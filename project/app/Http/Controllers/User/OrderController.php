<?php

namespace App\Http\Controllers\User;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\OrderRequest;
use App\Models\OrderProduct;

class OrderController extends Controller
{
    public function index(Request $request){
      
      $data=Cart::whereIp($request->ip())->with('product.image')->get();
        return view('user.pages.checkout.index',compact('data'));
    }

    public function store(OrderRequest $request) {
      $cart = Cart::where('user_id', Auth::user()->id)->with('product')->get();
      // return $cart;

      $order = Order::create([
        'user_id' => Auth::guard('web')->user()->id,
        'shipping_name' => $request->name,
        'shipping_phone' => $request->phone,
        'shipping_address' => $request->address,
        'shipping_pincode' => $request->pin_code,
      ]);
      foreach ($cart as $key => $value) {
        OrderProduct::create([
          'order_id' => $order->id,
          'product_id' => $value->product_id,
          'mrp' => $value['product']->mrp,
          'sale_price' =>$value['product']->sale_price,
          'quantity' => $value->quantity,
        ]);
      }
      
    }
}

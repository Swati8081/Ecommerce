<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Auth;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(){
        return view('user.pages.wishlist.index');
    }
    public function add(Request $request){
        //    return $request;
        $user_id=Auth::user()->id;
        // return $user_id;
            $data=Wishlist::create([
                'product_id'=>$request->product_id,
                'ip'=>$request->ip(),
                'user_id'=>$user_id,
            ]);
            return redirect()->back()->with('success', 'product added in Wishlist successfully');
        }
}

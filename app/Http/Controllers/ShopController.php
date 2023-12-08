<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\item;
use App\Models\cart;

use DB;
use Session;

class ShopController extends Controller
{
    public function shop()
    {
        $user=item::all();
        return view('shop',compact('user'));
    }

    public function viewproddetail($id)
    {
        $user=item::find($id);
        return view('viewproddetail',compact('user'));
    }

    public function adcart(Request $request,$id)
    {
        $userf=Auth::user();

        $user=item::find($id);

        $cart=new cart;
        $cart->name=$userf->name;
        $cart->email=$userf->email;
        $cart->phone=$userf->phone;
        $cart->userid=$userf->id;

        $cart->pname=$user->pname;
        $cart->pprice=$user->pprice;
        $cart->pimg=$user->pimg;
        $cart->itemid=$user->id;

        $cart->qty=$request->qty;

        $cart->save();

        return redirect('/shop');
    }

    public function cart()
    {
     $user=cart::all();
     return view('viewcart',compact('user'));
    }
}

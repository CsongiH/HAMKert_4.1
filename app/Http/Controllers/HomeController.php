<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Food;

use App\Models\Cart;

use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $data = food::all();
        return view("home", compact("data"));
    }

    public function redirects()
    {
        $data = food::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('home', compact('data', 'count'));
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;
            $cart = new cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        $count = cart::where('user_id', $id)->where('isPaid', 0)->count();
        $usercart = cart::select('*')->where('user_id', '=', '$id')->get();
        $data = cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        return view('showcart', compact('count', 'data', 'usercart'));
    }

    public function remove($item_id)
    {
        $data = cart::find($item_id);
        if (is_null($data)) {
            return redirect()->back();
        } else {
            $data->delete();
            return redirect()->back();
        }

    }

    public function menu()
    {


        if (is_null(Auth::user())) {
            return redirect('/login');
        } else {
            $data = food::paginate(1);
            $user_id = Auth::id();
            return view('menu', compact('data'));
        }
    }

    public function paymentDone(){
        return view('paymentDone');
    }
}

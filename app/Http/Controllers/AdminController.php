<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Cart;

use App\Models\Reservation;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function users()
    {
        $data = user::paginate(5);
        return view("admin.users", compact("data"));
    }


    public function upload(request $request)
    {
        $data = new food;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('foodimage', $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update($id, request $request)
    {
        $data = food::find($id);
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect('/foodmenu');
    }

    public function reservation(request $request)
    {
        $data = new reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();
        return redirect()->back();
    }

    public function viewreservation()
    {
        $data = reservation::paginate(5);
        return view("admin.adminreservation", compact("data"));
    }


    public function foodmenu()
    {
        $data = food::paginate(5);
        return view("admin.foodmenu", compact("data"));
    }


    public function adminorders()
    {
        $orders = cart::join('food', 'carts.food_id', '=', 'food.id')
            ->select('carts.user_id', DB::raw('GROUP_CONCAT(food.title SEPARATOR ", ") as food_titles'))
            ->where('carts.isPaid', 1)
            ->where('carts.isDone', 0)
            ->groupBy('carts.user_id')
            ->paginate(3);
        return view("admin.adminorders", compact("orders"));
    }

    public function doneOrder($user_id)
    {
       DB::table('carts')
            ->where('user_id', $user_id)
            ->where('isPaid', 1)
            ->where('isDone', 0)
            ->update(['isDone' => 1]);
        return redirect()->back();
    }
}

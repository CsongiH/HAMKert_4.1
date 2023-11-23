<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class StripeController extends Controller
{
    public function checkout()
    {
        return view('checkout');
    }

    public function session()
    {

        $user_id=Auth::id();
        $cartsum = DB::table('food as f')
            ->selectRaw('SUM(f.price) as cartsum')
            ->join('carts as c', 'f.id', '=', 'c.food_id')
            ->where('c.user_id', $user_id)
            ->where('c.isPaid', 0)
            ->where('c.isDone', 0)
            ->value('cartsum');

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create(
            [
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'huf',
                        'product_data' => [
                            'name' => 'HAMKert rendelés',
                        ],
                        'unit_amount'  => 100 * $cartsum,
                    ],
                    'quantity'   => 1,
                ],
            ],
            'mode'        => 'payment',
            'success_url' => route('success'),
            'cancel_url'  => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {

            $user_id = Auth::id();
            $orderIds = Food::join('carts', 'food.id', '=', 'carts.food_id')
                ->where('carts.user_id', $user_id)
                ->where('carts.isPaid', 0)
                ->where('carts.isDone', 0)
                ->select('carts.item_id')
                ->get();
            foreach ($orderIds as $orderId) {
                Cart::where('item_id', $orderId->item_id)
                    ->update(['isPaid' => 1]);
            }

        return redirect(url('/paymentDone'));
    }
}

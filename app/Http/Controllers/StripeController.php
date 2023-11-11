<?php

namespace App\Http\Controllers;

use App\Models\Cart;
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
        $cartsum =100 * DB::table('food as f')
            ->selectRaw('SUM(f.price) as cartsum')
            ->join('carts as c', 'f.id', '=', 'c.food_id')
            ->where('c.user_id', $user_id)
            ->value('cartsum');

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session = \Stripe\Checkout\Session::create(
            [
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'huf',
                        'product_data' => [
                            'name' => 'HAMKert_Teszt',
                        ],
                        'unit_amount'  => $cartsum,
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
        return redirect(url('/paymentDone'));
    }
}

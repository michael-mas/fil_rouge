<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use Stripe\StripeClient;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{



    public function index(){

        $user=auth()->user();



        $count=cart::where('phone',$user->phone)->count();

        $countprice=cart::where('phone',$user->phone)->sum('price');

       // dd($countprice);


    return view('checkout.index',compact('count'));

    }
}

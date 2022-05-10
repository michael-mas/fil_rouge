<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NousController extends Controller
{
    public function index(){
        if (!Auth::id()){
            return view('nous.index');
        }
        $user=auth()->user();

        $count=cart::where('phone',$user->phone)->count();
           return view('nous.index', compact('count'));
       }

}

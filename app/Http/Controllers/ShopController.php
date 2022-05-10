<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class ShopController extends Controller
{
    public function index()
    {

        $user = User::where('phone', '=')->first();



        if (!Auth::id()) {
            if(request()->categories){
                $title= 'Categorie';
                $products = Product::with('categories')->whereHas('categories', function($query){
                    $query->where('slug',request()->categories);
                })->paginate(6);
            }
            else{
            $title = 'Tout';
            $products = Product::with('categories')->paginate(6);
            }
            return view('shop.index',compact('title'))->with('products', $products);
        }

        elseif(request()->categories){
            $user=auth()->user();
            $count=cart::where('phone',$user->phone)->count();
            $title= 'Categorie';
            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('slug',request()->categories);
            })->paginate(6);
        }
        else{
            $user=auth()->user();
            $count=cart::where('phone',$user->phone)->count();
            $title = 'Tout';
            $products = Product::with('categories')->paginate(6);
        }
        return view('shop.index',compact('count','title'))->with('products', $products);

    }

    public function show($slug)
    {

        if (!Auth::id()){

            $product = Product::where('slug', $slug)->firstOrFail();

            return view('shop.show')->with('product', $product);
        }

        else{

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();

            $product = Product::where('slug', $slug)->firstOrFail();

            return view('shop.show',compact('count'))->with('product', $product);
        }

    }
}




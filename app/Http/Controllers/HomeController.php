<?php

namespace App\Http\Controllers;

use App\Models\Cart;

use App\Models\User;

use App\Models\Order;

use App\Models\Product;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
   public function redirect()
   {
       $usertype=Auth::user()->usertype;

       if($usertype=='1'){

            return view('admin.home');
       }

       else{
            $data = product::paginate(3);

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();

            return view('user.home',compact('data','count'));
       }
   }

   public function index(){

    if(Auth::id()){
        return redirect('redirect');
    }

    else{

        $data = product::paginate(3);

       return view('user.home',compact('data'));
   }
}

    public function product_details($id){

$product=product::find($id);

if(Auth::id()){
$user=auth()->user();

$count=cart::where('phone',$user->phone)->count();

        return view('user.product_details', compact('product', 'count'));
    }
else{
    $product=product::find($id);

    return view('user.product_details', compact('product'));

}
}

    public function add_cart(Request $request,$id){

       if(Auth::id()){

        $user=Auth::user();

        $product=product::find($id);

        $cart=new cart;

        $cart->name=$user->name;

        $cart->email=$user->email;

        $cart->phone=$user->phone;

        $cart->address=$user->address;

        $cart->user_id=$user->id;

        $cart->product_title=$product->title;

        if($product->discount_price!=null){

            $cart->price=$product->discount_price * $request->quantity;;

        }

        else{

            $cart->price=$product->price * $request->quantity;;
        }



        $cart->image=$product->image;

        $cart->product_id=$product->id;

        $cart->quantity=$request->quantity;

        $cart->save();

        return redirect()->back()->with('message', 'Produit ajouter au panier');


       }

       else{

        return redirect('login');
       }


    }

    public function showcart(){


        $user=auth()->user();

        $cart=cart::where('phone',$user->phone)->get();

        $count=cart::where('phone',$user->phone)->count();

        return view('user.showcart',compact('count', 'cart'));
    }

    public function deletecart($id){

        $cart=cart::find($id);

        $cart->delete();

        return redirect()->back()->with('message', 'Produit supprimer du panier');
    }

    public function confirmorder(Request $request){

        $user=auth()->user();

        $name=$user->name;

        $phone=$user->phone;

        $address=$user->address;


        foreach($request->productname as $key=>$productname)
{
    $order=new order;

    $order->product_name=$request->productname[$key];

    $order->price=$request->price[$key];

    $order->quantity=$request->quantity[$key];

    $order->name=$name;

    $order->phone=$phone;

    $order->address=$address;

    $order->status="non receptionné";


    $order->save();
}




    DB::table('carts')->where('phone',$phone)->delete();

    return redirect()->back()->with('message', 'Commande envoyé!');

    }

}

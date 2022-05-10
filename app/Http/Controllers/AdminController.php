<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function product(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
        $category=category::all();
        return view('admin.product', compact('category'));
        }
        else{
            $data = product::paginate(3);

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();
            return view('user.home',compact('data','count'));
        }
    }

    public function uploadproduct(Request $request){

        $product=new product;

        $product->title=$request->title;

        $product->description=$request->des;

        $product->price=$request->price;

        $product->discount_price=$request->dis_price;

        $product->quantity=$request->quantity;

        $product->slug=$request->category;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('productimage',$imagename);

        $product->image=$imagename;

        $product->save();

        return redirect()->back()->with('message', 'Produit ajouté avec succès');


    }

    public function showproduct(){

        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
        $data=product::all();
        return view('admin.showproduct',compact('data'));
        }
        else{
            $data = product::paginate(3);

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();
            return view('user.home',compact('data','count'));
        }
    }

    public function delete_product($id){

        $product=product::find($id);

        $product->delete();
        return redirect()->back()->with('message', 'Produit supprimé avec succès');
    }

    public function update_product($id){

        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
        $product=product::find($id);

        $category=category::all();

        return view('admin.update_product', compact('product','category'));
        }

        else{
            $data = product::paginate(3);

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();
            return view('user.home',compact('data','count'));
        }
    }

    public function update_product_confirm(Request $request, $id){

        $product=product::find($id);

        $product->title=$request->title;

        $product->description=$request->des;

        $product->price=$request->price;

        $product->discount_price=$request->dis_price;

        $product->quantity=$request->quantity;

        $product->slug=$request->category;

        $image=$request->image;

        if($image){

            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->image->move('productimage',$imagename);

            $product->image=$imagename;

        }



        $product->save();

        return redirect()->back()->with('message', 'Produit mis à jour avec succès');
    }

    public function view_category(){
        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
        $data=category::all();
        return view('admin.category', compact('data'));
        }

        else{
            $data = product::paginate(3);

            $user=auth()->user();

            $count=cart::where('phone',$user->phone)->count();
            return view('user.home',compact('data','count'));
        }
    }

    public function add_category(Request $request){

        $data=new category;

        $data->name=$request->category;

        $data->slug=$request->slug;

        $data->category_code=$request->code;

        $data->save();

        return redirect()->back()->with('message', 'Categorie ajouté avec succès');

    }

    public function delete_category($id){

        $data=category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Categorie supprimé avec succès');
    }

}

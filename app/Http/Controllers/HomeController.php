<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function home(){
        $product=Product::all();
        return view('home.index',compact('product'));
    }
    public function dashbard_home(){
         $product=Product::all();
          $user=Auth::user();
        $user_id=$user->id;
         $count=Cart::where('user_id',$user_id)->count();
        return view('home.index',compact('product','count'));
    }
    public function productdetail($id){
         $products=Product::find($id);
         if(Auth::id()){
             $user=Auth::user();
        $user_id=$user->id;
         $count=Cart::where('user_id',$user_id)->count();
         }else{
            $count='';
         }
         return view('home.productdetail',compact('products','count'));
    }
    public function addcart($id){
        $product_id=$id;
    
        $user=Auth::user();
        $user_id=$user->id;
        $cart=new Cart();
         $cart->user_id=$user_id;
         $cart->product_id= $product_id;
         $cart->save();
         return redirect()->back();
    }
    public function cartdetail(){
        if(Auth::id()){
            $user=Auth::user();
            $user_id=$user->id;
            $count=Cart::where('user_id', $user_id)->count();
            $cart=Cart::where('user_id', $user_id)->get();
        }
        return view('home.cartdetail',compact('count','cart'));
    }
    public function deleteid($id){
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back();
        }

        public function placeorder(Request $request){
            $name=$request->name;
            $address=$request->address;
            $phone=$request->phone;
            $userid=Auth::user()->id;
            $cart=Cart::where('user_id', $userid)->get();     
            foreach($cart as $carts){
                $order=new Order();
                $order->name=$name;
                $order->address=$address;
                $order->phone=$phone;
                $order->user_id= $userid;
                $order->product_id=$carts->product_id;
                $order->save();
            }
              $reomve_id=Cart::where('user_id', $userid)->get(); 
              foreach ($reomve_id as $remove) {
               $orderreomve=Cart::find( $remove->id);
               $orderreomve->delete();

              }
            return redirect()->back();   
       
        }
}

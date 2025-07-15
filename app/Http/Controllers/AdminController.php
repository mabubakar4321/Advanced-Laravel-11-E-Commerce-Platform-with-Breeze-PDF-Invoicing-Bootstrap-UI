<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;


class AdminController extends Controller
{
    //
    public function vcategory(){
        $category=Category::paginate(2);
        return view('admin.category',compact('category'));
    }
    public function addcategory(Request $request){
        $validate=Validator::make($request->all(),[
            'category'=>'required',
        ]);
        if( $validate->fails()){
            return redirect()->back()->withErrors($validate);
        }
        $category=Category::create([
            'category_name'=>$request->category,
        ]);
      
        return redirect()->back();

    }
    public function deletecategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->back();
    }
    public function showedit($id){
       $category=Category::find($id);
       return view('admin.edit',compact('category'));
    }

        public function update(Request $request, $id){
            $category=Category::find($id);
        $validate=Validator::make($request->all(),[
            'category'=>'required',
        ]);
        if( $validate->fails()){
            return redirect()->back()->withErrors($validate);
        }
        $category->update([
            'category_name'=>$request->category,
        ]);
        return redirect()->back();
    }
    public function addproduct(){
        $category=Category::all();
        return view('admin.addproduct',compact('category'));
    }
    public function storeproduct(Request $request)
{

    $image=$request->image;
    $imagename=time().'.'. $image->getClientOriginalExtension();
    $image->move(public_path('postimage'),$imagename);
    $products=new Product();
    $products->title=$request->title;
     $products->description=$request->description;
      $products->price=$request->price;
       $products->category=$request->category;
        $products->quantity=$request->quantity;
         $products->image=$imagename;
         $products->save();
         return redirect()->back();
   
}
public function viewproduct(){
    $products=Product::paginate(2);
    return view('admin.viewproduct',compact('products'));
}
public function deleteproduct($id){
       $products=Product::find($id);
       $image_path=public_path('postimage/'.$products->image);
       if(file_exists( $image_path)){
        unlink( $image_path);
       }
       $products->delete();
       return redirect()->back();
    
    }
    public function editproduct($id){
        $products=Product::find($id);
        $category=Category::all();
        return view('admin.editproduct',compact('products','category'));
    }
    public function updateproduct(Request $request,$id){
         $products=Product::find($id);

         $image=$request->image;
         if($image){
 $imagename=time().'.'. $image->getClientOriginalExtension();
    $image->move(public_path('postimage'),$imagename);
         }
   
    
    $products->title=$request->title;
     $products->description=$request->description;
      $products->price=$request->price;
       $products->category=$request->category;
        $products->quantity=$request->quantity;
         $products->image=$imagename;
         $products->save();
         return redirect()->back();
    }

    public function searchproduct(Request $request){
        $search=$request->search;
        $products=Product::where('title','LIKE','%'. $search.'%')->paginate(2);
        return view('admin.viewproduct',compact('products'));
    }


    public function viewcustomer(){
        $order=Order::all();
        return view('admin.viewcustomer',compact('order'));
    }
    public function ontheway($id){
        $order=Order::find($id);
        $order->status='On the way';
        $order->save();
        return redirect()->back();
    }
     public function deliver($id){
        $order=Order::find($id);
        $order->status='Deliver';
        $order->save();
        return redirect()->back();
    }
    public function printpdf($id){
        $order=Order::find($id);
         $pdf = Pdf::loadView('admin.invoice',compact('order') );
    return $pdf->download('invoice.pdf');
    }
}
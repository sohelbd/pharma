<?php

namespace App\Http\Controllers;
use App\ProductModel;
use App\GeneralModel;
use App\MailModel;
use App\BillingModel;
use App\Order;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class PharmaController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }
    public function fristpage()
    {
        $general=GeneralModel::find(2);
        $product=ProductModel::where('popular','yes')->limit(6)->get();
        $new=ProductModel::orderBy('id','desc')->limit(4)->get();
    	return view('homes',compact('general','product','new'));
    }
    public function secondpage()

    {
        $general=GeneralModel::find(2);
        $allproduct=ProductModel::all();
    	return view('store',compact('allproduct','general'));
    }
     public function thirdpage()
    {
        $general=GeneralModel::find(2);
    	return view('about',compact('general')); 
    }
     public function fourthpage()
    {
       $general=GeneralModel::find(2);
    	return view('contact',compact('general')); 
    }
    public function details($id)
    {
       $general=GeneralModel::find(2); 
       $product=ProductModel::find($id);
       return view('details',compact('product','general'));
    }
    public function cart()
    {
        Cart::setGlobalTax(15);
        
        $content=Cart::content();
        // dd($content);
        $general=GeneralModel::find(2); 
        return view('cart',compact('general','content'));
    }
    public function add_to_cart(Request $Request)
    {
        $id=$Request->id;
        $name=$Request->name;
        $qty=$Request->qty;
        $price=$Request->price;
        Cart::add($id, $name, $qty, $price, 0);
        return redirect('/cart');
    }
    public function remove_item($id)
    {
       Cart::remove($id);
       return redirect('/cart');
    }
      public function save_contact(Request $request)
    {
      $general=GeneralModel::find(2); 
       //return view('save_contact',compact('general'));

        $data=array();
         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['subject']=$request->subject;
         $data['msg']=$request->msg;
         MailModel::create($data);

         return redirect('/contact');
    }


      public function checkout()
    {
     
       $general=GeneralModel::find(2); 
       $content=Cart::content();
      
       return view('checkout',compact('general','content'));      
         
}
  public function save_order(Request $request)
  {
      
         $data['name']=$request->name;
         $data['email']=$request->email;
         $data['phone']=$request->phone;
         $data['address']=$request->address;
         $data['productName']=$request->productName;   
         $data['qty']=$request->qty;  
         $data['subTotal']=$request->subTotal;
         $data['tax']=$request->tax;
         $data['total']=$request->total;
         Order::create($data);

         return redirect('/thankyou');
  }

    public function thankyou()
    {
        $general=GeneralModel::find(2);
        return view('thankyou',compact('general'));
    }
}

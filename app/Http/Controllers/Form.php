<?php

namespace App\Http\Controllers;
use App\GeneralModel;
use App\MailModel;
use App\ProductModel;
use App\Order;
use Auth;
use Illuminate\Http\Request;

class Form extends Controller

{
      public function logout()
    {
        Auth::logout();
        return redirect('/dashboard');
    } 
  
   public function general()
    {
        $data=GeneralModel::all();
        return view('admin.general',compact('data'));
    }
 
    public function store(Request $request)
    {
        $data['name']=$request->name;

        if(isset($request->logo)){
         $logo=$request->file('logo')->getClientOriginalName();
         $request->file('logo')->move(base_path().'/public/img',$logo);

         $data['logo']=$logo;

       }

        //$data['logo']=$request->logo;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['phone']=$request->phone;

        if(isset($request->slider_photo)){
         $slider_photo=$request->file('slider_photo')->getClientOriginalName();
         $request->file('slider_photo')->move(base_path().'/public/img',$slider_photo);

         $data['slider_photo']=$slider_photo;

       }

        //$data['slider_photo']=$request->slider_photo;
        $data['heading']=$request->heading;
        $data['sub_heading']=$request->sub_heading;
        $data['fi_block_heading']=$request->fi_block_heading;
        $data['s_block_heading']=$request->s_block_heading;
        $data['t_block_heading']=$request->t_block_heading;
        $data['fi_block_data']=$request->fi_block_data;
        $data['s_block_data']=$request->s_block_data;
        $data['t_block_data']=$request->t_block_data;
        $data['h_1_block_heading']=$request->h_1_block_heading;
        $data['h_2_block_heading']=$request->h_2_block_heading;
        $data['h_1_block_data']=$request->h_1_block_data;
        $data['h_2_block_data']=$request->h_2_block_data;

        if(isset($request->h_1_block_photo)){
         $h_1_block_photo=$request->file('h_1_block_photo')->getClientOriginalName();
         $request->file('h_1_block_photo')->move(base_path().'/public/img',$h_1_block_photo);

         $data['h_1_block_photo']=$h_1_block_photo;

       }

        //$data['h_1_block_photo']=$request->h_1_block_photo;

        if(isset($request->h_2_block_photo)){
         $h_2_block_photo=$request->file('h_2_block_photo')->getClientOriginalName();
         $request->file('h_2_block_photo')->move(base_path().'/public/img',$h_2_block_photo);

         $data['h_2_block_photo']=$h_2_block_photo;

       }

       // $data['h_2_block_photo']=$request->h_2_block_photo;
        $data['about_text']=$request->about_text;
        $data['about_right_block']=$request->about_right_block;
        $data['about_left_block']=$request->about_left_block;

          if(isset($request->about_right_photo)){
         $about_right_photo=$request->file('about_right_photo')->getClientOriginalName();
         $request->file('about_right_photo')->move(base_path().'/public/img',$about_right_photo);

         $data['about_right_photo']=$about_right_photo;

       }
        //$data['about_right_photo']=$request->about_right_photo;
       
               if(isset($request->about_left_photo)){
         $about_left_photo=$request->file('about_left_photo')->getClientOriginalName();
         $request->file('about_left_photo')->move(base_path().'/public/img',$about_left_photo);

         $data['about_left_photo']=$about_left_photo;

       }

        //$data['about_left_photo']=$request->about_left_photo;
        $data['about_fi']=$request->about_fi;
        $data['about_s']=$request->about_s;
        $data['about_t']=$request->about_t;
   
        GeneralModel::create($data);

    }

 
    public function edit($id)
    {
       $data=GeneralModel::find($id);
       return view('admin.edit_general_form',compact('data'));
    }

  
     
    public function update_general(Request $request)
    {
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['address']=$request->address;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['heading']=$request->heading;
        $data['sub_heading']=$request->sub_heading;
        $data['fi_block_heading']=$request->fi_block_heading;
        $data['s_block_heading']=$request->s_block_heading;
        $data['t_block_heading']=$request->t_block_heading;
        $data['fi_block_data']=$request->fi_block_data;
        $data['s_block_data']=$request->s_block_data;
        $data['t_block_data']=$request->t_block_data;
        $data['h_1_block_heading']=$request->h_1_block_heading;
        $data['h_2_block_heading']=$request->h_2_block_heading;
        $data['h_1_block_data']=$request->h_1_block_data;
        $data['h_2_block_data']=$request->h_2_block_data;
        $data['about_text']=$request->about_text;
        $data['about_right_block']=$request->about_right_block;
        $data['about_left_block']=$request->about_left_block;
        $data['about_fi']=$request->about_fi;
        $data['about_s']=$request->about_s;
        $data['about_t']=$request->about_t;

        GeneralModel::where('id',$data['id'])
          ->update($data);

           return redirect('/general');
    }

  
    public function destroy($id)
     {
        $data=GeneralModel::findOrFail($id);
        $data->delete();

        return redirect('/general');
    } 

        public function indexa()
    {
        return view('admin.admin_layout');
    }

    public function dash()
    {
        return view('admin.dashboard');
    }

    public function admin()
    {
        return view('admin.admin');
    }

  
//--------------------------------------------------------
    public function product()
    {
        $data=ProductModel::all();

        return view('admin.product',compact('data'));

    }public function store_product(Request $request)
    {
        $data['name']=$request->name;
        $data['description']=$request->description;
        $data['price']=$request->price; 

        if(isset($request->photo)){
         $photo=$request->file('photo')->getClientOriginalName();
         $request->file('photo')->move(base_path().'/public/img',$photo);

         $data['photo']=$photo;

       } 

        $data['popular']=$request->popular; 

        ProductModel::create($data);
        return redirect('/product');

    }
      public function edit_product($id)
    {
        $data=ProductModel::find($id);
     return view('admin.product_edit_form',compact('data'));
    }
    public function update_product(Request $request)
    {
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $data['popular']=$request->popular;

        ProductModel::where('id',$data['id'])
          ->update($data);

           return redirect('/product');
    }
 
    public function delete_product($id)
    {
        $data=ProductModel::findOrFail($id);
        $data->delete();

        return redirect('/product');
    } 

  
    //------------------------------------------------------

    public function mail()
    {
        $data=MailModel::all();
        return view('admin.mail',compact('data'));
    }
    public function store_mail(Request $request)
    {
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['subject']=$request->subject; 
        $data['msg']=$request->msg; 

        MailModel::create($data);
        return redirect('/mail');

    }
        public function edit_mail($id)
    {
       $data=MailModel::find($id);

       return view('admin.mail_edit_form',compact('data'));
    }

    public function update_mail(Request $request)
    {
        $data['id']=$request->id;
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['subject']=$request->subject; 
        $data['msg']=$request->msg; 
        MailModel::where('id',$data['id'])
        ->update($data);
        return redirect('/mail');
    }

     public function delete_mail($id)
    {
        $data=MailModel::findOrFail($id);
        $data->delete();

        return redirect('/mail');
    } 

    public function order_info()
    {
     $data=Order::all();
        return view('admin.order_info',compact('data'));
    }
}




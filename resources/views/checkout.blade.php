@extends('welcome')
@section('content')

   <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Checkout</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="bg-light rounded p-3">
              <p class="mb-0">Returning customer? <a href="#" class="d-inline-block">Click here</a> to login</p>
            </div>
          </div>
        </div>
        <div class="row">
      

         <div class="col-md-12"> 

            
              {!! Form::open(array('url' => '/save_order','files'=>true)) !!}
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
              

                  <table class="table site-block-order-table mb-12">
                  <thead>
                      <th>Order Info</th>
                      <th></th>
                    </thead>
                    <tr>
                        <td class="text-black font-weight-bold"><strong>Name</strong></td>
                        <td ><input class="text-black" name="name" value="" type="text"></td>
                        <td class="text-black font-weight-bold"><strong>Email</strong></td>
                        <td ><input class="text-black" name="email" value="" type="text"></td>
                      </tr>
                         <tr>
                        <td class="text-black font-weight-bold"><strong>Phone</strong></td>
                        <td ><input class="text-black" name="phone" value="" type="text"></td>
                        <td class="text-black font-weight-bold"><strong>Address</strong></td>
                        <td ><input class="text-black" name="address" value="" type="text"></td>
                      </tr>

                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                    

                    @foreach($content as $c)	
                   <tr>
                      <td><input class="text-black" name="productName" value="{{$c->name}}" readonly type=""></td>
                      <td ><input class="text-black" name="qty" value="{{$c->qty}}" readonly type=""></td>
                   </tr>
                     
                      @endforeach
                       <thead>
                      <th>Card Total</th>
                      <th></th>
                    </thead>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td ><input class="text-black" name="subTotal" value="{{Cart::subtotal()}}" readonly type=""></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>TAX</strong></td>
                        <td ><input class="text-black" name="tax" value="{{Cart::tax()}}" readonly type=""></td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Total</strong></td>
                        <td ><input class="text-black" name="total" value="{{Cart::total()}}" readonly type=""></td>
                      </tr>
                    
                    </tbody>

                  </table>

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-block" >Place Order</button>
                  </div>
     {!! Form::close() !!} 
                </div>
            
          </div>
            </div>
    
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>


        <div class="site-section bg-secondary bg-image" style="background-image: url({{URL::to('public/fornt/images/bg_2.jpg')}});">
      <div class="container">
        <div class="row align-items-stretch">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url({{URL::to('public/fornt/images/bg_1.jpg')}});">
              <div class="banner-1-inner align-self-center">
                <h2>Pharma Products</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
          <div class="col-lg-6 mb-5 mb-lg-0">
            <a href="#" class="banner-1 h-100 d-flex" style="background-image: url({{URL::to('public/fornt/images/bg_2.jpg')}});">
              <div class="banner-1-inner ml-auto  align-self-center">
                <h2>Rated by Experts</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae ex ad minus rem odio voluptatem.
                </p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

@endsection
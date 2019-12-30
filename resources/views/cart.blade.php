@extends('welcome')
@section('content')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($content as $c)
                  <tr>
                    <td class="product-name">
                      <h2 class="h5 text-black">{{$c->name}}</h2>
                    </td>
                     
                    <td>Tk.{{$c->price}}</td>
                  
                    <td>
               
                        {{$c->qty}}
                      </div>
    
                    </td>
                    <td>Tk.{{$c->qty*$c->price}}</td>
                    <td><a href="{{URL::to('remove_item/'.$c->rowId)}}" class="btn btn-primary height-auto btn-sm">X</a></td>
                  </tr>
    @empty
<tr>
  <th class="text-center">No item Found!</th>
</tr>
    @endforelse
                  
                </tbody>
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">

          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block"><a href="{{URL::to('/store')}}">Continue Shopping</a></button>
              </div>
              <div class="form-group">
                <label for="c_ship_different_address" class="text-black" data-toggle="collapse"
                  href="#ship_different_address" role="button" aria-expanded="false"
                  aria-controls="ship_different_address">
                  <button class="btn btn-primary btn-md btn-block">Shipping Address</button></label>
                <div class="collapse" id="ship_different_address">
                  <div class="py-2">
    
                    
    
    
                    <div class="form-group row">
                      <div class="col-md-6">
                        <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                      </div>
                    </div>
    
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_companyname" class="text-black">Company Name </label>
                        <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                      </div>
                    </div>
    
                    <div class="form-group row">
                      <div class="col-md-12">
                        <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_address" name="c_diff_address"
                          placeholder="Street address">
                      </div>
                    </div>
    
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                    </div>
    
                   
    
                    <div class="form-group row mb-5">
                      <div class="col-md-6">
                        <label for="c_diff_email_address" class="text-black">Email Address <span
                            class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                      </div>
                      <div class="col-md-6">
                        <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone"
                          placeholder="Phone Number">
                      </div>
                    </div>
    
                  </div>
    
                </div>
              </div>
             <!--  <div class="col-md-6 mb-3 mb-md-0">
               

                <button class="btn btn-primary btn-md btn-block">Update Cart</button>
              </div> -->
              <!-- <div class="col-md-6">
                <button class="btn btn-outline-primary btn-md btn-block"><a href="{{URL::to('/store')}}">Continue Shopping</a></button>
              </div> -->
            </div>
     
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Tk.{{Cart::subtotal()}}</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">TAX</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Tk.{{Cart::tax()}}</strong>
                  </div>
                </div>
                 <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">Tk.{{Cart::total()}}</strong>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='{{URL::to('/checkout')}}'">
                      Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
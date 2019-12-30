@extends('welcome')
@section('content')
     
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{URL::to('/')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Store</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
           
        <div class="row">
          @forelse($allproduct as $d)

          <div class="col-sm-6 col-lg-3 text-center item mb-3">
            
            <a href="{{URL::to('/details/'.$d->id)}}"> <img src="{{('public/img/'.$d->photo)}}" width="100px" height="100px" alt="Image"></a>
            <h6 class="text-dark"><a href="{{URL::to('/details/'.$d->id)}}">{{$d->name}}</a></h6>
           <h6 class="price">TK.{{$d->price}}</h6>
          </div>
    
           @empty
            <div>
              <h2>There is no item!!!</h2>
            </div>
            @endforelse
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-secondary bg-image" style="background-imageurl({{URL::to('public/fornt/images/bg_2.jpg')}});">
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
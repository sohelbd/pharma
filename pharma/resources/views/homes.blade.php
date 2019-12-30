@extends('welcome')
@section('content')
<div class="site-blocks-cover" style="background-image: url({{URL::to('public/fornt/images/hero_1.jpg')}});">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
            <div class="site-block-cover-content text-center">
              <h2 class="sub-title">{{$general->sub_heading}}</h2>
              <h1>{{$general->heading}}</h1>
              <p>
                <a href="{{URL::to('/store')}}" class="btn btn-primary px-5 py-3">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row align-items-stretch section-overlap">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-primary h-100">
              <a href="#" class="h-100">
                <h5>{{$general->fi_block_heading}}</h5>
                <p>
                  Amet sit amet dolor
                  <strong>{{$general->fi_block_data}}</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap h-100">
              <a href="#" class="h-100">
                <h5>{{$general->s_block_heading}}</h5>
                <p>
                  Amet sit amet dolor
                  <strong>{{$general->s_block_data}}</strong>
                </p>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="banner-wrap bg-warning h-100">
              <a href="#" class="h-100">
                <h5>{{$general->t_block_heading}}</h5>
                <p>
                  Amet sit amet dolor
                  <strong>{{$general->t_block_data}}</strong>
                </p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Popular Products</h2>
          </div>
        </div>

        <div class="row">
          @forelse($product as $p)
          <div class="col-sm-6 col-lg-4 text-center item mb-4">
            
            
            <a href="{{URL::to('/details/'.$p->id)}}"> <img src="{{('public/img/'.$p->photo)}}" width="150px" height="150px" alt="Image"></a>
            <h5 class="text-dark"><a href="{{URL::to('/details/'.$p->id)}}">{{$p->name}}</a></h5>
            <h6 class="price">TK.{{$p->price}}</h6>
            
          </div> 
           @empty
            <div>
              <h2>There is no item!!!</h2>
            </div>
            @endforelse
        </div>

        <div class="row mt-5">
          <div class="col-12 text-center">
          <a href="{{URL::to('/store')}}" class="btn btn-primary px-4 py-3">View All Products</a>
          </div>
        </div>
      </div>
    </div>    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">New Products</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">

            @forelse($new as $n)
              <div class="text-center item mb-4">
                <a href="{{URL::to('/details/'.$n->id)}}"> <img src="{{('public/img/'.$n->photo)}}" width="200px" height="200px" alt="Image"></a>
                <h5 class="text-dark"><a href="{{URL::to('/details/'.$n->id)}}">{{$n->name}}</a></h5>
                <h6 class="price">TK.{{$n->price}}</h6>
              </div>
             @empty
            <div>
              <h2>There is no item!!!</h2>
            </div>
            @endforelse

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2 class="text-uppercase">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 no-direction owl-carousel">       
              <div class="testimony">
                <blockquote>
                  <img src="{{('public/fornt/images/person_1.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat unde.&rdquo;</p>
                </blockquote>

                <p>&mdash; Kelly Holmes</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="{{('public/fornt/images/person_2.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Sohel Rana</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="{{('public/fornt/images/person_3.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Lucas Gallone</p>
              </div>
        
              <div class="testimony">
                <blockquote>
                  <img src="{{('public/fornt/images/person_4.jpg')}}" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                  <p>&ldquo;Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore
                    obcaecati maiores voluptate aspernatur iusto eveniet, placeat ab quod tenetur ducimus. Minus ratione sit quaerat
                    unde.&rdquo;</p>
                </blockquote>
              
                <p>&mdash; Andrew Neel</p>
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

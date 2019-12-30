<!DOCTYPE html>
<html lang="en">

<head>
  <title>S.Pharma &mdash; Helth & Beauty</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
  <link rel="stylesheet" href="{{URL::to('public/fornt/fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{URL('public/fornt/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL('public/fornt/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{URL('public/fornt/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{URL('public/fornt/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{URL('public/fornt/css/owl.theme.default.min.css')}}">


  <link rel="stylesheet" href="{{URL::to('public/fornt/css/aos.css')}}">

  <link rel="stylesheet" href="{{URL::to('public/fornt/css/style.css')}}">

</head>

<body>

  <div class="site-wrap">


    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="{{URL::to('/')}}" class="js-logo-clone">S.pharma</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                <li><a href="{{URL::to('/store')}}">Store</a></li>
              
                <li><a href="{{URL::to('/about')}}">About</a></li>
                <li><a href="{{URL::to('/contact')}}">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="{{URL::to('/cart')}}" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">{{Cart::count()}}</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

  @yield('content')


    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">About Us</h3>
              <p> S.PHARMA Limited has extended its range of services towards the highway of global market. It pioneered exports of medicines from Bangladesh in 2010</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Quick Links</h3>
            <ul class="list-unstyled">
              <li><a href="#">Facebook</a></li>
              <li><a href="#">Youtube</a></li>
              <li><a href="#">Instragram</a></li>
              <li><a href="#">Twitter</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">{{$general->address}}</li>
                <li class="phone"><a href="tel://23923929210">{{$general->phone}}</a></li>
                <li class="email">{{$general->email}}</li>
              </ul>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;
              <script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"
                class="text-primary">S.Pharma</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="{{URL::to('public/fornt/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{URL::to('public/fornt/js/jquery-ui.js')}}"></script>
  <script src="{{URL::to('public/fornt/js/popper.min.js')}}"></script>
  <script src="{{URL::to('public/fornt/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::to('public/fornt/js/owl.carousel.min.js')}}"></script>
  <script src="{{URL::to('public/fornt/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{URL::to('public/fornt/js/aos.js')}}"></script>

  <script src="{{URL::to('public/fornt/js/main.js')}}"></script>

</body>

</html{{('>
@extends('welcome')
@section('content')

<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Contact</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-12">



{!! Form::open(array('url' => '/save_contact','files'=>true)) !!}

@if($errors->any())
<div>
  @foreach($errors->all() as $error)
  <p>{{$error}}</p>

 @endforeach
</div>
@endif
<table class="table table-bordered">
 
  <tr>
    <th>Name</th>   
    <td>{!! Form::text('name', '') !!}</td>  
    <th>Email</th>
    <td>{!! Form::text('email', '') !!} </td>
    </tr>
  <tr>
    <th>Subject</th>
    <td>{!! Form::text('subject', '') !!}</td>

    <th>Message</th>
    <td>{!! Form::text('msg', '') !!}</td>    
  </tr>
  
</table>
 <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">

{!! Form::close() !!} 
    
            
          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section bg-primary">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="text-white mb-4">Offices</h2>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">London</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-4 bg-white mb-3 rounded">
              <span class="d-block text-black h6 text-uppercase">Bangladesh</span>
              <p class="mb-0">112 Fake St. San Francisco, DOHS, Mirpur</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>


@endsection

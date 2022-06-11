@extends('layouts.app')
@section('content')
<style> .about-section {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  padding: 50px;
  text-align: center;
  background-color: #91bd2c;
  color: white;
  
}
</style>
<form action="{{route('contactus')}}" class="form-group" method="post">
  <!-- Cross Site Request Forgery-->
  {{csrf_field()}}

  @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif

<div class = "about-section">
<div class="container-fluid bg-grey">
    <h2 class="text-center">CONTACT</h2>
    <div class="row">
      <div class="col-sm-5">
        <h3>Contact us and we'll get back to you within 24 hours.</h3>
        <p><span class="glyphicon glyphicon-map-marker"></span> Dhaka, Bangladesh.</p>
        <p><span class="glyphicon glyphicon-phone"></span> +880 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span> bykea@gmail.com</p>
      </div>

      <div class="col-sm-7">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Your Name" > 
            @error('name') 
            <span class="text-danger">{{$message}}</span>
        @enderror <br>
          </div> 
           
          <div class="col-sm-6 form-group">
            <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Your email" >
            @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        @error('comments')
        <span class="text-danger">{{$message}}</span>
    @enderror
        <div class="row">
          <div class="col-sm-12 form-group">
            <input type="submit" class="btn btn-success"> 
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
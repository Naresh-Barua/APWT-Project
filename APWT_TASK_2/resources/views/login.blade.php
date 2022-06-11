@extends('layouts.app')
@section('content')

<style>
  .about-section {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  padding: 50px;
  text-align: center;
  background-color: #91bd2c;
  color: white;
  
}

  </style>
  <form action="{{route('login')}}" class="form-group" method="post">
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
<div class="container text-center"> 
<h1>
   Login
</h1>
    <div class="col-md-4 form-group container text-center">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Your Email address">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    
    <div class="col-md-4 form-group container text-center">
        
        <span>Password</span> 
        <input type="text" name="password"  class="form-control " placeholder="Your password">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div> 

   

    
    <br>
    <input type="submit" class="btn btn-success">   

       
</form>
</div>
</div>
@endsection 



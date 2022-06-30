@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
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
  <form action="{{route('signup')}}" class="form-group" method="post">
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
    Hello, Welcome to BYKEA

</h1>

<h2>Create Your Account</h2>

     <div class="col-md-4 form-group container text-center"> 
        
        
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Your Name" >
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-4 form-group container text-center"> 
        
        
            <span>User Name</span>
            <input type="text" name="username" value="{{old('username')}}" class="form-control" placeholder="Your Username" >
            @error('username')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

    <div class="col-md-4 form-group container text-center">
        <span>Id</span>
        <input type="text" name="stuid" value="{{old('stuid')}}"class="form-control" placeholder="Your ID">
        @error('stuid')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group container text-center">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{old('dob')}}" class="form-control" placeholder="Your date of birth">
        @error('dob')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group container text-center">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Your Email address">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group container text-center">
        
        <span>Phone</span> 
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control " placeholder="Your phone number">
        @error('phone')
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

    <div class="col-md-4 form-group container text-center">
        
        <span>Confirm Password</span> 
        <input type="text" name="confirm password"  class="form-control " placeholder="confirm password">
        @error('confirm password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div> 

    <div class="form-check d-flex justify-content-center mb-5">
        <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
        <label class="form-check-label" for="form2Example3">
          I agree all statements in <a href="#!">Terms of service</a>
        </label>
      </div>
    <br>
    <button class= "button">
        <span class="text">submit</span>
    <i class="ri-check-line icon"></i>
    </button>

    <div class="text-center mt-4">
                    
        <span>Already a member?</span>
        <a href="{{route('login')}}" class="text-decoration-none">Login</a>

      </div>
</form>
</div>
</div>
@endsection 



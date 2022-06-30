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
.center {
  display: flex;
  align-items: center;
  justify-content: center;
  
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
        
        
    <span>User Name</span>
    <input type="text" name="username" value="{{old('username')}}" class="form-control" placeholder="Your Username" >
    @error('username')
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
    <button class= "button">
        <span class="text">submit</span>
    <i class="ri-check-line icon"></i>
    </button>

       
</form>
</div>
</div>

@endsection 



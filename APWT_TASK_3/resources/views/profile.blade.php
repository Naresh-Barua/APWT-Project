@extends('layouts.log')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
<style>
    .about-section {
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    padding: 50px;
    text-align: center;
    background-image: linear-gradient(to right, #3ab5b0 0%, #3d99be 31%, #56317a 100%);
    color: white;
    
  }
  .center {
    display: flex;
    align-items: center;
    justify-content: center;

    
  }
  /* .about{text-align: right;} */
  
    </style>

<div class = "about-section">
    <div class="container text-center"> 

<h2>Edit Profile</h2>
<form action="{{route('profile')}}" class="form-group" method="post">
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
  

        <div class="col-md-4 form-group container text-center">
            <span>Name</span>
            <input type="text" name="name" value="{{$student->name}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    
    <div class="col-md-4 form-group container text-center">
        <span>ID</span>
        <input type="text" name="stuid" value="{{$student->stuid}}"class="form-control">
        @error('stuid')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group container text-center">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{$student->dob}}"class="form-control">
        @error('dob')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group container text-center">
        <span>Email</span>
        <input type="text" name="email" value="{{$student->email}}"class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="col-md-4 form-group container text-center">
        <span>Phone</span>
        <input type="text" name="phone" value="{{$student->phone}}"class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>

<br>

    <button class= "button">
        <span class="text">Edit</span>
    <i class="ri-check-line icon"></i>
    </button>                  
</form>





</div>
</div>




@endsection
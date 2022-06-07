@extends('layouts.app')

@section('content')
<style> .about-section {
    margin-top: 0px;
    margin-left: 0px;
    margin-right: 0px;
    padding: 50px;
    text-align: center;
    background-color: #92162b;
    color: white;
    
  }
  </style>
  <div class = "about-section">
<div class="container-fluid text-center">
<h1>Welcome to BYKEA {{$name}}</h1>

<p>ID: {{$id}}</p>
<h2>CHOOSE A SERVICES</h2>
</div>

<div class="container-fluid text-center">
    
    <h4>We offer</h4>
    <br>

<h3> 
</div> 
  </div>
  <div class="container-fluid text-center"> <h3>
@foreach($names as $n)
<li>{{$n}}</li>
@endforeach </h3>
  </div>

@endsection
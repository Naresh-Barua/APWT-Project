@extends('layouts.log')
@section('content')
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
  .about{text-align: right;}
  table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;


}
    </style>
    <div class="about"> Logged in as
@if(Session::get('student')) {{Session::get('student')}} 
<a  class="btn btn-danger"  href= "{{route('logout')}}"> Log out </a> </div>
<div class = "about-section">
    <div class="container text-center"> 

<table class="table table-border">
    <tr>
        <th>Name</th>
        <td>{{$student->name}}</td>
    </tr>
    <tr>
        <th>ID</th>
        <td>{{$student->stuid}}</td>
    </tr>  

    <tr>
        <th>Date of Birth</th>
        <td>{{$student->dob}}</td>
    </tr>
    <tr>
        <th>EMAIL</th>
        <td>{{$student->email}}</td>
    </tr>
    <tr>
        <th>PHONE</th>
        <td>{{$student->phone}}</td>
    </tr>
        {{-- <th colspan="2">Action</th> --}}
       <tr>
        
        
      
       
        
    </tr>

</table>
</div>
</div>


@endif 
@endsection
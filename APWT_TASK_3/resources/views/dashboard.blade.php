@extends('layouts.log')
@section('content')

@if(Session::get('student')) {{Session::get('student')}} 
<a class="btn btn-danger"  href= "{{route('logout')}}">Log out </a>


<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>DOB</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        {{-- <th colspan="2">Action</th> --}}
    </tr>
  
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->stuid}}</td>
        <td>{{$student->dob}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->phone}}</td>
        
    </tr>

</table>
   
</div>
@endif 
@endsection
@extends('layouts.log')
@section('content')


<h1>

{{ Auth::user()->name }}

</h1>

@endsection
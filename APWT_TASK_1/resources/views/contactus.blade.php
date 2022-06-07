@extends('layouts.app')
@section('content')
<style> .about-section {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 0px;
  padding: 50px;
  text-align: center;
  background-color: maroon;
  color: white;
  
}
</style>
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
            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Send</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
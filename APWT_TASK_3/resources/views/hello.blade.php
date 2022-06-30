
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
<div class = "about-section">
<div class="container-fluid text-center">
<h1>
    Hello, Welcome to BYKEA

</h1>


</div>
<div class="container-fluid text-center bg-grey">
    <h2></h2><br>
    <h4>Here you can find your bike,cars and delivery for you all in one place.</h4>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="./images/ic_bike_feature_2.png" alt="Bike" width="400" height="300">
          <p><strong>Bike</strong></p>
          <p>Now you can get your bike at your doorstep.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="./images/images.png" alt="Car" width="400" height="300">
          <p><strong>Car</strong></p>
          <p>Book your car now.</p>
        </div>
      </div><br>
      
      <div class="col-sm-4 center">
        <div class="thumbnail">
          <img src="./images/ic_Parcel_Feature_1.png" alt="Delivery" width="400" height="300">
          <p><strong>Delivery</strong></p>
          <p>Make your delivery with bykea.</p>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
  </html>
@endsection
@extends('layouts.app')
@section('content')

<!-- Container (About Section) -->
<style> .about-section {
  margin-top: 0px;
  margin-left: 0px;
  margin-right: 20px;
  padding: 50px;
  text-align: center;
  background-color: #92162b;
  color: white;
  
}
.col-sm-8{
  margin-left: 200px;
}

</style>
<div class="container ">
    <div class="row">
      <div class = "about-section">
      
      <div class="col-sm-8">
        <h2>BYKEA</h2><br>
        <h4>Bykea started its journey as a delivery service back in 2015 with its fleet of motorcycles and bicycles. We acted as a delivery service for several E-Commerce Companies of Bangladesh. Bykea is the first Bangladeshi company to offer On-demand Transport Sharing services abroad. On 3 December 2019, Pathao became the first major ride-sharing service providing company in Bangladesh to get enlistment certificate from the authorities in Bangladesh.</h4><br>
        <p>Bykea currently provides on-demand ride-sharing, on-demand parcel, courier delivery services in major cities like Dhaka, Chittagong and Sylhet and in Kathmandu, Pokhara, Lalitpur and many more cities of Nepal and Bangladesh. Its ride sharing services along with delivery services are currently available in Dhaka, Chittagong, Sylhet and Nepal.</p>
        {{-- <br><button class="btn btn-default btn-lg color: black">Get in Touch</button> --}}
      </div>
      
    </div>
  </div>

<br>


  <div class="container-fluid text-center">
 <h2>What our customers say</h2>
  
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"The delivery system is the best. I am so happy with the fast and secure delivery of my product!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      
    </div>

  </div>

</div>

@endsection
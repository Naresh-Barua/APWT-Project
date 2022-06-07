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
<h1>
    Welcome to BYKEA Team.
</h1>
<h2>
This is our development team for you.
</h2>
<h2>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        </head>
        <body>
            <!-- Our Team Section -->
            <section class="our-team">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                           
                        </div>
                    </div>
                    <hr class="mb-5 mt-4">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <img src="./images/m1.png"  alt=""  width="250" height="150">
                                <div class="member-info">
                                    <div class="member-detail">
                                        <h4>Naresh Barua</h4>
                                        <span>Web Designer</span>
                                    </div>
                                    <div class="social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <img src="./images/m2.png"  alt="" width="250" height="150">
                                <div class="member-info">
                                    <div class="member-detail">
                                        <h4>Sakib Rahman</h4> 
                                        <span>Web Developer</span>
                                    </div>
                                    <div class="social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <img src="./images/m3.png"  alt="" width="200" height="150">
                                <div class="member-info">
                                    <div class="member-detail">
                                        <h4>Swarnab Saha</h4> 
                                        <span>IOS Developer</span>
                                    </div>
                                    <div class="social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-3 col-md-6">
                            <div class="member">
                                <img src="./images/m4.png"  alt="" width="250" height="150">
                                <div class="member-info">
                                    <div class="member-detail">
                                        <h4>Maria Akter Kanta</h4> 
                                        <span>Angular Developer</span>
                                    </div>
                                    <div class="social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="#"><i class="fab fa-github"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5">
                </div>
            </div>
            </section>
            <!-- End Our Team Section -->
        </body>
    </html>
</h2>

@endsection
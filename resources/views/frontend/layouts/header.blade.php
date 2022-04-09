<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Photography salon 2022</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <!-- font-family: 'Mulish', sans-serif;
    font-family: 'Poppins', sans-serif; -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- slick CSS -->    
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css')}}" type="text/css">

    <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">
  </head>
  <body>
    <header class="page-header">
      <div class="top-header-mobile">
        <ul class="clearfix">
          <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
          <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</a></li>
        </ul>
      </div>
      <div class="middle-header">
        <div class="container clearfix">      
              
          <div class="logo">
              <a href="#"><img src="{{ asset('frontend/assets/images/logo.png')}}" class="img-fluid" alt="Dream Photography"></a>
          </div>

          <div class="toggle-menu"><i class="fa fa-bars" aria-hidden="true"></i></div>
  
          <div class="right-header">
            <div class="top-header clearfix">
              <div class="language">
                <i class="fa fa-language" aria-hidden="true"></i>
                <select>
                  <option>Language</option>
                </select>
              </div>
              <div class="login-register">
                <ul class="clearfix">
                  <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                  <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#RegisterModal">Register</a></li>
                </ul>
              </div>
              <div class="support-logo">
                <ul class="clearfix">
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-1.png')}}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-2.png')}}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-3.png')}}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-4.png')}}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-5.png')}}" alt=""></a></li>
                </ul>
              </div>
            </div>
            <nav class="nav-primary">
              <ul class="clearfix">
                <li><a href="#">Home</a></li>
                <li><a href="#">Entry Rules</a></li>
                <li><a href="#">Entry Form</a></li>
                <li><a href="#">Payment</a></li>
                <li><a href="#">Status</a></li>
                <li><a href="#">Results</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>

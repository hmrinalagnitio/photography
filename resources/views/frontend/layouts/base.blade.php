<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Photography salon 2022</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ') }}"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    <!-- font-family: 'Mulish', sans-serif;
    font-family: 'Poppins', sans-serif; -->
    <!-- Bootstrap CSS -->
    <link href="{{ asset('frontend/assets/css/bootstrap.css ') }}" rel="stylesheet">
    <!-- slick CSS -->    
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css ') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick-theme.css ') }}" type="text/css">

    <link href="{{ asset('frontend/assets/css/style.css ') }}" rel="stylesheet">
    @livewireStyles
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
              <a href="#"><img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid" alt="Dream Photography"></a>
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
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-1.png') }}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-2.png') }}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-3.png') }}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-4.png') }}" alt=""></a></li>
                  <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-5.png') }}" alt=""></a></li>
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
@yield('content')
    
    
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="col-md-8">
          <p>&copy; Copyright Dream Photography. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>

    
<!-- Modal -->
<div class="modal fade login-from" id="loginModal" tabindex="-1" aria-labelledby="loginModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      
        <div class="model-flex">
          <div class="model-logo">
            <div><img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid" alt="Dream Photography"></div>
          </div>
          <div class="modal-body">
            <div class="modal-form-inner">
              <h3>Login to your Account</h3>
              <form action="my-account.html">
                <div class="form-col">
                  <input type="email" placeholder="Email">
                </div>
                <div class="form-col">
                  <input type="password" placeholder="Password">
                </div>
                <div class="form-col">
                  <input type="submit" value="login">
                  <p><a href="#">Forgotten password?</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>

    </div>
  </div>
</div>

<div class="modal fade login-from" id="RegisterModal" tabindex="-1" aria-labelledby="RegisterModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="model-flex">
          <div class="model-logo">
            <div><img src="{{ asset('frontend/assets/images/logo.png') }}" class="img-fluid" alt="Dream Photography"></div>
          </div>
      <div class="modal-body">
        <div class="modal-form-inner">
        <h3>Creat Account</h3>
        <form action="my-account.html">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-col">
                <input type="text" placeholder="First Name">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-col">
                <input type="text" placeholder="last Name">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-col">
                <input type="text" placeholder="Address">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-col">
                <select>
                  <option>Country</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-col">
                <input type="text" placeholder="Zip Code">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-col">
                <input type="tel" placeholder="Mobile No">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-col">
                <input type="email" placeholder="Email Id">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-col">
                <input type="text" placeholder="User Name">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-col">
                <input type="password" name="password" id="password" placeholder="password" />
                <div class="pass-icon" id="togglePassword">
                  <img src="{{ asset('frontend/assets/images/eye.png') }}" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-col">
                <input type="password" name="confirm-password" id="password1" placeholder="Confirm Password">
                <div  class="pass-icon" id="togglePassword1">
                  <img src="{{ asset('frontend/assets/images/eye.png') }}" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="form-col">
            <input type="submit" value="Creat Account">
            <p>Already have an Account? <a href="#">login</a></p>
          </div>
        </form>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

    <script src="{{ asset('frontend/assets/js/jquery.min.js ') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js ') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js ') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/custom.js ') }}" type="text/javascript"></script>
    @livewireScripts
  </body>
</html>
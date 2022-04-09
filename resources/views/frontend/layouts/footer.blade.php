
    
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
            <div><img src="{{ asset('frontend/assets/images/logo.png')}}" class="img-fluid" alt="Dream Photography"></div>
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
            <div><img src="{{ asset('frontend/assets/images/logo.png')}}" class="img-fluid" alt="Dream Photography"></div>
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
                  <img src="{{ asset('frontend/assets/images/eye.png')}}" alt="">
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-col">
                <input type="password" name="confirm-password" id="password1" placeholder="Confirm Password">
                <div  class="pass-icon" id="togglePassword1">
                  <img src="{{ asset('frontend/assets/images/eye.png')}}" alt="">
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

    <script src="{{ asset('frontend/assets/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('frontend/assets/js/custom.js')}}" type="text/javascript"></script>
  </body>
</html>
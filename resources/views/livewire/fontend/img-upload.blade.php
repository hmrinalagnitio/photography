<div>
    {{-- In work, do what you enjoy. --}}
    <section class="banner-img-section">
      <img src="{{ asset('frontend/assets/images/banner.png ') }}" alt="" class="banner-bg">
      <div class="banner-text">
        <div>
          <div class="container">Uploaded Image</div>
        </div>
      </div>
    </section>
    <div class="mobile-support">
      <div class="support-logo">
        <ul class="clearfix">
          <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-1.png ') }}" alt=""></a></li>
          <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-2.png ') }}" alt=""></a></li>
          <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-3.png ') }}" alt=""></a></li>
          <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-4.png ') }}" alt=""></a></li>
          <li><a href="#" target="_blank"><img src="{{ asset('frontend/assets/images/support-5.png ') }}" alt=""></a></li>
        </ul>
      </div>
    </div>
    <section class="image-upload-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3>Upload image One By One</h3>
            <p>In blank field named "Title" write the name of the photo - <span>Use ONLY the English Alphabet A-Z</span></p>
            <h3>PLEASE DO NOT USE:</h3>
            <p>! @ # $ % ^ } & * ] ’ ( [ ) _ + / ~ : > { < ? ” | . , ;</p>
            <h3>Wait in an empty box appears photo (that means we are received this photo and go to next image upload.</h3>
            <p><span>Please, upload your photos In "jpg ') }}" format. Make sure that each Me Is no larger than 2 MB.</span></p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="images-upload-section">
      <div class="container">
        <div class="image-upload-box">
          <h2>Daily Contest</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="upload-img"><img src="{{ asset('frontend/assets/images/no-up.jpg ') }}" alt=""></div>
              <button class="btn-img-upload apply4job">Upload Image</button>
              <div class="img-title jobDetail">
                <h3>Title</h3>
                  <form action="image-upload-successful.html">
                    <input type="text" placeholder="Title">
                    <input type="file" id="input-file-now" class="file-upload" />
                    <button class="btn-img-upload">Upload</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        
        <div class="image-upload-box">
          <h2>Weekly Contest</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="upload-img"><img src="{{ asset('frontend/assets/images/no-up.jpg ') }}" alt=""></div>
              <button class="btn-img-upload apply4job">Upload Image</button>
              <div class="img-title jobDetail">
                <h3>Title</h3>
                  <form action="image-upload-successful.html">
                    <input type="text" placeholder="Title">
                    <input type="file" id="input-file-now" class="file-upload" />
                    <button class="btn-img-upload">Upload</button>
                  </form>
              </div>
            </div>
            <div class="col-md-3">
              <div class="" x-data="previewImage()">
            
                <label for="logo">
                    <div class="">            
                      <img x-show="imageUrl" :src="imageUrl" class="w-full object-cover">
                        <div x-show="!imageUrl" class="text-gray-300 flex flex-col items-center">
                          ddddd
                        </div>            
                    </div>
                </label>
          
                <div>
                  <label for="logo" class="block mb-2 mt-4 font-bold">Upload image..</label>
                  <input class="w-full cursor-pointer" type="file" name="logo" id="logo" @change="fileChosen">
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="upload-img"><img src="{{ asset('frontend/assets/images/no-up.jpg ') }}" alt=""></div>
              <button class="btn-img-upload apply4job">Upload Image</button>
              <div class="img-title jobDetail">
                <h3>Title</h3>
                  <form action="image-upload-successful.html">
                    <input type="text" placeholder="Title">
                    <input type="file" id="input-file-now" class="file-upload" />
                    <button class="btn-img-upload">Upload</button>
                  </form>
              </div>
            </div>
          </div>
        </div>

        
        <div class="image-upload-box">
          <h2>Monthly Contest</h2>
          <div class="row">
            <div class="col-md-3">
              <div class="upload-img"><img src="{{ asset('frontend/assets/images/no-up.jpg ') }}" alt=""></div>
              <button class="btn-img-upload apply4job">Upload Image</button>
              <div class="img-title jobDetail">
                <h3>Title</h3>
                  <form action="image-upload-successful.html">
                    <input type="text" placeholder="Title">
                    <input type="file" id="input-file-now" class="file-upload" />
                    <button class="btn-img-upload">Upload</button>
                  </form>
              </div>
            </div>
            <div class="col-md-3">
              <div class="upload-img"><img src="{{ asset('frontend/assets/images/no-up.jpg ') }}" alt=""></div>
              <button class="btn-img-upload apply4job">Upload Image</button>
              <div class="img-title jobDetail">
                <h3>Title</h3>
                  <form action="image-upload-successful.html">
                    <input type="text" placeholder="Title">
                    <input type="file" id="input-file-now" class="file-upload" />
                    <button class="btn-img-upload">Upload</button>
                  </form>
              </div>
            </div>
            <div class="col-md-3">
              <div class="upload-img"><img src="{{ asset('frontend/assets/images/no-up.jpg ') }}" alt=""></div>
              <button class="btn-img-upload apply4job">Upload Image</button>
              <div class="img-title jobDetail">
                <h3>Title</h3>
                  <form action="image-upload-successful.html">
                    <input type="text" placeholder="Title">
                    <input type="file" id="input-file-now" class="file-upload" />
                    <button class="btn-img-upload">Upload</button>
                  </form>
              </div>
            </div>
            <div class="col-md-3">
              <div class="upload-img"><img src="{{ asset('frontend/assets/images/no-up.jpg ') }}" alt=""></div>
              <button class="btn-img-upload apply4job">Upload Image</button>
              <div class="img-title jobDetail">
                <h3>Title</h3>
                  <form action="image-upload-successful.html">
                    <input type="text" placeholder="Title">
                    <input type="file" id="input-file-now" class="file-upload" />
                    <button class="btn-img-upload">Upload</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>

<div>
    {{-- Do your work, then step back. --}}
    <section class="banner-section">
        <div class="banner-img"><img src="{{ asset('frontend/assets/images/banner-img.png ') }}" alt=""></div>
        <div class="banner-overlay">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="link-page">
                            <ul>
                                <li><a href="#">Home</a> ></li>
                                <li><a href="#">Login</a> ></li>
                                <li>My Account</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="my-account">
                    <div class="my-img">
                        <img src="{{ asset('frontend/assets/images/my-img.png ') }}" alt="">
                        <div class="edit-img"><a href="#"><img src="{{ asset('frontend/assets/images/edit-img.png ') }}" class="trigger" alt=""></a></div>
                    </div>
                    <div class="my-details">
                        <h1>Alex Jones</h1>
                        <div class="my-details-row">
                            <div class="my-details-col-left"><span>Gender:</span></div>
                            <div class="my-details-col-right">Male</div>
                        </div>
                        <div class="my-details-row">
                            <div class="my-details-col-left"><span>Mobile No :</span></div>
                            <div class="my-details-col-right">+01 234-567-89</div>
                        </div>
                        <div class="my-details-row">
                            <div class="my-details-col-left"><span>Email Id :</span></div>
                            <div class="my-details-col-right">index@dummy.com</div>
                        </div>
                        <div class="my-details-row">
                            <div class="my-details-col-left"><span>Address :</span></div>
                            <div class="my-details-col-right">52/1 Lorem ipsum73, Dummy place11A, India, Pin-700001</div>
                        </div>
                        <div class="my-details-row">
                            <button class="btn-edi-Profile" data-bs-toggle="modal" data-bs-target="#RegisterModal"><img src="{{ asset('frontend/assets/images/edit.png ') }}" alt=""> Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contest-box">
        <div class="container">
            <h2>Participle Contest</h2>
            <div class="row">
                <div class="col-sm-4">
                    <div class="contest-box-item h-100 bg1">                        
                        <h5><i class="fa fa-calendar-o" aria-hidden="true"></i> 1 <span>Day</span></h5>
                        <h3>Daily Contest</h3>
                        <div class="contest-box-item-link"><a href="view-details.html" class="btn-edi-Profile">View Details</a></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contest-box-item h-100 bg2">
                        <h5><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 <span>Day</span></h5>
                        <h3>Weekly Contest</h3>
                        <div class="contest-box-item-link"><a href="view-details.html" class="btn-edi-Profile">View Details</a></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contest-box-item h-100 bg3">
                        <h5><i class="fa fa-calendar-o" aria-hidden="true"></i> 30 <span>Day</span></h5>
                        <h3>Monthly Contest</h3>
                        <div class="contest-box-item-link"><a href="view-details.html" class="btn-edi-Profile">View Details</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-recent-contest-section">
        <div class="container">
            <h2>My Recent Contest</h2>
            <div class="my-recent-contest">
                <div class="contest-img">
                    <img src="{{ asset('frontend/assets/images/contest-img.png ') }}" alt="">
                    <div class="edit-img"><a href="#"><img src="{{ asset('frontend/assets/images/edit-img.png ') }}" alt=""></a></div>
                </div>
                <div class="contest-content">
                    <h3>Daily Contest</h3>                    
                    <div class="contest-wrap">
                        <div class="box">
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Time</div></div>
                                    <div class="col-6"><div class="box-border-right">10 am</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Time</div></div>
                                    <div class="col-6"><div class="box-border-right">12 pm</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Entry fee</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Paid</span></div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Status</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Active</span></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-recent-contest">
                <div class="contest-img">
                    <img src="{{ asset('frontend/assets/images/contest-img.png ') }}" alt="">
                    <div class="edit-img"><a href="#"><img src="{{ asset('frontend/assets/images/edit-img.png ') }}" alt=""></a></div>
                </div>
                <div class="contest-content">
                    <h3>Daily Contest</h3>                    
                    <div class="contest-wrap">
                        <div class="box">
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Time</div></div>
                                    <div class="col-6"><div class="box-border-right">10 am</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Time</div></div>
                                    <div class="col-6"><div class="box-border-right">12 pm</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Entry fee</div></div>
                                    <div class="col-6"><div class="box-border-right"><span><a href="payment-now.html">Pay Now</a></span></div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Status</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="inactive">In Active</span></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-recent-contest">
                <div class="contest-img">
                    <img src="{{ asset('frontend/assets/images/contest-img.png ') }}" alt="">
                    <div class="edit-img"><a href="#"><img src="{{ asset('frontend/assets/images/edit-img.png ') }}" alt=""></a></div>
                </div>
                <div class="contest-content">
                    <h3>Daily Contest</h3>                    
                    <div class="contest-wrap">
                        <div class="box">
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Time</div></div>
                                    <div class="col-6"><div class="box-border-right">10 am</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Time</div></div>
                                    <div class="col-6"><div class="box-border-right">12 pm</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Entry fee</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Paid</span></div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Status</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Active</span></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <h2>My Past Contest</h2>
            <div class="my-recent-contest">
                <div class="contest-img">
                    <img src="{{ asset('frontend/assets/images/contest-img.png ') }}" alt="">
                    <div class="edit-img"><a href="#"><img src="{{ asset('frontend/assets/images/edit-img.png ') }}" alt=""></a></div>
                </div>
                <div class="contest-content">
                    <h3>Daily Contest</h3>                    
                    <div class="contest-wrap">
                        <div class="box">
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Time</div></div>
                                    <div class="col-6"><div class="box-border-right">10 am</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Time</div></div>
                                    <div class="col-6"><div class="box-border-right">12 pm</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Entry fee</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Paid</span></div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Status</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Active</span></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-recent-contest">
                <div class="contest-img">
                    <img src="{{ asset('frontend/assets/images/contest-img.png ') }}" alt="">
                    <div class="edit-img"><a href="#"><img src="{{ asset('frontend/assets/images/edit-img.png ') }}" alt=""></a></div>
                </div>
                <div class="contest-content">
                    <h3>Daily Contest</h3>                    
                    <div class="contest-wrap">
                        <div class="box">
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Time</div></div>
                                    <div class="col-6"><div class="box-border-right">10 am</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Time</div></div>
                                    <div class="col-6"><div class="box-border-right">12 pm</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Entry fee</div></div>
                                    <div class="col-6"><div class="box-border-right"><span><a href="payment-now.html">Pay Now</a></span></div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Status</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="inactive">In Active</span></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="my-recent-contest">
                <div class="contest-img">
                    <img src="{{ asset('frontend/assets/images/contest-img.png ') }}" alt="">
                    <div class="edit-img"><a href="#"><img src="{{ asset('frontend/assets/images/edit-img.png ') }}" alt=""></a></div>
                </div>
                <div class="contest-content">
                    <h3>Daily Contest</h3>                    
                    <div class="contest-wrap">
                        <div class="box">
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Date</div></div>
                                    <div class="col-6"><div class="box-border-right">11/02/2022</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Opening Time</div></div>
                                    <div class="col-6"><div class="box-border-right">10 am</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Closing Time</div></div>
                                    <div class="col-6"><div class="box-border-right">12 pm</div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Entry fee</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Paid</span></div></div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="row">
                                    <div class="col-6"><div class="box-border">Status</div></div>
                                    <div class="col-6"><div class="box-border-right"><span class="active">Active</span></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contest-list">
        <div class="container">
            <h2>My Total Contest List</h2>
            <div class="contest-list-box">
                <div class="contest-list-first">
                    <ul>
                        <li class="bgF1">
                            <p>Total Contest</p>
                            <h4>52</h4>
                        </li>
                        <li class="bgF2">
                            <p>Total Win</p>
                            <h4>20</h4>
                        </li>
                        <li class="bgF3">
                            <p>TAmount won</p>
                            <h4>$520</h4>
                        </li>
                    </ul>
                </div>
                <div class="contest-list-box-item">
                    <img src="{{ asset('frontend/assets/images/icon-daily1.png ') }}" alt="">
                    <h3>Daily Contest</h3>
                    <div class="total-contest-row">
                        <div class="total-contest-col">Total Contest <span class="win-color">17</span></div>
                        <div class="total-contest-col-right">Total Win <span class="contest-color">04</span></div>
                    </div>
                </div>
                <div class="contest-list-box-item">
                    <img src="{{ asset('frontend/assets/images/icon-daily2.png ') }}" alt="">
                    <h3>Weekly Contest</h3>
                    <div class="total-contest-row">
                        <div class="total-contest-col">Total Contest <span class="win-color">22</span></div>
                        <div class="total-contest-col-right">Total Win <span class="contest-color">40</span></div>
                    </div>
                </div>
                <div class="contest-list-box-item">
                    <img src="{{ asset('frontend/assets/images/icon-daily3.png ') }}" alt="">
                    <h3>Monthly Contest</h3>
                    <div class="total-contest-row">
                        <div class="total-contest-col">Total Contest <span class="win-color">19</span></div>
                        <div class="total-contest-col-right">Total Win <span class="contest-color">10</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section">
        <div class="container">
            <h2>My Image Gallery</h2>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery">
                        <div class="gallery-img"><img src="{{ asset('frontend/assets/images/gallery-img.png ') }}" alt=""></div>
                        <div class="gallry-bottom">
                            <h3>Daily Contest</h3>
                            <div class="galler-row">
                                <div class="gallery-left">Date Of Contest</div>
                                <div class="gallery-right">30/01/22</div>
                            </div>                            
                            <div class="galler-row">
                                <div class="gallery-left">Total Participants</div>
                                <div class="gallery-right">120</div>
                            </div>                         
                            <div class="galler-row">
                                <div class="gallery-left">Your Rank</div>
                                <div class="gallery-right">07</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery">
                        <div class="gallery-img"><img src="{{ asset('frontend/assets/images/gallery-img2.png ') }}" alt=""></div>
                        <div class="gallry-bottom">
                            <h3>Daily Contest</h3>
                            <div class="galler-row">
                                <div class="gallery-left">Date Of Contest</div>
                                <div class="gallery-right">30/01/22</div>
                            </div>                            
                            <div class="galler-row">
                                <div class="gallery-left">Total Participants</div>
                                <div class="gallery-right">120</div>
                            </div>                         
                            <div class="galler-row">
                                <div class="gallery-left">Your Rank</div>
                                <div class="gallery-right">07</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery">
                        <div class="gallery-img"><img src="{{ asset('frontend/assets/images/gallery-img-3.png ') }}" alt=""></div>
                        <div class="gallry-bottom">
                            <h3>Daily Contest</h3>
                            <div class="galler-row">
                                <div class="gallery-left">Date Of Contest</div>
                                <div class="gallery-right">30/01/22</div>
                            </div>                            
                            <div class="galler-row">
                                <div class="gallery-left">Total Participants</div>
                                <div class="gallery-right">120</div>
                            </div>                         
                            <div class="galler-row">
                                <div class="gallery-left">Your Rank</div>
                                <div class="gallery-right">07</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery">
                        <div class="gallery-img"><img src="{{ asset('frontend/assets/images/gallery-img2.png ') }}" alt=""></div>
                        <div class="gallry-bottom">
                            <h3>Daily Contest</h3>
                            <div class="galler-row">
                                <div class="gallery-left">Date Of Contest</div>
                                <div class="gallery-right">30/01/22</div>
                            </div>                            
                            <div class="galler-row">
                                <div class="gallery-left">Total Participants</div>
                                <div class="gallery-right">120</div>
                            </div>                         
                            <div class="galler-row">
                                <div class="gallery-left">Your Rank</div>
                                <div class="gallery-right">07</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery">
                        <div class="gallery-img"><img src="{{ asset('frontend/assets/images/gallery-img-3.png ') }}" alt=""></div>
                        <div class="gallry-bottom">
                            <h3>Daily Contest</h3>
                            <div class="galler-row">
                                <div class="gallery-left">Date Of Contest</div>
                                <div class="gallery-right">30/01/22</div>
                            </div>                            
                            <div class="galler-row">
                                <div class="gallery-left">Total Participants</div>
                                <div class="gallery-right">120</div>
                            </div>                         
                            <div class="galler-row">
                                <div class="gallery-left">Your Rank</div>
                                <div class="gallery-right">07</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery">
                        <div class="gallery-img"><img src="{{ asset('frontend/assets/images/gallery-img.png ') }}" alt=""></div>
                        <div class="gallry-bottom">
                            <h3>Daily Contest</h3>
                            <div class="galler-row">
                                <div class="gallery-left">Date Of Contest</div>
                                <div class="gallery-right">30/01/22</div>
                            </div>                            
                            <div class="galler-row">
                                <div class="gallery-left">Total Participants</div>
                                <div class="gallery-right">120</div>
                            </div>                         
                            <div class="galler-row">
                                <div class="gallery-left">Your Rank</div>
                                <div class="gallery-right">07</div>
                            </div>
                        </div>
                    </div>
                </div>         
            </div>
        </div>
    </section>
</div>

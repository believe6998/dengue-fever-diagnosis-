@extends('layouts.app')

@section('content')
  <div id="main-content" class="site-main-content">
    <section class="site-content-area">

      <!--BANNER-->
      <div class="uni-banner">
        <div class="uni-owl-one-item owl-carousel owl-theme">
          <div class="item">
            <div class="uni-banner-img uni-background-6"></div>
            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
              <div class="container">
                <div class="caption">
                  <h1>Let us protect your health</h1>
                  <p>
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                    <br>
                    Donec eu libero sit amet quam egestas semper.
                  </p>
                  <a href="#">our services</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="uni-banner-img uni-background-5"></div>
            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
              <div class="container">
                <div class="caption">
                  <h1>Let us protect your health</h1>
                  <p>
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                    <br>
                    Donec eu libero sit amet quam egestas semper.
                  </p>
                  <a href="#">our services</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="uni-banner-img uni-background-7"></div>
            <div class="content animated" data-animation="flipInX" data-delay="0.9s">
              <div class="container">
                <div class="caption">
                  <h1>Let us protect your health</h1>
                  <p>
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                    <br>
                    Donec eu libero sit amet quam egestas semper.
                  </p>
                  <a href="#">our services</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--BOOK APPOINTMENTS-->
      <div class="uni-home-2-book-appointment uni-background-3">
        <div class="container">
          <div class="uni-home-title">
            <h3>BOok appointment</h3>
          </div>
          <form action="#">
            <div class="row">
              <div class="col-md-4">
                <div class="input-group form-group">
                  <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" name="name" value="" placeholder="your name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group form-group">
                  <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                  <input type="tel" class="form-control" name="phone" value="" placeholder="phone number">
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group form-group">
                  <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                  <input type="email" class="form-control" name="email" value="" placeholder="email">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <div class="input-group date date-check-in" data-date="12-02-2017" data-date-format="mm-dd-yyyy">
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    <input name="date1" class="form-control" type="text" value="12-02-2017">
                    <span class="input-group-addon btn"><i class="fa fa-angle-down" id="ti-calendar1" aria-hidden="true"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="input-group form-group">
                  <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                  <input type="text" class="form-control" name="note" value="" placeholder="Note">
                </div>
              </div>
              <div class="col-md-4">
                <button class="vk-btn vk-btn-send">Book appointment</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!--DEPARTMENTS-->
      <div class="uni-hơm-1-department">
        <div class="container">
          <div class="uni-home-title">
            <h3>Department</h3>
            <div class="uni-underline"></div>
          </div>
          <div class="uni-shortcode-icon-box-1">
            <div class="row">
              <div class="col-md-4  col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-5.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>cardiology</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                      fames ac turpis egestas adipisicing.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-4.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>Neurology</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                      fames ac turpis egestas adipisicing.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-3.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>Orthopedics</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                      fames ac turpis egestas adipisicing.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-2.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>cancer department</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                      fames ac turpis egestas adipisicing.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon-1.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>Ophthalmology</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                      fames ac turpis egestas adipisicing.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-6">
                <div class="uni-shortcode-icon-box-1-default">
                  <div class="item-icons">
                    <img src="images/icons_box/icon_1/icon.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <h4>Respiratory</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada
                      fames ac turpis egestas adipisicing.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--OUR SERVICES-->
      <div class="uni-home-2-our-services">
        <div class="uni-our-services-2 uni-background-4">
          <div class="container">
            <div class="uni-home-title">
              <h3>Our services</h3>
              <div class="uni-underline"></div>
            </div>

            <div class="uni-our-service-2-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="tab-nav">
                    <ul class="nav-pills nav-stacked">
                      <li class="active"><a href="#tab_a" data-toggle="pill">Cardiothoracic Surgery</a></li>
                      <li><a href="#tab_b" data-toggle="pill">Corneal transplant surgery</a></li>
                      <li><a href="#tab_c" data-toggle="pill">General health check</a></li>
                      <li><a href="#tab_d" data-toggle="pill">Diagnosis &amp; treatment cancer</a></li>
                      <li><a href="#tab_e" data-toggle="pill">Treatment of dermatitis</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_a">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Cardiothoracic Surgery</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum tortor
                                quam, feugiat vitae, ultricies eget, tempor sit amet,
                                ante. Donec eu libero sit amet quam egestas semper.
                                Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.
                              </p>
                              <ul>
                                <li>
                                  Lorem ipsum dolor sit amet, consectetuer
                                </li>
                                <li>
                                  Aliquam tincidunt mauris eu risus
                                </li>
                                <li>
                                  Vestibulum auctor dapibus neque
                                </li>
                                <li>
                                  Morbi in sem quis dui placerat ornare
                                </li>
                                <li>
                                  Donec eu libero sit amet quam egestas semper
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_b">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img1.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Corneal transplant surgery</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum tortor
                                quam, feugiat vitae, ultricies eget, tempor sit amet,
                                ante. Donec eu libero sit amet quam egestas semper.
                                Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.
                              </p>
                              <ul>
                                <li>
                                  Lorem ipsum dolor sit amet, consectetuer
                                </li>
                                <li>
                                  Aliquam tincidunt mauris eu risus
                                </li>
                                <li>
                                  Vestibulum auctor dapibus neque
                                </li>
                                <li>
                                  Morbi in sem quis dui placerat ornare
                                </li>
                                <li>
                                  Donec eu libero sit amet quam egestas semper
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_c">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img2.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>General health check</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum tortor
                                quam, feugiat vitae, ultricies eget, tempor sit amet,
                                ante. Donec eu libero sit amet quam egestas semper.
                                Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.
                              </p>
                              <ul>
                                <li>
                                  Lorem ipsum dolor sit amet, consectetuer
                                </li>
                                <li>
                                  Aliquam tincidunt mauris eu risus
                                </li>
                                <li>
                                  Vestibulum auctor dapibus neque
                                </li>
                                <li>
                                  Morbi in sem quis dui placerat ornare
                                </li>
                                <li>
                                  Donec eu libero sit amet quam egestas semper
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_d">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img3.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Diagnosis &amp; treatment cancer</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum tortor
                                quam, feugiat vitae, ultricies eget, tempor sit amet,
                                ante. Donec eu libero sit amet quam egestas semper.
                                Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.
                              </p>
                              <ul>
                                <li>
                                  Lorem ipsum dolor sit amet, consectetuer
                                </li>
                                <li>
                                  Aliquam tincidunt mauris eu risus
                                </li>
                                <li>
                                  Vestibulum auctor dapibus neque
                                </li>
                                <li>
                                  Morbi in sem quis dui placerat ornare
                                </li>
                                <li>
                                  Donec eu libero sit amet quam egestas semper
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="tab_e">
                      <div class="uni-our-service-2-content-default">
                        <div class="row">
                          <div class="col-md-5">
                            <div class="item-img">
                              <img src="images/services/img3.jpg" alt="" class="img-responsive">
                            </div>
                          </div>
                          <div class="col-md-7">
                            <div class="item-caption">
                              <div class="item-caption-title">
                                <h3>Treatment of dermatitis</h3>
                                <div class="uni-line"></div>
                              </div>
                              <p>Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum tortor
                                quam, feugiat vitae, ultricies eget, tempor sit amet,
                                ante. Donec eu libero sit amet quam egestas semper.
                                Aenean ultricies mi vitae est. Mauris placerat eleifend
                                leo.
                              </p>
                              <ul>
                                <li>
                                  Lorem ipsum dolor sit amet, consectetuer
                                </li>
                                <li>
                                  Aliquam tincidunt mauris eu risus
                                </li>
                                <li>
                                  Vestibulum auctor dapibus neque
                                </li>
                                <li>
                                  Morbi in sem quis dui placerat ornare
                                </li>
                                <li>
                                  Donec eu libero sit amet quam egestas semper
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--OUR DOCTOR-->
      <div class="uni-home-2-our-doctor">
        <div class="uni-shortcode-team-1">
          <div class="container">

            <div class="uni-home-title">
              <h3>our doctors</h3>
              <div class="uni-underline"></div>
            </div>

            <div class="uni-owl-four-item owl-carousel owl-theme">
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-5.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>adam jonson</h4>
                        <span>Cardiologist</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img1.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-4.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>henrik larsson</h4>
                        <span>neurologist</span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img2.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-3.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>amanda smith</h4>
                        <span>Ophthalmology doctor</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img3.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-2.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>david martin</h4>
                        <span>Cancer doctor</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-5.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>adam jonson</h4>
                        <span>Cardiologist</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-team-default">
                  <div class="item-img">
                    <img src="images/team/img1.png" alt="" class="img-responsive">
                  </div>
                  <div class="item-caption">
                    <div class="col-md-3 col-sm-3 col-xs-3 uni-clear-padding">
                      <div class="item-icons">
                        <img src="images/icons_box/icon_4/icon-4.png" alt="">
                      </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-9 uni-clear-padding">
                      <div class="item-title">
                        <h4>henrik larsson</h4>
                        <span>neurologist</span>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--HOME 2 COUNTER-->
      <div class="uni-home-2-counter">
        <div class="uni-shortcode-counter-2 uni-background-3">
          <div class="container">
            <div class="row">
              <div class="col-md-4 col-sm-4">
                <div class="uni-shortcode-counter-default">
                  <ul>
                    <li class="counter-icons"><i class="fa fa-user-md" aria-hidden="true"></i></li>
                    <li class="counter-number counter"> 183 </li>
                    <li class="counter-text"> doctor</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="uni-shortcode-counter-default">
                  <ul>
                    <li class="counter-icons"><i class="fa fa-smile-o" aria-hidden="true"></i></li>
                    <li class="counter-number counter"> 1150 </li>
                    <li class="counter-text"> happy customers</li>
                  </ul>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                <div class="uni-shortcode-counter-default">
                  <ul>
                    <li class="counter-icons"><i class="fa fa-lightbulb-o" aria-hidden="true"></i></li>
                    <li class="counter-number counter"> 40 </li>
                    <li class="counter-text"> years of experience </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--HOME 2 ICON BOXS-->
      <div class="uni-home-2-icons-box">
        <div class="uni-shortcode-icons-box-3">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-user-md" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>Qualified Doctors</h4>
                    <div class="uni-line"></div>
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada
                      fame ac turpis egestas. Vestibulum tortor quam, feugiat vitae.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      24 hours service
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Pellentesque habitant morbi tristique
                      senectus et netus et malesuada fame ac turpis egestas. Vestibulum tortor quam.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-hospital-o" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      modern equipment
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Pellentesque habitant morbi tristique
                      senectus et netus et malesuada fame ac turpis egestas. Vestibulum tortor quam.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      conscientious Doctors
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Pellentesque habitant morbi tristique
                      senectus et netus et malesuada fame ac turpis egestas. Vestibulum tortor quam.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-ambulance" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      call in 10 minutes
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Pellentesque habitant morbi tristique
                      senectus et netus et malesuada fame ac turpis egestas. Vestibulum tortor quam.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="uni-shortcode-icons-box-3-default">
                  <div class="item-icons">
                    <i class="fa fa-commenting" aria-hidden="true"></i>
                  </div>
                  <div class="item-caption">
                    <h4>
                      enthusiastic support
                    </h4>
                    <div class="uni-line"></div>
                    <p>
                      Pellentesque habitant morbi tristique
                      senectus et netus et malesuada fame ac turpis egestas. Vestibulum tortor quam.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--home 2 custommer say-->
      <div class="uni-home-2-custommer-say">
        <div class="uni-shortcode-testimonials-2 uni-background-3">
          <div class="container">

            <div class="uni-home-title">
              <h3>Custommer say</h3>
              <div class="uni-underline"></div>
            </div>

            <div class="uni-owl-two-item owl-carousel owl-theme">
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>amanda smith</h4>
                          <p class="testimonial_subtitle">myopia patients</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                      turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img1.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>adam jonson</h4>
                          <p class="testimonial_subtitle">Broken bone</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                      turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>amanda smith</h4>
                          <p class="testimonial_subtitle">myopia patients</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                      turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                    </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="uni-shortcode-testimonials-default">
                  <div class="item-info">
                    <div class="row">
                      <div class="col-md-3 col-sm-4">
                        <div class="item-info-img">
                          <img src="images/testimonial/img1.png" alt="" class="img-responsive">
                        </div>
                      </div>
                      <div class="col-md-9 col-sm-8">
                        <div class="item-info-title">
                          <h4>adam jonson</h4>
                          <p class="testimonial_subtitle">Broken bone</p>
                        </div>
                        <div class="uni-divider"></div>
                      </div>
                    </div>
                  </div>
                  <div class="item-caption">
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                      turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--HOME 2 LATEST POST-->
      <div class="uni-home-2-latest-post">
        <div class="container">
          <div class="uni-home-title">
            <h3>Latest Post</h3>
            <div class="uni-underline"></div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="blog-grid-item">
                <article class="post type-post">
                  <div class="content-inner">
                    <div class="uni-entry-top">
                      <div class="thumbnail-img">
                        <a href="#" title="">
                          <img src="images/blog_grid/img1.jpg" alt="" title="" class="img-responsive">
                        </a>
                      </div>
                    </div>


                    <div class="uni-entry-body">
                      <div class="uni-entry-content">

                        <header class="uni-entry-header">
                          <h2 class="uni-entry-title">
                            <a href="#" rel="">Lorem ipsum dolor sit amet, conse tetuer adipiscing elit?</a>
                          </h2>
                        </header>

                        <div class="uni-entry-meta">
                                                        <span class="uni-author">
                                                            <a href="#" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> june 21, 2017</a>
                                                        </span>
                          <span class="uni-comment-total">
                                                            <a href="#" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                        </span>
                          <span class="uni-entry-folder"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                        </div>
                        <div class="uni-entry-summary">
                          <p>Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas. Vesti bulum tortor quam vitae...
                            <span class="readmore"><a href="#">[ Read More ]</a></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-grid-item">
                <article class="post type-post">
                  <div class="content-inner">
                    <div class="uni-entry-top">
                      <div class="thumbnail-img">
                        <a href="#" title="">
                          <img src="images/blog_grid/img.jpg" alt="" title="" class="img-responsive">
                        </a>
                      </div>
                    </div>


                    <div class="uni-entry-body">
                      <div class="uni-entry-content">

                        <header class="uni-entry-header">
                          <h2 class="uni-entry-title">
                            <a href="#" rel="">Lorem ipsum dolor sit amet, conse tetuer adipiscing elit?</a>
                          </h2>
                        </header>

                        <div class="uni-entry-meta">
                                                        <span class="uni-author">
                                                            <a href="#" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> june 21, 2017</a>
                                                        </span>
                          <span class="uni-comment-total">
                                                            <a href="#" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                        </span>
                          <span class="uni-entry-folder"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                        </div>
                        <div class="uni-entry-summary">
                          <p>Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas. Vesti bulum tortor quam vitae...
                            <span class="readmore"><a href="#">[ Read More ]</a></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-grid-item">
                <article class="post type-post">
                  <div class="content-inner">
                    <div class="uni-entry-top">
                      <div class="thumbnail-img">
                        <a href="#" title="">
                          <img src="images/blog_grid/img-1.jpg" alt="" title="" class="img-responsive">
                        </a>
                      </div>
                    </div>


                    <div class="uni-entry-body">
                      <div class="uni-entry-content">

                        <header class="uni-entry-header">
                          <h2 class="uni-entry-title">
                            <a href="#" rel="">Lorem ipsum dolor sit amet, conse tetuer adipiscing elit?</a>
                          </h2>
                        </header>

                        <div class="uni-entry-meta">
                                                        <span class="uni-author">
                                                            <a href="#" rel="author"><i class="fa fa-calendar" aria-hidden="true"></i> june 21, 2017</a>
                                                        </span>
                          <span class="uni-comment-total">
                                                            <a href="#" class="comments-link"><i class="fa fa-user" aria-hidden="true"></i> admin</a>
                                                        </span>
                          <span class="uni-entry-folder"><a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 2 comments</a></span>
                        </div>
                        <div class="uni-entry-summary">
                          <p>Pellentesque habitant morbi tristique senectus et netus et
                            malesuada fames ac turpis egestas. Vesti bulum tortor quam vitae...
                            <span class="readmore"><a href="#">[ Read More ]</a></span>
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>


    </section>
  </div>
@endsection

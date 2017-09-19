<?php
  include ("utils.php");
  configSession();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Front End</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN PLUGINS -->
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/swiper/css/swiper.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- END PLUGINS -->
    <!-- BEGIN PAGES CSS -->
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="pages/css/pages-icons.css" rel="stylesheet" type="text/css" />
    <link class="main-stylesheet" href="pages/css/style.css" rel="stylesheet" type="text/css" />
    <!-- BEGIN PAGES CSS -->
  </head>
  <body class="pace-dark">
    <!-- BEGIN HEADER -->
      <?php include("header.php") ?>
    <!-- END HEADER -->
    <!-- BEGIN JUMBOTRON -->
    <section id="demo-hero-1" class="jumbotron full-vh" data-pages="parallax">
      <div class="inner full-height">
        <!-- BEGIN SLIDER -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <!-- BEGIN SLIDE -->
            <div class="swiper-slide fit slide-1">
              <!-- BEGIN IMAGE PARRALAX -->
              <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="assets/images/bg_pattern_1.jpg">
                </div>
              </div>
              <!-- END IMAGE PARRALAX -->
              <!-- BEGIN CONTENT -->
              <div class="content-layer">
                <div class="inner full-height">
                  <div class="container-xs-height full-height">
                    <div class="col-xs-height col-middle text-center">
                      <div class="container sm-m-b-30">
                        <div class="row sm-m-b-30">
                          <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                            <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                                      <a href="estimate_price.php" style="color:white">Buy Plane Ticket (50% Off)</a>
                                        </h1>
                            <a href="estimate_price.php" class="block-title text-white link">Get Estimate</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONTENT -->
              <img class="ipad lazy" draggable="false" src="assets/images/ipad_1.png" alt="" title="" data-swiper-parallax="80%">
              <img class="bg-elements hidden-xs lazy" src="assets/images/bg_elements_1.png" data-swiper-parallax="-20%" alt="">
            </div>
            <!-- END SLIDE -->
            <!-- BEGIN SLIDE -->
            <div class="swiper-slide fit slide-3">
              <!-- BEGIN IMAGE PARRALAX -->
              <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="assets/images/bg_pattern_3.jpg">
                </div>
              </div>
              <!-- END IMAGE PARRALAX -->
              <!-- BEGIN CONTENT -->
              <div class="content-layer">
                <div class="inner full-height">
                  <div class="container-xs-height full-height">
                    <div class="col-xs-height col-middle text-center">
                      <div class="container sm-m-b-30">
                        <div class="row sm-m-b-30">
                          <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                            <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                                      <a href="register_order.php" style="color:white">Send Item</a>
                                        </h1>
                            <a href="register_order.php" class="block-title text-white link">Create Form</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONTENT -->
              <img class="ipad lazy" draggable="false" src="assets/images/ipad_4.png" alt="" title="" data-swiper-parallax="80%">
              <img class="bg-elements hidden-xs lazy" src="assets/images/bg_elements_3.png" data-swiper-parallax="-20%" alt="">
            </div>
            <!-- END SLIDE -->
            <!-- BEGIN SLIDE -->
            <div class="swiper-slide fit slide-2">
              <!-- BEGIN IMAGE PARRALAX -->
              <div class="slider-wrapper">
                <div class="bg-image full-width full-height" data-swiper-parallax="30%" data-pages-bg-image="assets/images/bg_pattern_2.jpg">
                </div>
              </div>
              <!-- END IMAGE PARRALAX -->
              <!-- BEGIN CONTENT -->
              <div class="content-layer">
                <div class="inner full-height">
                  <div class="container-xs-height full-height">
                    <div class="col-xs-height col-middle text-center">
                      <div class="container sm-m-b-30">
                        <div class="row sm-m-b-30">
                          <div class="col-md-6 col-md-offset-3 p-b-90 sm-p-b-40 sm-m-b-30">
                            <h1 class="light text-white sm-no-margin" data-swiper-parallax="-15%">
                                      Something Exciting
                                        </h1>
                            <a href="#" class="block-title text-white link">Learn more</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONTENT -->
              <img class="ipad lazy" draggable="false" src="assets/images/ipad_3.png" alt="" title="" data-swiper-parallax="80%">
              <img class="bg-elements hidden-xs lazy" src="assets/images/bg_elements_2.png" data-swiper-parallax="-20%" alt="">
            </div>
            <!-- END SLIDE -->
          </div>
          <!-- Add Navigation -->
          <div class="swiper-navigation swiper-white-solid swiper-button-prev"></div>
          <div class="swiper-navigation swiper-white-solid swiper-button-next"></div>
        </div>
      </div>
      <!-- END SLIDER -->
    </section>
    <!-- END JUMBOTRON -->
    <!-- BEGIN CONTENT SECTION -->
    <section class="p-b-60 p-t-70">
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <h6 class="block-title m-b-0">Tracking</h6>
            <h1 class="m-t-5 light">Track your orders</h1>
            <p class="m-t-20">Tracking will return the current status of your order.
            </p>
            <br>
            <input type="text" style="height:33px;width:40%" placeholder="OTXXXXXXXXXXXXXXXX"><span><button class="btn btn-primary">Submit</button></span>
            <br>
            <img src="assets/images/arrow_down.png" class="m-t-30" alt="">
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-100 p-t-30">
      <div class="container-sm-height">
        <div class="row row-sm-height sm-m-l-15 sm-m-r-15">
          <div class="col-lg-2 col-md-1 hidden-sm"></div>
          <div class="col-sm-6 col-lg-4 col-md-5 col-sm-height col-middle sm-text-center">
            <img class="p-r-40 m-t-10 xs-image-responsive-height sm-no-padding lazy" src="assets/images/ipad_2.jpg" alt="">
          </div>
          <div class="col-sm-6 col-sm-height col-middle col-lg-4 col-md-4 xs-text-center sm-p-l-30">
            <h1 class="light md-no-margin sm-m-t-30">How It Works?</h1>
            <!-- <h6 class="block-title m-t-50">1) List your current flight or purchase ticket from us</h6>
            <p class="m-t-15">Our long standing vision has been to bypass the usual admin dashboard structure, and move forward with a more vary and sophisticated yet simple framework </p>
            <p class="muted font-arial small-text m-t-30">A product is accessible when all people&mdash;regardless of ability&mdash;can navigate it,
              <br> understand it, and use it to achieve their goals.</p> -->
            <!-- <h6 class="block-title m-t-50">2) Wait for contact to receive your luggages or items to be delivered</h6> -->
            <!-- <h6 class="block-title m-t-50">3) Finish the delivery and get paid</h6> -->
            <p class="m-t-15">1) List your current flight or purchase ticket from us</p>
            <p class="m-t-15">2) Wait for contact to receive your luggages or items to be delivered</p>
            <p class="m-t-15">3) Finish the delivery and get paid</p>
          </div>
          <div class="col-lg-2 col-md-1 hidden-sm"></div>
        </div>
      </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section id="demo-content-1" class="p-b-100 bg-master-lighter relative" data-pages="parallax">
      <div class="container p-b-50">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
            <div class="text-center relative p-b-100 m-b-70 p-t-40">
              <h6 class="block-title m-t-70 m-b-0">Recent</h6>
              <h1 class="col-sm-12 p-b-10 m-t-5">Recent Shipments + Recent Items</h1>
              <button type="button" class="btn btn-lg btn-primary btn-cons btn-rounded m-t-20">Explore</button>
              <br>
            </div>
          </div>
        </div>
      </div>
      <div class="top-left bottom-right no-overflow full-width full-height">
        <img src="assets/images/elements_1.png" class="inner lazy" alt="">
      </div>
      <img class="iphone lazy" src="assets/images/iphone.png" data-pages="float" data-max-top-translate="40" data-max-bottom-translate="40" data-speed="0.1" data-delay="1000" data-curve="ease" alt="">
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-100 p-t-50 m-t-100">
      <div class="container">
        <div class="col-md-8 col-md-offset-2 ">
          <div class="text-center">
            <img src="assets/images/arrow_down.png" alt="">
            <h5 class="block-title m-t-40 hint-text m-b-0">Overall Numbers </h5>
            <h1 class="light m-t-5">How far have we got?</h1>
            <h5 class="hint-text">From hundreds of shipments within months of operation</h5>
          </div>
          <div class="row m-t-45">
            <div class="col-sm-4">
              <div class="progress progress-small m-t-15">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                </div>
              </div>
              <h3 class="no-margin"><span data-pages-animate="number" data-value="2000" data-animation-duration="800">0</span>+</h3>
              <p class="font-arial hint-text fs-12"><i class="fa fa-globe" aria-hidden="true"></i> Items
              </p>
              <p>
              </p>
            </div>
            <div class="col-sm-4">
              <div class="progress progress-small m-t-15">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                </div>
              </div>
              <h3 class=" no-margin"><span data-pages-animate="number" data-value="120" data-animation-duration="800">0</span>+</h3>
              <p class="font-arial hint-text fs-12"><i class="fa fa-plane" aria-hidden="true"></i> Shipments
              </p>
              <p>
              </p>
            </div>
            <div class="col-sm-4">
              <div class="progress progress-small m-t-15">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" data-pages-animate="progressbar" data-percentage="79%">
                </div>
              </div>
              <h3 class=" no-margin"><span data-pages-animate="number" data-value="60" data-animation-duration="800">0</span>%</h3>
              <p class="font-arial hint-text fs-12"><i class="fa fa-money" aria-hidden="true"></i> Average Savings
              </p>
              <p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- END CONTENT SECTION -->
    <!-- START CONTENT SECTION -->
    <section class="p-b-50 p-t-50 bg-master-dark">
      <div class="container p-b-50 p-t-50">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div class="col-xs-height col-middle">
              <div class="text-center">
                <h1 class="text-white col-sm-12 p-b-10">Crafted with detail for a great start!
                        front-end plus back-end.</h1>
                <img src="assets/images/themeforest_logo.png" class="m-t-5" alt="">
                <p class="fs-12 text-white m-t-30 font-arial"><span class="hint-text">Exclusive only at
                        Envato Marketplace,<br></span> Themeforest See Standard licenses &amp; Extended licenses
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END CONTENT SECTION -->
    <!-- START FOOTER -->
    <section class="p-b-30 p-t-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="assets/images/logo_black.png" class="logo inline m-r-50" alt="">
            <div class="m-t-10 ">
              <ul class="no-style fs-11 no-padding font-arial">
                <li class="inline no-padding"><a href="#" class=" text-master p-r-10 b-r b-grey">Home</a></li>
                <li class="inline no-padding"><a href="#" class="hint-text text-master p-l-10 p-r-10 b-r b-grey">Themeforest</a></li>
                <li class="inline no-padding"><a href="#" class="hint-text text-master p-l-10 p-r-10 b-r b-grey">Support</a></li>
                <li class="inline no-padding"><a href="#" class="hint-text text-master p-l-10 p-r-10 xs-no-padding xs-m-t-10">Made with Pages</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6 text-right font-arial sm-text-left">
            <p class="fs-11 no-margin small-text"><span class="hint-text ">Exclusive only at</span> Envato Marketplace,Themeforest <span class="hint-text">See</span> Standard licenses &amp; Extended licenses
            </p>
            <p class="fs-11 muted">Copyright &copy; 2014 REVOX. All Rights Reserved.</p>
          </div>

          <br>


          <!-- START DOCUMENTATION FOR PAGE FRONEND -->
          <li class="mega">
            <a href="javascript:;" data-text="Elements">Elements <i class="pg-arrow_minimize m-l-5"></i></a>
            <span class="arrow"></span>
            <nav class="mega">
              <div class="container">
                <div class="row">
                  <div class="col-md-4 p-l-25 sm-p-l-0 hidden-sm hidden-xs">
                    <h6 class="block-title fs-12 no-margin">Pages UI Bundle</h6>
                    <h2 class="m-t-20">A new page, <br>a new beginning...</h2>
                    <p class="small font-arial hint-text no-margin">Exclusively available at Envato Marketplace</p>
                    <a href="#" class="btn btn-black font-montserrat fs-11 all-caps m-t-35">Buy now</a>
                  </div>
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-4">
                        <h6 class="sub-menu-heading">UI Elements</h6>
                        <ul class="sub-menu">
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#color" target="_blank">Colors</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#icons" target="_blank">Icons</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#buttons" target="_blank">Buttons</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#modals" target="_blank">Modals</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#progress_bars" target="_blank">Progress &amp; Activity</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#accordians" target="_blank">Accordians</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#tabs" target="_blank">Tabs</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-4">
                        <h6 class="sub-menu-heading">Forms</h6>
                        <ul class="sub-menu">
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#form_elements" target="_blank">Form Elements</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#form_layouts" target="_blank">Form Layouts</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/1.0/doc/#form_validation" target="_blank">Form Validation</a>
                          </li>
                        </ul>
                        <h6 class="sub-menu-heading">Other products</h6>
                        <ul class="sub-menu">
                          <li>
                            <a href="http://www.revox.io/webarch/" target="_blank">Webarch</a>
                          </li>
                        </ul>
                      </div>
                      <div class="col-md-4">
                        <h6 class="sub-menu-heading">Made with pages</h6>
                        <ul class="sub-menu">
                          <li>
                            <a href="http://pages.revox.io/dashboard/latest/html" target="_blank">Pages Admin</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/dashboard/latest/html/email.html" target="_blank">Email</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/frontend/latest" target="_blank">Pages Frontend</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/dashboard/latest/html/calendar.html" target="_blank">Calendar</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/dashboard/latest/html/social.html" target="_blank">Social</a>
                          </li>
                          <li>
                            <a href="http://pages.revox.io/dashboard/latest/html/builder.html" target="_blank">Builder</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </li>
          <!-- END DOCUMENTATION FOR PAGE FRONEND -->



        </div>
      </div>
    </section>
    <!-- END FOOTER -->
    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="pages/js/pages.image.loader.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/plugins/swiper/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/velocity/velocity.min.js"></script>
    <script type="text/javascript" src="assets/plugins/velocity/velocity.ui.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-appear/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/plugins/animateNumber/jquery.animateNumbers.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN PAGES FRONTEND LIB -->
    <script type="text/javascript" src="pages/js/pages.frontend.js"></script>
    <!-- END PAGES LIB -->
    <!-- BEGIN YOUR CUSTOM JS -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script>
      $(document).ready(function() {
				$("#loginButton").click(function(){login();});
			});
    </script>
    <!-- END PAGES LIB -->
  </body>
</html>

<?php
  include('../utils.php');
  configSession();


?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Register Flight - Otto Logistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
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
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- BEGIN CUSTOM PLUGINS -->
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
    <!-- END CUSTOM PLUGINS -->
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <?php include("sidebar.php"); ?>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <?php include("header.php"); ?>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START CONTAINER FLUID -->
          <div class=" container-fluid   container-fixed-lg">
            <div id="rootwizard" class="m-t-50">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm" role="tablist" data-init-reponsive-tabs="dropdownfx">
                <li class="nav-item">
                  <a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-plane tab-icon"></i> <span>Departure Info</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-sign-out tab-icon"></i> <span>Arrival Info</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab3" role="tab"><i class="fa fa-suitcase tab-icon"></i> <span>Est. Price</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab4" role="tab"><i class="fa fa-check tab-icon"></i> <span>Summary</span></a>
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane padding-20 sm-no-padding active slide-left" id="tab1">
                  <div class="row row-same-height">
                    <div class="col-md-5 b-r b-dashed b-grey ">
                      <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                        <h2>Your Departure Information</h2>
                        <p class="small hint-text">Please Enter The Required Information For Using Your Otto Services.</p>
                      </div>
                    </div>


                    <!-- BEGIN FORM -->
                    <div class="col-md-7">
                        <div class="card-block">
                          <form role="form" id="depInfo">
                            <div class="form-group">
                              <label>Departure Airport</label>
                                <div class="form-group col-md-10 p-l-0">
                                  <select name="depLoc" id="depLoc" class="full-width" data-init-plugin="select2">
                                    <optgroup label="Canadian Airports">
                                      <option disabled selected value></option>
                                      <option value="YYZ">YYZ - Toronto Pearson Airport</option>
                                      <option value="YTZ">YTZ - Toronto International Airport</option>
                                    </optgroup>
                                    <optgroup label="Chinese Airports">
                                      <option value="SHA">SHA - Shanghai Pudong Airport</option>
                                      <option value="BEJ">BEJ - Beijing International Airport</option>
                                    </optgroup>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Departure Date</label>
                              <!-- <span class="help">e.g. "Mona Lisa Portrait"</span> -->
                              <div id="datepicker-dep" class="input-group date col-md-10 p-l-0">
                                <input type="text" class="form-control" id="depDate" name="depDate" placeholder="Select Date"><span class="input-group-addon"><i
          								                class="fa fa-calendar"></i></span>
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Departure Time</label>
                              <div class="input-group bootstrap-timepicker col-md-4 p-l-0">
                                <input name="depTime" id="depTime" type="text" class="form-control" placeholder="Enter Time">
                                <span class="input-group-addon"><i class="pg-clock"></i></span>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                    <!-- END FORM -->
                  </div>
                </div>

                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab2">
                  <div class="row row-same-height">
                    <div class="col-md-5 b-r b-dashed b-grey ">
                      <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                        <h2>Your Arrival Information</h2>
                        <p class="small hint-text">Please Enter The Required Information For Using Your Otto Services.</p>
                      </div>
                    </div>
                    <!-- BEGIN FORM -->
                    <div class="col-md-7">
                        <div class="card-block">
                          <form id="arriInfo" role="form">
                            <div class="form-group">
                              <label>Arrival Airport</label>
                                <div class="form-group col-md-10 p-l-0">
                                  <select class="full-width" name="arriLoc" id="arriLoc" data-init-plugin="select2">
                                    <optgroup label="Canadian Airports">
                                      <option disabled selected value></option>
                                      <option value="YYZ">YYZ - Toronto Pearson Airport</option>
                                      <option value="YTZ">YTZ - Toronto International Airport</option>
                                    </optgroup>
                                    <optgroup label="Chinese Airports">
                                      <option value="SHA">SHA - Shanghai Pudong Airport</option>
                                      <option value="BEJ">BEJ - Beijing International Airport</option>
                                    </optgroup>
                                  </select>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Arrival Date</label>
                              <!-- <span class="help">e.g. "Mona Lisa Portrait"</span> -->
                              <div id="datepicker-arri" class="input-group date col-md-10 p-l-0">
                                <input type="text" class="form-control" id="arriDate" name="arriDate" placeholder="Select Date"><span class="input-group-addon"><i
                                          class="fa fa-calendar"></i></span>
                              </div>
                            </div>

                            <div class="form-group">
                              <label>Arrival Time</label>
                              <div class="input-group bootstrap-timepicker col-md-4 p-l-0">
                                <input name="arriTime" id="arriTime" type="text" class="form-control" placeholder="Enter Time">
                                <span class="input-group-addon"><i class="pg-clock"></i></span>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                    <!-- END FORM -->
                  </div>
                </div>
                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab3">
                  <div class="row row-same-height">
                    <div class="col-md-5 b-r b-dashed b-grey ">
                      <div class="padding-30 sm-padding-5 sm-m-t-15 m-t-50">
                        <h2>Luggage Carriage</h2>
                        <p>1 luggage = 25%</p>
                        <p>2 luggage = <b>50% Off Your Ticket</b></p>
                        <br>
                        <p class="small hint-text"></p>
                        <p class="small">Please Be Adviced Earnings will be distributed AFTER the delivery is complete. </p>
                        <p class="small">For More Information Please Read Our <a href="#">Terms &amp; Conditions</a></p>
                      </div>
                    </div>

                    <!-- BEGIN FORM -->
                    <div class="col-md-7">
                        <div class="card-block">
                          <form id="pricingInfo" role="form">
                            <div class="form-group col-md-5 p-l-0">
                              <label>Enter Your Ticket Price</label>
                              <input name="price" id="price" type="text" data-a-sign="$ " class="autonumeric form-control">
                            </div>

                            <div class="form-group">
                              <label>Number Of Luggage You Wish To Carry</label>
                              <!-- <span class="help">e.g. "Mona Lisa Portrait"</span> -->
                              <br>
                              <select class="cs-select cs-skin-slide" name="luggage" id="luggage" data-init-plugin="cs-select">
                                <option value="1" selected>1 Luggage</option>
                                <option value="2">2 Luggage</option>
                              </select>
                              <br>
                            </div>

                            <div class="form-group">
                              <label>If You Use Otto, Your Price Is:</label>
                              <!-- <div class="input-group bootstrap-timepicker col-md-4 p-l-0">
                                <input id="arriTime" type="text" class="form-control" placeholder="Enter Time">
                                <span class="input-group-addon"><i class="pg-clock"></i></span>
                              </div> -->
                              <h6 id="savingsResult"></h6>
                            </div>
                          </form>
                        </div>
                    </div>
                    <!-- END FORM -->

                  </div>
                </div>

                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
                  <h1>Thank you.</h1>
                  <p style="margin-bottom:3em">Your summary of the listed flight is:</p>

                  <div class="col-md-12">
                    <div class="card card-transparent">
                      <div class="card-block no-padding">
                        <div id="card-advance" class="card card-default">
                          <div class="card-header  ">
                            <div class="row">
                              <div class="col-md-5">
                                <!-- <h4 id="summaryDep">SHA - Shanghai Pudong Airport</h4> -->
                                <h4 id="summaryDep"></h4>
                                <h5 id="summaryDepDate"></h5>
                              </div>
                              <div class="col-md-1 m-t-30">
                                <i class="fa fa-arrow-right"></i>
                              </div>
                              <div class="col-md-5">
                                <h4 id="summaryArri"></h4>
                                <h5 id="summaryArriDate"></h5>
                              </div>
                            </div>
                            <div class="row m-t-30">
                              <div class="col-md-11">
                                <div style="float:right;">
                                  <h6>Carrying 2 luggage</6>
                                    <h5>Your actual ticket price - <b><span id="summaryPrice"></span></b></h5>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                <div class="padding-20 sm-padding-5 sm-m-b-20 sm-m-t-20 bg-white clearfix">
                  <ul class="pager wizard no-style">
                    <li class="next">
                      <button id="getSummary" class="btn btn-success btn-cons btn-animated from-left fa fa-sign-out pull-right" type="button">
                        <span>Next</span>
                      </button>
                    </li>
                    <li class="next finish hidden">
                      <button id="finishFlight" class="btn btn-success btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                        <span>Finish</span>
                      </button>
                    </li>
                    <li class="previous first hidden">
                      <button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                        <span>First</span>
                      </button>
                    </li>
                    <li class="previous">
                      <button class="btn btn-default btn-cons pull-right" type="button">
                        <span>Previous</span>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTAINER FLUID -->
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <?php include("footer.php"); ?>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
    <script type="text/javascript" src="assets/plugins/dropzone/dropzone.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
    <script src="assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/form_wizard.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
    <script src="assets/js/form_elements.js" type="text/javascript"></script>
    <script src="pages/js/custom.js" type="text/javascript"></script>

    <script>
    $('#depTime, #arriTime').timepicker().on('show.timepicker', function(e) {
        var widget = $('.bootstrap-timepicker-widget');
        widget.find('.glyphicon-chevron-up').removeClass().addClass('pg-arrow_maximize');
        widget.find('.glyphicon-chevron-down').removeClass().addClass('pg-arrow_minimize');
    });
    $('.autonumeric').autoNumeric('init');
    $('#datepicker-dep, #datepicker-arri').datepicker({format: "MM d, yyyy"});

    $('#finishFlight').click(function(){
      // window.location.href = "flights.php";
      registerFlight();
    })

    // $('#price').on('keyup', function() {
    //     var val = $(this).val();
    //     var val2 = val.replace('$ ','');
    //     saving = parseFloat(Math.round(val2 * 100) / 100).toFixed(2);
    //     var x = document.getElementById("luggage").value;
    //     if (x == '2'){
    //       saving = saving / 2;
    //     }
    //     $('#savingsResult').html('$ ' + saving);
    // });

    $('#luggage').bind("change keyup", function() {
        var lug = $(this).val();
        var val = document.getElementById("price").value;
        var val2 = val.replace('$ ','');
        if (lug == '1') {
          saving = val2 * 0.75;
        } else if (lug == '2') {
          saving = val2 * 0.5;
        }
        result = parseFloat(Math.round(saving * 100) / 100).toFixed(2);

        // var val2 = val.replace('$ ','');
        // saving = parseFloat(Math.round(val2 * 100) / 100).toFixed(2);
        // var x = document.getElementById("luggage").value;
        // if (x == '2'){
        //   saving = saving / 2;
        // }
        $('#savingsResult').html('$ ' + result);
        $('#summaryPrice').html('$ ' + result);
    });

    $('#getSummary').click(function(){
      document.getElementById("summaryDep").textContent =
        getAirport(document.getElementById("depLoc").value);
      document.getElementById("summaryDepDate").textContent =
        document.getElementById("depDate").value + ' '
        + document.getElementById("depTime").value;
      document.getElementById("summaryArri").textContent =
        getAirport(document.getElementById("arriLoc").value);
        document.getElementById("summaryArriDate").textContent =
          document.getElementById("arriDate").value + ' '
          + document.getElementById("arriTime").value;
    })

    </script>
  </body>
</html>

<?php
  include("../utils.php");
  configSession();

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Register Shipment - Otto Logistics</title>
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
                  <a class="active" data-toggle="tab" href="#tab1" role="tab"><i class="fa fa-user tab-icon"></i> <span>Sender Info</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab2" role="tab"><i class="fa fa-user tab-icon"></i> <span>Receiver Info</span></a>
                </li>
                <li class="nav-item">
                  <a class="" data-toggle="tab" href="#tab3" role="tab"><i class="fa fa-dropbox tab-icon"></i> <span>Items</span></a>
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
                        <h2>The Sender's Contact Information</h2>
                        <p class="small hint-text">Please Enter The Sender's Name, Contact, etc.</p>
                      </div>
                    </div>


                    <!-- BEGIN FORM -->
                    <div class="col-md-7">
                        <div class="card-block">
                          <form id="senderInfo" role="form">
                            <div class="col-md-8 p-l-0">
                              <div class="form-group">
                                <label>Sender's Name</label>
                                <input type="text" name="senderName" id="senderName" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label>Sender's Phone</label>
                                <input type="number" name="senderPhone" id="senderPhone" class="form-control" required>
                              </div>

                              <div class="form-group">
                                <label>Sender's WeChat</label>
                                <input type="text" name="senderWx" id="senderWx" class="form-control" >
                              </div>

                              <div class="form-group">
                                <label>Sender's E-mail</label>
                                <input type="email" name="senderMail" id="senderMail" class="form-control" >
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
                        <h2>The Receiver's Contact Information</h2>
                        <p class="small hint-text">Please Enter The Receiver's Name, Contact, etc.</p>
                      </div>
                    </div>
                    <!-- BEGIN FORM -->
                    <div class="col-md-7">
                        <div class="card-block">
                          <form id="receiverInfo" role="form">
                            <div class="col-md-8 p-l-0">
                              <div class="form-group">
                                <label>Receiver's Name</label>
                                <input type="text" name="receiverName" id="receiverName" class="form-control" required>
                              </div>
                              <div class="form-group">
                                <label>Receiver's Phone</label>
                                <input type="number" name="receiverPhone" id="receiverPhone" class="form-control" required>
                              </div>

                              <div class="form-group">
                                <label>Receiver's WeChat</label>
                                <input type="text" name="receiverWx" id="receiverWx" class="form-control" required>
                              </div>

                              <div class="form-group">
                                <label>Receiver's E-mail</label>
                                <input type="email" name="receiverMail" id="receiverMail" class="form-control" required>
                              </div>

                              <div class="form-group">
                                <label>Receiver's Address</label>
                                <input type="text" name="receiverAddress" id="receiverAddress" class="form-control" required>
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
                        <h2>Your Items To Send</h2>
                        <p>Our fixed price is CAD $7.50/lb</p>
                        <br>
                        <p class="small hint-text"></p>
                        <p class="small">Please note there are limitation to the type of items we ship.</p>
                        <p class="small">For More Information Please Read Our <a href="#">Terms &amp; Conditions</a></p>
                      </div>
                    </div>

                    <!-- BEGIN FORM -->
                    <div class="col-md-7">
                        <div class="card-block">
                          <!-- <button id="createItem" onclick="return addItem()" class="btn btn-success btn-cons m-b-20">Add New</button> -->
                          <!-- <a href = "javascript:void(0);" class="btn btn-success btn-cons m-b-20" id="createItem">  -->
                          <button onclick="return addItem();" class="btn btn-success btn-cons m-b-20">Add New</button>

                          <form id="items" role="form">

                            <div id="item #1" class="col-md-10 p-l-0 m-t-10" >
                              <p id="itemNumber">Item #1</p>
                              <div class="form-group-attached">
                                <div class="row clearfix">
                                  <div class="col-md-8">
                                    <div class="form-group form-group-default required">
                                      <label>Item Name</label>
                                      <input type="text" class="form-control" name="itemName" id="itemName" required>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                    <div class="form-group form-group-default">
                                      <label>Item Count</label>
                                      <input type="text" class="form-control" name="itemCount" id="itemCount" >
                                    </div>
                                  </div>
                                </div>
                                <div class="row clearfix">
                                  <div class="col-md-6">
                                    <div class="form-group form-group-default required">
                                      <label>Item Weight (lb)</label>
                                      <input type="text" class="form-control" name="itemWeight" id="itemWeight" required>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group form-group-default">
                                      <label>Item Price</label>
                                      <input type="text" class="form-control" name="itemPrice" id="itemPrice" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                    <!-- END FORM -->

                  </div>
                </div>

                <div class="tab-pane slide-left padding-20 sm-no-padding" id="tab4">
                  <h1>Thank you.</h1>
                  <p style="margin-bottom:3em">Your summary of the listed shipment is:</p>

                  <div class="col-md-12">
                    <div class="card card-transparent">
                      <div class="card-block no-padding">
                        <div id="card-advance" class="card card-default">
                          <div class="card-header  ">
                            <div class="row">
                              <div class="col-md-5">
                                <p>Sender</p>
                                <h4>George Wang</h4>
                                <h5>4168978820</h5>
                              </div>
                              <div class="col-md-1 m-t-30">
                                <i class="fa fa-arrow-right"></i>
                              </div>
                              <div class="col-md-5">
                                <p>Receiver</p>
                                <h4>Chase Wang</h4>
                                <h5>13802774135</h5>
                                <h5>218 Timberbank Blvd., Toronto, Canada</h5>
                              </div>
                            </div>
                            <div class="row m-t-30">
                              <div class="col-md-11">
                                <h6>Item List:</6>
                                <h5>Book x1, 3.5 lb</h5>
                                <h5>Laptop x3, 12.1 lb</h5>
                                <div style="float:right">
                                  <h6>Estimated Pricing,</6>
                                  <h5 style="padding-bottom: 12px; border-bottom: 1px solid #eeeeee;">Total Weight - 15.6 lb</h5>
                                  <h5>Total Price - <b>$117.00</b></h5>
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
                      <button class="btn btn-success btn-cons btn-animated from-left fa fa-user pull-right" type="button">
                        <span>Next</span>
                      </button>
                    </li>
                    <li class="next finish hidden">
                      <button id="finishItem" class="btn btn-success btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                        <span>Finish</span>
                      </button>
                    </li>
                    <li class="previous first hidden">
                      <button class="btn btn-default btn-cons btn-animated from-left fa fa-cog pull-right" type="button">
                        <span>First</span>
                      </button>
                    </li>
                    <!-- PAY LATER -->
                    <!-- <li class="pay-later">
                      <button class="btn btn-default btn-cons pull-right" type="button">
                        <span>Pay Later</span>
                      </button>
                    </li> -->
                    <!--  -->
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
    $('#finishItem').click(function(){
      registerShipment();
    })
    </script>
  </body>
</html>

<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>/onboard/assets/img/apple-icon.png" />

  <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/onboard/assets/img/favicon.png" />
  <title>Company On boarding</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/app.css" type="text/css">

  <!-- CSS Files -->
  <link href="<?php echo base_url(); ?>/onboard/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>/onboard/assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url(); ?>/onboard/assets/css/demo.css" rel="stylesheet" />

  <!-- Fonts and Icons -->
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
  <link href="<?php echo base_url(); ?>/onboard/assets/css/themify-icons.css" rel="stylesheet">

</head>

<body style="background: linear-gradient(-60deg, #37A693, #6CD4D7);">

  <a href="#main_content" data-type="section-switch" class="return-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="main_content">
    <header class="site-header header-two header_trans-fixed " data-top="992">
      <div class="container">
        <div class="header-inner">
          <div class="site-mobile-logo">
            <a href="index.html" class="logo">
              <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="main-logo">
              <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="sticky-logo"></a>
          </div>
          <div class="toggle-menu"><span class="bar"></span> <span class="bar"></span> <span class="bar"></span></div>
          <nav class="site-nav nav-dark">
            <div class="close-menu"><span>Close</span> <i class="ei ei-icon_close"></i></div>
            <div class="site-logo"><a href="index.html" class="logo">
                <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="main-logo">
                <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="site logo" class="sticky-logo"></a></div>
            <div class="menu-wrapper" data-top="992">
              <ul class="site-main-menu">
                <li><a href="<?php echo base_url(); ?>/contact">&nbsp;</a></li>
              </ul>
              <div class="nav-right"><a href="<?php echo base_url(); ?>/signup" class="nav-btn">Logout</a></div>
            </div>
          </nav>
        </div>
      </div>
    </header>

    <div class="image-container set-full-height" style=" background-image: 
  url('<?php echo base_url(); ?>/media/banner/top shape.png');">

      <br />

      <!--   Big container   -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

            <!--      Wizard container        -->
            <div class="wizard-container">

              <div style="border:thin solid #f1f1f1" class="card wizard-card" data-color="orange" id="wizardProfile">
                <form action="" method="">
                  <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

                  <div class="wizard-header text-center">
                    <h3 class="wizard-title">Fill Up Details</h3>
                  </div>

                  <div class="wizard-navigation">
                    <div class="progress-with-circle">
                      <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                    </div>
                    <ul>
                      <li>
                        <a href="#about" data-toggle="tab">
                          <div class="icon-circle">
                            <i class="ti-user"></i>
                          </div>
                          Basic
                        </a>
                      </li>
                      <li>
                        <a href="#account" data-toggle="tab">
                          <div class="icon-circle">
                            <i class="ti-map"></i>
                          </div>
                          Address
                        </a>
                      </li>
                      <li>
                        <a href="#address" data-toggle="tab">
                          <div class="icon-circle">
                            <i class="ti-map"></i>
                          </div>
                          Legal
                        </a>
                      </li>
                      <li>
                        <a href="#address1" data-toggle="tab">
                          <div class="icon-circle">
                            <i class="ti-map"></i>
                          </div>
                          People
                        </a>
                      </li>

                    </ul>
                  </div>
                  <div class="tab-content">
                    <div class="tab-pane" id="about">
                      <br /><br />
                      <div class="row">
                        <div class="col-sm-3">
                          <div class="picture-container">
                            <div class="picture">
                              <img src="<?php echo base_url(); ?>/onboard/assets/img/default-avatar.jpg" class="picture-src" id="wizardPicturePreview" title="" />
                              <input type="file" id="wizard-picture">
                            </div>
                            <h6>Compnay Logo</h6>
                          </div>
                        </div>
                        <div class="col-sm-9">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Company Name <small>(required)</small></label>
                                <input name="firstname" type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Company Email <small>(required)</small></label>
                                <input name="Email" type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Phone Number </label>
                                <input name="phone" type="number" class="form-control" placeholder="">
                              </div>

                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label>Website </label>
                                <input name="website" type="text" class="form-control" placeholder="">
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                    <div class="tab-pane" id="account">

                      <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                          <br />
                          <div class="row">
                            <div class="col-sm-6">
                              <p>Company Address</p>

                            </div>
                            <div class="col-sm-6">
                              <button style="float: right; margin-top:-10px" class="btn btn-fill btn-warning">+</button>
                            </div>
                          </div>

                          <hr />
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Label </label>
                                  <input name="email" type="email" class="form-control" placeholder="e.g- head office">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>First Line </label>
                                  <input name="email" type="email" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-sm-12">
                                <div class="form-group">
                                  <label>Address Line 2 </label>
                                  <input name="email" type="email" class="form-control" placeholder="">
                                </div>

                              </div>

                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>City </label>
                                  <input name="email" type="email" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>State </label>
                                  <input name="email" type="email" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Zip Code </label>
                                  <input name="email" type="email" class="form-control" placeholder="">
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Country </label>
                                  <input name="email" type="email" class="form-control" placeholder="">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="row text-center">
                            <a href="#">Skip</a>

                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="tab-pane" id="address">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-1">
                          <div class="form-group">
                            <label>Legal Status</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label>PAN Number</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                          <div class="form-group">
                            <label>GST Number</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="col-sm-5">
                          <button style="float: right" class="btn btn-fill btn-warning">+</button>

                        </div>
                      </div>
                    </div>
                    <div class="tab-pane" id="address1">
                      <br />
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-2 text-center">
                          <div class="form-group">
                            <label>Search Your Team</label>
                            <input type="text" class="form-control" placeholder="">
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <button style="margin-top:25px" type='button' class='btn btn-fill btn-warning btn-wd'>
                            Add
                          </button>

                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <p>Grant Access Privilege</p>
                          <table class="table table-responsive table-striped">
                            <tr>
                              <td>S.No</td>
                              <td>Module</td>
                              <td>Read</td>
                              <td>Modify</td>
                            </tr>
                            <tr>
                              <td>1.</td>
                              <td>Catalog</td>
                              <td>
                                <div class="forget-link">
                                  <div class="condition">
                                    <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value2">
                                    <label for="styled-checkbox-1"></label>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="forget-link">
                                  <div class="condition">
                                    <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value21">
                                    <label for="styled-checkbox-11"></label>
                                  </div>
                                </div>
                              </td>

                            </tr>
                          </table>
                        </div>


                      </div>
                    </div>


                  </div>
                  <div class="wizard-footer">
                    <div class="pull-right">
                      <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                      <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
                    </div>

                    <div class="pull-left">
                      <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </form>
              </div>
            </div> <!-- wizard container -->
          </div>
        </div><!-- end row -->

      </div> <!--  big container -->
      <img style="margin-top: 60px;" src="<?php echo base_url('media/banner/marketing_footer.png'); ?>" alt="" class="img-responsive">

    </div>
</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>/onboard/assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/onboard/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/onboard/assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="<?php echo base_url(); ?>/onboard/assets/js/demo.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>/onboard/assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
<script src="<?php echo base_url(); ?>/onboard/assets/js/jquery.validate.min.js" type="text/javascript"></script>

</html>
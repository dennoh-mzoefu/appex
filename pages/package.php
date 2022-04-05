<?php

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>

  <div class="card">
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Appex TRADERS</title>
      <!-- plugins:css -->
      <!-- <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css"> -->
      <!-- endinject -->
      <!-- Plugin css for this page -->
      <!-- <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
      <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css"> -->
      <!-- End plugin css for this page -->
      <!-- inject:css -->
      <!-- endinject -->
      <!-- Layout styles -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- End layout styles -->
      <link rel="shortcut icon" href="assets/images/favicon.png" />
    </head>

    <body>
      <div class="container-scroller" style="background:rgb(146, 146, 146)">
        <div class="row p-0 m-0 proBanner" id="proBanner">
          <div class="col-md-12 p-0 m-0">
            <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
              <div class="ps-lg-1">

              </div>
              <div class="d-flex align-items-center justify-content-between">
                <a href="dashboard.php"><i class="mdi mdi-home me-3 text-white"></i></a>
                <button id="bannerClose" class="btn border-0 p-0">
                  <i class="mdi mdi-close text-white me-0"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- partial:partials/_sidebar.php -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="dashboard.php">Appex</a>
            <a class="sidebar-brand brand-logo-mini" href="dashboard.php">Appex</a>
          </div>
          <ul class="nav">
            <li class="nav-item profile">
              <div class="profile-desc">
                <div class="profile-pic">
                  <div class="count-indicator">
                    <img class="img-xs rounded-circle " src="assets/images/faces/peopleLogo-removebg-preview (1).png" alt="">
                    <span class="count bg-success"></span>
                  </div>
                  <div class="profile-name">
                    <h5 class="mb-0 font-weight-normal"><?php echo $_SESSION['name']; ?></h5>
                    <span>Vip 0 Member</span>
                  </div>
                </div>
                <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                  <a href="Profile.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="profile.php" class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-onepassword  text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                    </div>
                  </a>

            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">MAIN MENU</span>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="dashboard.php">
                <span class="menu-icon">
                  <i class="mdi mdi-home"></i>
                </span>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="deposit.php">
                <span class="menu-icon">
                  <i class="mdi mdi-cash-usd"></i>
                </span>
                <span class="menu-title">Deposit</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="package.php">
                <span class="menu-icon">
                  <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Packages</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-icon">
                  <i class="mdi mdi-bank"></i>
                </span>
                <span class="menu-title">Withdraw</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="withdrawinvestment.php">Withdraw Package wallet</a></li>
                  <li class="nav-item"> <a class="nav-link" href="withdraw.php">Withdraw bonus wallet</a></li>
                  <li class="nav-item"> <a class="nav-link" href="withdrawh.php">Withdraw History</a></li>
                </ul>
              </div>
            </li>
            <!-- <li class="nav-item menu-items">
                            <a class="nav-link" href="profile.php">
                                <span class="menu-icon">
                                    <i class="mdi mdi-account"></i>
                                </span>
                                <span class="menu-title">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item menu-items">
                            <a class="nav-link" href="team.php">
                                <span class="menu-icon">
                                    <i class="mdi mdi-contacts"></i>
                                </span>
                                <span class="menu-title">Team</span>
                            </a>
                        </li> -->

            <li class="nav-item menu-items">
              <a class="nav-link" href="logout.php">
                <span class="menu-icon">
                  <i class="mdi mdi-logout"></i>
                </span>
                <span class="menu-title">Logout</span>
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Contact us</span>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="https://chat.whatsapp.com/DYbwjdLTAlC4OqFcvv70Em">
                <span class="menu-icon">
                  <i class="mdi mdi-whatsapp"></i>
                </span>
                <span class="menu-title">Whatsapp Group</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="https://wa.me/254104510473">
                <span class="menu-icon">
                  <i class="mdi mdi-whatsapp"></i>
                </span>
                <span class="menu-title">CEO Appex</span>
              </a>
            </li>
            <li class="nav-item menu-items">
              <a class="nav-link" href="https://wa.me/254101878924">
                <span class="menu-icon">
                  <i class="mdi mdi-whatsapp"></i>
                </span>
                <span class="menu-title">Assistant CEO </span>
              </a>
            </li>


          </ul>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_navbar.php -->
          <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
              <a class="navbar-brand brand-logo-mini" href="dashboard.php">Appex</a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
              <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
              </button>
              <ul class="navbar-nav w-100">
                <li class="nav-item w-100">
                  <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="Search products">
                  </form>
                </li>
              </ul>
              <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown d-none d-lg-block">

                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-file-outline text-primary"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">

                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-web text-info"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">

                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-layers text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">

                      </div>
                    </a>
                    <div class="dropdown-divider"></div>

                  </div>
                </li>
                <li class="nav-item nav-settings d-none d-lg-block">
                  <a class="nav-link" href="#">
                    <i class="mdi mdi-view-grid"></i>
                  </a>
                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email"></i>
                    <span class="count bg-success"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>


                </li>
                <li class="nav-item dropdown border-left">
                  <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                    <i class="mdi mdi-bell"></i>
                    <span class="count bg-danger"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>




                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                    <div class="navbar-profile">
                      <h5 class="mb-0 font-weight-normal">Hello, <?php echo $_SESSION['name']; ?></h5>


                      <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Profile</h6>
                    <div class="dropdown-divider"></div>
                    <a href="profile.php" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-settings text-success"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Settings</p>
                      </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="../logout.php" class="dropdown-item preview-item">
                      <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                          <i class="mdi mdi-logout text-danger"></i>
                        </div>
                      </div>
                      <div class="preview-item-content">
                        <p class="preview-subject mb-1">Log out</p>
                      </div>
                    </a>

                </li>
              </ul>
              <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
              </button>
            </div>
          </nav>
          <!-- partial -->
          <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-12 grid-margin stretch-card">
                  <div class="card corona-gradient-card">
                    <div class="card-body py-0 px-0 px-sm-3">
                      <div class="row align-items-center">
                        <div class="col-4 col-sm-3 col-xl-2">
                          <img src="assets/images/dashboard/download-removebg-preview.png" class="gradient-corona-img img-fluid" alt="">
                        </div>
                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                          <h4 class="mb-1 mb-sm-0">Welcome to Appex TRADERS</h4>
                          <p class="mb-0 font-weight-normal d-none d-sm-block">You're currently in Vip 0</p>
                        </div>
                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                          <span>
                            <a href="package.php" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade</a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Kes5,000</h3>

                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Matured Investment</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Kes 10,000</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Team Bonus</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Kes 15, 000</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-danger">
                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Withdrawn</h6>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-9">
                          <div class="d-flex align-items-center align-self-start">
                            <h3 class="mb-0">Kes 20,000</h3>
                            <p class="text-success ms-2 mb-0 font-weight-medium"></p>
                          </div>
                        </div>
                        <div class="col-3">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </div>
                      </div>
                      <h6 class="text-muted font-weight-normal">Investable Amount</h6>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Referral Link</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <input type="text" class="form" value="https://Appexfxtraders.co.ke/login.php?ref=Denis Gichana" id="myInput">
                            <button type="submit" class="badge badge-outline-success" style="margin-left:10px" onclick="copyText()">Copy link</button>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <script>
                function myFunction() {
                  var copyText = document.getElementById("myInput");
                  copyText.select();
                  copyText.setSelectionRange(0, 99999);
                  navigator.clipboard.writeText(copyText.value);

                  var tooltip = document.getElementById("myTooltip");
                  tooltip.innerHTML = "Copied: " + copyText.value;
                }

                function outFunc() {
                  var tooltip = document.getElementById("myTooltip");
                  tooltip.innerHTML = "Copy to clipboard";
                }
              </script>
              <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
              <script>
                function copyText() {
                  /* Get the text field */
                  var copyText = document.getElementById("myInput");

                  /* Select the text field */
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

                  /* Copy the text inside the text field */
                  document.execCommand("copy");

                  /* Alert the copied text */

                  alert('You have succesfully copied your link');

                }
              </script>
              <div class="row">
                <div class="col-md-4 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Transaction History</h4>

                      <tr>

                        <b>
                          <th style="background: pink; color: darkgreen;" id="demo">
                          </th>


                        </b>
                      </tr>
                      <script>
                        var countDownDate = new Date("").getTime();

                        // Update the count down every 1 second
                        var x = setInterval(function() {

                          // Get today's date and time
                          var now = new Date().getTime();

                          // Find the distance between now and the count down date
                          var distance = countDownDate - now;

                          // Time calculations for days, hours, minutes and seconds
                          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60) - 2);
                          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                          document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                            minutes + "m " + seconds + "s ";

                          if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("demo").innerHTML = "Matured";
                          }
                        }, 1000);
                      </script>

                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Withdrawn amount</h6>

                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">&nbsp;Kes &nbsp;0.00</h6>
                        </div>
                      </div>
                      <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                        <div class="text-md-center text-xl-left">
                          <h6 class="mb-1">Total Deposits</h6>
                          <p class="text-muted mb-0"></p>
                        </div>
                        <div class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                          <h6 class="font-weight-bold mb-0">&nbsp;Kes&nbsp;0.00</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-8 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-row justify-content-between">
                        <h4 class="card-title mb-1">Appex FX TRADERS</h4>
                        <p class="text-muted mb-1"></p>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <div class="preview-list">
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-primary">
                                  <i class="mdi mdi-file-document"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Customer support</h6>
                                  <p class="text-muted mb-0">Be in our whatsapp groups and get any kind of support from admins</p>
                                </div>
                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted"></p>
                                  <p class="text-muted mb-0"> </p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-success">
                                  <i class="mdi mdi-cloud-download"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Bonuses</h6>
                                  <p class="text-muted mb-0">upgrade Vip and claim bonus</p>
                                </div>
                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted"></p>
                                  <p class="text-muted mb-0"></p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-info">
                                  <i class="mdi mdi-clock"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Invest And Earn</h6>
                                  <p class="text-muted mb-0">Earn by inveting in or various packages</p>
                                </div>
                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted"></p>
                                  <p class="text-muted mb-0"></p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item border-bottom">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-danger">
                                  <i class="mdi mdi-email-open"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Royal points</h6>
                                  <p class="text-muted mb-0">Earn Royal points at end of every month</p>
                                </div>
                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted"></p>
                                  <p class="text-muted mb-0"></p>
                                </div>
                              </div>
                            </div>
                            <div class="preview-item">
                              <div class="preview-thumbnail">
                                <div class="preview-icon bg-warning">
                                  <i class="mdi mdi-chart-pie"></i>
                                </div>
                              </div>
                              <div class="preview-item-content d-sm-flex flex-grow">
                                <div class="flex-grow">
                                  <h6 class="preview-subject">Refer And earn</h6>
                                  <p class="text-muted mb-0">Get summary on Affiliate program</p>
                                </div>
                                <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                  <p class="text-muted"></p>
                                  <p class="text-muted mb-0"> </p>
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




              <div class="row ">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Investment history</h4>
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check form-check-muted m-0">
                                  <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                  </label>
                                </div>
                              </th>

                              <th> date </th>
                              <th> Amount Invested ($) </th>
                              <th> Daily pay ($)</th>
                              <th>Maturity time</th>
                              <th> matured days </th>

                              <th> Status </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Available In</h4>
                      <div class="row">
                        <div class="col-md-5">
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-ke"></i>
                                  </td>
                                  <td>Kenya</td>

                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-ug"></i>
                                  </td>
                                  <td>Uganda</td>

                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-tz"></i>
                                  </td>
                                  <td>Tanzania</td>

                                </tr>
                                <tr>
                                  <td>
                                    <i class="flag-icon flag-icon-rw"></i>
                                  </td>
                                  <td>Rwanda</td>

                                </tr>
                                <tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div id="audience-map" class="vector-map"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.php -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block" style="color: lime;">Copyright © Appex traders 2022</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank"></a> </span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      <script src="assets/vendors/js/vendor.bundle.base.js"></script>
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <script src="assets/vendors/chart.js/Chart.min.js"></script>
      <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
      <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
      <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
      <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
      <!-- <script src="assets/js/jquery.cookie.js" type="text/javascript"></script> -->
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <script src="assets/js/off-canvas.js"></script>
      <script src="assets/js/hoverable-collapse.js"></script>
      <script src="assets/js/misc.js"></script>
      <script src="assets/js/settings.js"></script>
      <script src="assets/js/todolist.js"></script>
      <!-- endinject -->
      <!-- Custom js for this page -->
      <script src="assets/js/dashboard.js"></script>
      <!-- End custom js for this page -->
    </body>

    </html>

  <?php

} else {

  header("Location: ../index.php");

  exit();
}

  ?>
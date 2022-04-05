<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>SHANGMART TRADERS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css" />
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css" />
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
  <style>
    .msg {
      margin: 5px auto;
      border-radius: 5px;
      border: 1px solid red;
      background: pink;
      text-align: left;
      color: red;
      padding: 10px;
      text-align: center;
    }

    .error {
      margin: 5px auto;
      border-radius: 5px;
      border: 1px solid lightseagreen;
      background: lightgreen;
      text-align: left;
      color: darkgreen;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Register</h3>
              <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <?php include('error.php'); ?>

                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" style="color: white" class="form-control p_input" required />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" style="color: white" name="email" class="form-control p_input" required />
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" style="color: white" name="phoneNumber" class="form-control p_input" required />
                </div>
                <div class="form-group">
                  <label>Country</label>
                  <select style="color: white" type="number" name="country" class="form-control p_input" required>
                    <option value="">Select country</option>
                    <option value="1">
                      <i class="flag-icon flag-icon-ke"></i>Kenya
                    </option>
                    <option value="2">Uganda</option>
                    <option value="3">Tanzania</option>
                    <option value="4">Rwanda</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Reffered by:</label>
                  <input type="text" style="color: white; background: black" name="reffered" class="form-control p_input" value=<?php

                                                                                                                                // Initialize URL to the variable
                                                                                                                                $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                                                                                                                $url_components = parse_url($url);
                                                                                                                                parse_str($url_components['query'], $params);
                                                                                                                                echo $params['ref'];

                                                                                                                                ?> required readonly />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" style="color: white" class="form-control p_input" name="password" required />
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn" name="reg_user">
                    Login
                  </button>
                </div>

                <p class="sign-up text-center">
                  Already have an Account?<a href="../index.php"> Sign in</a>
                </p>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
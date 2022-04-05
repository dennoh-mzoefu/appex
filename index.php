<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>SHANGMART TRADERS</title>
  <!-- <link
      rel="stylesheet"
      href="pages/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="pages/assets/vendors/css/vendor.bundle.base.css" /> -->

  <link rel="stylesheet" href="pages/assets/css/style.css" />

  <link rel="shortcut icon" href="pages/assets/images/favicon.png" />
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
              <h3 class="card-title text-left mb-3">Login</h3>

              <form action="login.php" method="POST">
                <div class="form-group">
                  <?php if (isset($_GET['error'])) { ?>

                    <p class="error"><?php echo $_GET['error']; ?></p>

                  <?php } ?>
                  <label> Email *</label>
                  <input type="email" name="uname" style="color: white" class="form-control p_input" required autocomplete="off" />
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input type="password" name="password" style="color: white" class="form-control p_input" required autocomplete="off" />
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input type="checkbox" checked />
                      Remember me
                    </label>
                  </div>
                  <a href="#" class="forgot-pass">Forgot password</a>
                </div>
                <div class="text-center">
                  <button type="submit" name="login" class="btn btn-primary btn-block enter-btn">
                    Login
                  </button>
                </div>

                <p class="sign-up">
                  Don't have an Account?<a href="./pages/registration.php">
                    Sign Up</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="pages/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- <script src="pages/assets/js/off-canvas.js"></script> -->
  <!-- <script src="pages/assets/js/hoverable-collapse.js"></script> -->
  <script src="pages/assets/js/misc.js"></script>
  <!-- <script src="pages/assets/js/settings.js"></script>
    <script src="pages/assets/js/todolist.js"></script> -->
</body>

</html>
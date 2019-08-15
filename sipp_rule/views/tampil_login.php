<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="<?php echo base_url();?>assets/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="<?php echo base_url();?>login/login_form" method="post">
          <span class="login100-form-title">
            Sign In
          </span>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
            <input class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Please enter password">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
          </div>

          <div class="text-right p-t-13 p-b-23">
            <span class="txt1">
            </span>
            <a href="#" class="txt2">
            </a>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="btn_masuk">
              Sign in
            </button>
          </div>
          
          <div class="text-right p-t-13 p-b-23">
            <span class="txt1">
            </span>
            <a href="#" class="txt2">
            </a>
          </div>

        </form>
      </div>
    </div>
  </div>
  
  
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/vendor/daterangepicker/moment.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>
</html>
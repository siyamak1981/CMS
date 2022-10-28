
<?php
include_once "../models/user_login.php";
if(isset($_POST['btn'])){
  $data = $_POST['frm'];
  user_login($data);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
<?php    include "partials/_head.php" ?>
  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <section>         
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card">
              <form class="theme-form login-form" method = "post" action = "">
                <h4>Login</h4>
                <h6>Welcome back! Log in to your account.</h6>
                <div class="form-group">
                  <label>Email Address</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
                    <input class="form-control" type="email"  name = "frm[username]">
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
                    <input class="form-control" type="password" name="frm[password]">
                    <div class="show-hide"><span class="show">                         </span></div>
                  </div>
                </div>
               
                <div class="form-group">
                  <button class="btn btn-primary btn-block" name = "btn" type="submit">Sign in</button>
                </div>
             
                <p>Don't have account?<a class="ms-2" href="log-in.html">Create Account</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- page-wrapper end-->
    <!-- latest jquery-->
 <?php include "partials/_scripts.php" ?>
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
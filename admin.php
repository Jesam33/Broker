<!DOCTYPE html>
<html>
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        <style type="text/css">
          /*#login-page{
              background: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url("img/bg.png") no-repeat no-repeat center center !important;
              background-size: cover !important;
            }*/
            .info{
              background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)), url("img/bg.png") no-repeat no-repeat center center !important;
              background-size: cover !important;
            }
        </style>
  </head>
  <body>
    <div class="login-page bg-dark" id="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6 ">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Admin Login</h1>
                  </div>
                  <p>Login to access your account.</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form class="text-left" method="POST" action="adminDashboard/admin.php">
                    
                    <div class="form-group-material">
                      <input id="register-email" type="text" name="username" required data-msg="Please enter admin username" class="input-material">
                      <label for="register-email" class="label-material">Username      </label>
                    </div>
                   
                    <div class="form-group-material">
                      <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">Password        </label>
                    </div>
                    <div>
                      <div id="loginErr" class="alert"></div>
                    </div>
                    
                    <div class="form-group text-center">
                      <button  class="btn btn-primary btn-block" name="login">Login</button>
                    </div>
                  </form><small>Don't have an account ? </small><a href="register.html" class="signup">Register here</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
 
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/front.js"></script>
    <script src="server/js/request.js"></script>
  </body>

</html>
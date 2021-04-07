<?php
require_once "config/function.php";
if (isset($_POST['login'])) {
        login($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">

          <section class="login_content">
            <div text align="center" class="title_center">
                    <img style="text-align: center; width: 200px; height: 200px; " src="admin/images/logo.jpg">
              
     
              </div>
            <form method ="post" action="">
              <h1>halaman Login</h1>
              <div>
                <input name = "username" type="text" class="form-control" placeholder="Username" required="harus di isi" />
              </div>
              <div>
                <input name = "password" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
               <button type = "submit" name = "login" class="btn btn-primary"><i class="fa fa-sign-in"> Login </i></button>
            
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                  <a href="#signup" class="to_register"> Buat  Account baru </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div class="icon"><i class="fa fa-university"> SMK Full Day Bustanul ulum bulugading</i> <br>
            aplikasi versi 1.0 <br>
            powered by Abdul Munif <br>
            Copyright <?= date("Y"); ?>
          </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>sudah punya akun..! | login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

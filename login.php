<?php
require_once "config/function.php";

if (isset($_POST['login'])) {
        login($_POST);
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <script data-ad-client="ca-pub-3774111118110177" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="NXUAWnvzSWz1fAJABx3gzqgQFZJqvI1MA3rspxi6JyA" />
    <link rel="icon" href="admin/images/logo.png" type="image/ico" />

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
                    <img style="text-align: center; width: 200px; height: 200px; " src="admin/images/logo.png">
              
     
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
                <div class = "icheckbox_flat-green checked" >

                <input name = "remember" type="checkbox" class = "icheckbox_flat-green checked"  placeholder="remember me" />
                <label>Jangan Lupakan Saya..? <i class = "fa fa-check-square-o"></i></label>
              </div>

               <button type = "submit" name = "login" class="btn btn-primary"><i class="fa fa-sign-in"> Login </i></button>
            
              </div>

              <div class="clearfix"></div>

             
                <br />
                <div class="clearfix"></div>
                <p>aplikasi ini telah di kunjungi  <strong style = "color:red;" > <?= pengunjung(); ?></strong>  Kali</p>

                <div class="icon"><i class="fa fa-university"> SMK Full Day Bustanul ulum bulugading</i> <br>
            aplikasi versi 1.0 <br>
            powered by Abdul Munif <br>
            Copyright <?= date("Y"); ?>
          </div>
              </div>
            </form>
          </section>
        </div>


          <?php 
                    if (isset($_POST['daftar'])) {
            if (daftar($_POST) > 0) {
              echo "<script>
                    alert('pendaftaran berhasil');
                    document.loction.href='login.php';
                
                  </script>
                ";
            }else{
              echo "<script>
                    alert('pendaftaran gagal');
                
                  </script>
                ";
            }
          }
           ?>
        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <div text align="center" class="title_center">
                    <img style="text-align: center; width: 200px; height: 200px; " src="admin/images/logo.png">
            <form method="post" action="" enctype="multipart/form-data"  >
              <h1>Buat Akun baru</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
               <div>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="text" name="struktural" class="form-control" placeholder="jabatan/struktural" required="" />
                <p style="font-style: italic;color: red; font-size: 10px;"  >* penulisan struktural jika lebih dari satu dipisahkan dengan tanda koma (,) </p>
              </div>
              <div>

                <input type="file" name="foto" class="form-control" placeholder="" required="" />
                <p style="font-style: italic;color: red; font-size: 10px;"  >* Isi gambar /profil </p>
              </div>
              <br>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
               <div>
                <input type="password" name="password1" class="form-control" placeholder="konfirmasi Password" required="" />
              </div>
              <div>
                <button type = "submit" name = "daftar" class="btn btn-primary"><i class="fa fa-edit"> Daftar </i></button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">
                  <a href="#signin" class="to_register"> sudah punya akun <i class="fa fa-sign-in"> | login </i> </a>
                </p>

                <div class="clearfix"></div>
                <br />
                 <p>aplikasi ini telah di kunjungi  <strong style = "color:red;" > <?= pengunjung(); ?></strong>  Kali </p>

                <div class="icon"><i class="fa fa-university"> SMK Full Day Bustanul ulum bulugading</i> <br>
            aplikasi versi 1.0 <br>
            powered by Abdul Munif <br>
            Copyright <?= date("Y"); ?>
          </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

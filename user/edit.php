<?php
session_start();
require_once 'template/header.php';
require_once 'template/sidebar.php';
require_once 'template/topbar.php';
require_once '../config/db.php';
require_once '../config/function.php';

if (!isset($_SESSION['user'])) {
  header("Location: ../login.php");
}

if (isset($_POST['edit'])) {
 if (edit($_POST) > 0 ) {
    echo "<script>
                    alert('data berhasil di edit');
                  
                  </script>";
 }else{
    echo "<script>
                    alert('data gagal di edit');
                  
                  </script>";
 }
}

$id = $_GET['id'];
$res = mysqli_query($conn, "SELECT * FROM guru WHERE id = $id ");
$r = mysqli_fetch_assoc($res);
  ?>

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>edit data</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit data guru</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div text align="center" class="title_center">
            
                    <img class="img-circle profile_img" style="width: 200px; height: 200px " src="../admin/images/<?=$r['foto'] ?>" >
              </div>
                  <div class="x_content">

                      <form method="post" action="" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                     <div class="item form-group">
                      <input type="hidden" name="id" value="<?=$r['id']; ?>" >
                      <input type="hidden" name="fotolama" value="<?=$r['foto']; ?>">
  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="first-name" name = "nama" required="required" value="<?=$r['nama']; ?>" class="form-control ">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name" >email <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="last-name" name="email" required="required" class="form-control" value="<?=$r['email']; ?>" >
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name" >struktural <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="last-name" name="struktural" required="required" class="form-control" value="<?=$r['struktural']; ?>" >
  </div>
</div>
<div class="item form-group">
  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Hp</label>
  <div class="col-md-6 col-sm-6 ">
    <input id="middle-name" class="form-control" type="text" value="<?=$r['nohp']; ?>" name="nohp">
  </div>
</div>

<div class="item form-group">
  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">tanggal Lahir</label>
  <div class="col-md-6 col-sm-6 ">
    <input id="middle-name" class="form-control" type="date" value="<?=$r['tanggal_lahir']; ?>" name="tanggal_lahir">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name = "alamat" class="date-picker form-control" required="required" value="<?=$r['alamat']; ?>" type="text">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">username <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name = "username" class="date-picker form-control" value="<?=$r['username']; ?>" required="required" type="text">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Password  <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name = "password" class="date-picker form-control" value="<?=$r['password']; ?>" required="required" type="password">
  </div>
</div>

<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Foto <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name ="foto" class="date-picker form-control"  type="file">
  </div>
</div>
                      <div class="ln_solid"></div>
                      <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                        
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="edit" type="submit" class="btn btn-success">Edit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php require_once 'template/footer.php'; ?>

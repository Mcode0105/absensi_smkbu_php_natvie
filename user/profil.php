<?php 
ob_start();
session_start();
require_once 'template/header.php';
require_once 'template/sidebar.php';
require_once 'template/topbar.php';
require_once '../config/db.php';
require_once '../config/function.php';
if (!isset($_SESSION['user'])) {
  header("Location: ../login.php");
}

$nama = $_SESSION['user'];
 ?>
 
  
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
            
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
                    <div  class="clearfix"></div>
                  </div>
                  <?php 
                  $result = mysqli_query($conn, "SELECT * FROM guru WHERE username = '$nama' ");
                  $row = mysqli_fetch_assoc($result);

                   ?>
                  <div class="x_content" style="text-align: center;">
                     <div class="col-md-3 col-sm-3  profile_center">
                      <div text align="center" class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img width="230" height="230" class="img-responsive avatar-view" src="../admin/images/<?= $row['foto']; ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h2><?= $row['nama']; ?></h2>


                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?= $row['alamat']; ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-tty"> No hp : <?= $row['nohp']; ?></i>
                         
                        </li>
                          <li class="m-top-xs">
                          <i class="fa fa-google"> Email : <?= $row['email']; ?></i>
                        </li>
                         <li class="m-top-xs">
                          <i class="fa fa-trophy"> tanggal lahir : <?= $row['tanggal_lahir']; ?> </i>
                         
                        </li>

                      </ul>

                      <a href="edit.php?id=<?=$row['id']; ?>" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


     <?php require_once 'template/footer.php'; ?>
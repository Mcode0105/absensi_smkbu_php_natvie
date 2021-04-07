<?php 
session_start();
require_once 'template/header.php';
require_once 'template/sidebar.php';
require_once 'template/topbar.php';
require_once '../config/db.php';
require_once '../config/function.php';
if (!isset($_SESSION['admin'])) {
  header("Location: ../login.php");
}
 ?>

  

        <!-- top navigation -->
       
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Profil guru</h3>
              </div>

              
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="x_panel">
                  <div class="x_content">
                      <div class="col-md-12 col-sm-12  text-center">
                        
                      </div>

                      <div class="clearfix"></div>
                      <!-- strat -->
                      <?php $result = mysqli_query($conn, "SELECT * FROM guru"); ?>
                      <?php while ( $r = mysqli_fetch_assoc($result)) : ?>
                      <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <div class="left col-md-7 col-sm-7">
                              <h3><?= $r['nama']; ?></h3>
                             
                              <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i> Alamat: <?= $r['alamat']; ?> </li>
                                <li><i class="fa fa-phone"></i> No hp : <?= $r['nohp']; ?> </li>
                                <li><i class="fa fa-google-plus-square"></i>gmail : <?= $r['email']; ?> </li>

                              </ul>
                            </div>
                            <div class="right col-md-5 col-sm-5 text-center">
                              <img src="images/<?=$r['foto']; ?>" alt="" class="img-circle img-fluid">
                            </div>
                          </div>
                          <div class=" profile-bottom text-center">
                            <div class=" col-sm-6 emphasis">
                              
                            </div>
                            <div class=" col-sm-6 emphasis">
                              <a href="edit.php?id=<?=$r['id']; ?>" class="btn btn-primary btn-sm">
                                <i class="fa fa-edit"> </i> Edit Profil
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php endwhile ?>
                      <!-- end -->
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <?php require_once 'template/footer.php'; ?>
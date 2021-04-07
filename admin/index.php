<?php
session_start();

require_once "template/header.php";
require_once "template/sidebar.php";
require_once "template/topbar.php";
require_once "../config/db.php";
require_once "../config/function.php";
if (!isset($_SESSION['admin'])) {
  header("Location: ../login.php");
}




?>

 <!-- page content -->
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              
                <h3>Admin Dhasboard</h3>
                  
              </div>
 
              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="">
                  <div class="x_content">
                    <div class="row">
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-users"></i>
                          </div>
                          <div class="count"><?php 
                              $result = mysqli_query($conn, "SELECT * FROM guru");
                              $hasil  = mysqli_num_rows($result);
                              echo $hasil;
                           ?></div>

                          <h3>Data Guru</h3>
                          <a href="data-guru.php?=guru"><p>lihat data</p></a>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-book"></i>
                          </div>
                          <div class="count"><?php 
                              $result = mysqli_query($conn, "SELECT * FROM surat_keluar");
                              $hasil  = mysqli_num_rows($result);
                              echo $hasil;
                           ?></div>

                          <h3>Data Surat Keluar</h3>
                          <a href="surat-keluar.php?=surat_keluar"><p>lihat data</p></a>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-book"></i>
                          </div>
                          <div class="count"><?php 
                              $result = mysqli_query($conn, "SELECT * FROM surat_masuk");
                              $hasil  = mysqli_num_rows($result);
                              echo $hasil;
                           ?></div>

                          <h3>Data Surat masuk</h3>
                          <a href="surat-masuk.php?=surat_masuk"><p>lihat data</p></a>
                        </div>
                      </div>
                      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-user"></i>
                          </div>
                          <div class="count"><?php 
                              $result = mysqli_query($conn, "SELECT * FROM admin");
                              $hasil  = mysqli_num_rows($result);
                              echo $hasil;
                           ?></div>
                          <h3>data admin</h3>
                          <a href="data-admin.php?=guru"><p>lihat data</p></a>
                        </div>
                      </div>
                    </div>
                  
                       
               
                   <div class="page-title">
              <div text align="center" class="title_center">


                           </div>

             
                              </div>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php require_once "template/footer.php" ?> 

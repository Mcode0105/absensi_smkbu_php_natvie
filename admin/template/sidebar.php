<?php
ob_start();
require_once "../config/db.php";
require_once "../config/function.php";

$username = $_SESSION['admin'];
$r = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' ");
$row = mysqli_fetch_assoc($r);

?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-institution"></i> <span>SMK BU</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/<?= $row['foto']; ?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Walcome</span><br>
                <span><strong><?= $_SESSION['admin']; ?></strong></span>

              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>DHASBOARD</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php" ><i class="fa fa-home"></i> Home <span class=""></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Data  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="data-guru.php">data guru</a></li>
                      <li><a href="data-admin.php">data admin</a></li>

                      <li><a href="data-presensi.php">Data presensi guru</a></li>
                      <li><a href="data-presensi-struktural.php">Data presensi struktural</a></li>

                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-bar-chart-o"></i> Data Arsip <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="surat-keluar.php">Surat keluar</a></li>
                      <li><a href="surat-masuk.php">Surat masuk</a></li>
                      <li><a href="data-rekap-absen.php">data rekapa absen</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-users"></i>Data Profil  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="profil.php">Profil Sekolah</a></li>
                      <li><a href="profil-guru.php">Profil guru</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
             <!-- /menu footer buttons -->
             <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="../logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

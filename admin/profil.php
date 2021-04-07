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
 
  
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Plain Page</h2>
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
                  <div class="x_content" style="text-align: center;">
                     <div class="col-md-3 col-sm-3  profile_center">
                      <div text align="center" class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img width="230" height="230" class="img-responsive avatar-view" src="images/logo.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>SMK Full day Bustanul Ulum Bulugading</h3>
                      <h2>NURUL HIDAYAT S.pd.i</h2>


                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> Langkap Bangsalsari Jember
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> Program keahlian : TEKNIK KOMPUTER DAN JARINGAN
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="www.smkbulugading.sch.id" target="_blank">smkbulugading</a>
                        </li>
                        <li class="m-top-xs">
                          <i class="fa fa-tty"> No hp : 098873665355</i>
                         
                        </li>
                          <li class="m-top-xs">
                          <i class="fa fa-google"> Email : smkbulugading@yahoo.com</i>
                        </li>
                         <li class="m-top-xs">
                          <i class="fa fa-tty"> Npsn : 62563572</i>
                         
                        </li>
                         <li class="m-top-xs">
                          <i class="fa fa-trophy"> Akreditasi : B </i>
                         
                        </li>
                      </ul>

                      <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                      <br />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


     <?php require_once 'template/footer.php'; ?>
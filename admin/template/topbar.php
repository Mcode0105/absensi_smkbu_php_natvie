<?php
require_once "../config/db.php";
$username = $_SESSION['admin'];
$r = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username' ");
$row = mysqli_fetch_assoc($r);
?>
       <!-- top navigation -->
       <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                   <strong><?= hari().",".date("d-m-Y")."."; ?></strong> <?= $_SESSION['admin'] ?> <img src="images/<?= $row['foto']; ?>" alt="">
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profil</a>
                    <a class="dropdown-item"  href="../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

               
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
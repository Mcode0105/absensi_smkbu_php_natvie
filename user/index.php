<?php
ob_start();

session_start();

if (!isset($_SESSION['user'])) {

  header("Location: ../login.php");

}



require_once "template/header.php";

require_once "template/sidebar.php";

require_once "template/topbar.php";

require_once "../config/db.php";

require_once "../config/function.php";

if (isset($_POST['absen'])) {



    if (absen($_POST) > 0 ) {



        echo " 

            <script>

            alert('absensi berhasil');

            </script>

            ";

    }else{

        echo " 

        <script>

        alert('MAAF  ANDA  TELAT');

        </script>

        ";

    }

}
if (isset($_POST['absenstruktural'])) {



    if (absenstruktural($_POST) > 0 ) {



        echo " 

            <script>

            alert('absensi berhasil');

            </script>

            ";

    }else{

        echo " 

        <script>

        alert('MAAF  ANDA  TELAT');

        </script>

        ";

    }

}







?>



 <!-- page content -->

 <div class="right_col" role="main">

          <div class="">

            <div class="page-title">

              <div text align="center" class="title_center">



               <?php
               $nama = $_SESSION['user'];
                $res = mysqli_query($conn, "SELECT * FROM guru WHERE username = '$nama' ");
                $n = mysqli_fetch_assoc($res);
                 ?>

                 <marquee scrollamount = "10" ><h1 style="color: blue;" >Assalamualaikum , Selamat <?= waktu()." " ?> <?= $n['nama'] ."..!"; ?></h1></marquee>

                
                  <br>
                
                   <form method = "post" action ="" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                            <div class="ln_solid"></div>

                            <div class="item form-group">

                              <div class="col-md-6 col-sm-6 offset-md-3">

                                <?php 

                                $username = $_SESSION['user'];

                                $r = mysqli_query($conn, "SELECT * FROM guru WHERE username = '$username' ");

                                $row = mysqli_fetch_assoc($r); 

                                $nama = $row['nama'];

                              

                                 ?>

                                <input type="hidden" name="nama" value="<?= $row['nama']; ?>" >
                                <input type="hidden" name="struktural" value="<?= $row['struktural']; ?>" >
                                <h2 style="color: red; font-style: italic; ">absen di sini</h2>
                                <h3><i class="fa fa-hand-o-down"></i></h3><button name = "absen" type="submit" class="btn btn-round btn-success"><i class="fa fa-edit">Absen Guru</i></button> <i class="fa fa-hand-o-left"></i></i></button> <i class="fa fa-hand-o-right"></i>
                               <button name = "absenstruktural" type="submit" class="btn btn-round btn-primary"><i class="fa fa-edit">Absen Struktural</i></button>

                              </div>

                            </div>

                            </form>
                            <br>
                            <br>
                            <br>
                       
                    <img style="text-align: center; width: 150px; height: 150px " src="../admin/images/logo.png">





              </div>



             

            </div>



            <div class="clearfix"></div>



                 



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


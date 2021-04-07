<?php 

session_start();



require_once "template/header.php";

require_once "template/sidebar.php";

require_once "template/topbar.php";

require_once "../config/function.php";

require_once "../config/db.php";

if (!isset($_SESSION['user'])) {

    header("Location: ../login.php");

}





if (isset($_POST['absen'])) {



    if (absen_struktural($_POST) > 0 ) {



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

              <div class="title_left">

                <h3>data Presensi Struktural : <?= $row['nama']; ?>  </h3>

              </div>



             



                    <div class="clearfix"></div>

                  </div>

                  <div class="x_content">

                      <div class="row">

                          <div class="col-sm-12">

                            <div class="card-box table-responsive">

                              <!-- tombol -->                          

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
                                <input type="hidden" name="jabatan" value="<?= $row['struktural']; ?>" >


                               

                              </div>

                            </div>

                            </form>

                              <!-- endtombol -->

                              <a target="_blank" href="expot_struktural.php?nama=<?=$row['nama']; ?> "class="btn btn-success"><i class="fa fa-download"> Download data presensi</i></a>

                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">

                      <thead>



                        <tr>

                        <th>No</th>

                          <th>tanggal</th>

                          <th>waktu</th>

                          <th>Bulan</th>

                          <th>Keterangan jam ke - </th>

                          <th>Status </th>

                        </tr>

                      </thead>





                      <tbody>

                  <?php

                   $no     = 1;

                   $result = mysqli_query($conn,"SELECT * FROM presensi_struktural WHERE nama = '$nama' "); ?>

                  <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>

                        <tr>

                          <td><?= $no; ?> </td>

                          <td><?= $row['tanggal'];?> </td>

                          <td><?= $row['waktu'];?> </td>

                          <td><?= $row['bulan'];?> </td>

                          <td><?= $row['keterangan_jam'];?> </td>

                          <td><?= $row['status'];?> </td>



                          





                        </tr>

                    <?php

                    $no++;

                     endwhile ?>

                   

                      </tbody>

                    </table>

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

            </div>

          </div>

        </div>

        <!-- /page content -->



      <?php require_once "template/footer.php"; ?>


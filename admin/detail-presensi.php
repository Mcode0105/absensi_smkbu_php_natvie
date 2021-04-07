<?php 
session_start();

require_once "template/header.php";
require_once "template/sidebar.php";
require_once "template/topbar.php";
require_once "../config/function.php";
require_once "../config/db.php";
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
}


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
        alert('absensi gagal');
        </script>
        ";
    }
}

                     $nama = $_GET['nama'];
                    $r = mysqli_query($conn, "SELECT * FROM guru WHERE nama = '$nama' ");
                    $row = mysqli_fetch_assoc($r); 
                    $nama = $row['nama'];


?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>data Presensi : <?= $row['nama']; ?>  </h3>
              </div>

             

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                              <!-- tombol -->                          
                                
                              <!-- endtombol -->
                              <a href="download.php"class="btn btn-success"><i class="fa fa-download"> Download data presensi</i></a>
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

                   $result = mysqli_query($conn,"SELECT * FROM presensi WHERE nama = '$nama' "); ?>

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

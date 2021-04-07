<?php
ob_start();
session_start();

require_once "template/header.php";
require_once "template/sidebar.php";
require_once "template/topbar.php";
require_once "../config/db.php";
require_once "../config/function.php";
if (!isset($_SESSION['user'])) {
  header("Location: ../login.php");
}

if (isset($_POST['simpan'])) {
  if (rekapguru($_POST) > 0 ) {
    echo "<script>
            alert('data berhasil di tambahakan');
            </script>
            ";
  }else{
    echo "<script>
            alert('data gagal di tambahkan');
            </script>
            ";
  }
}


?>

        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data Rekap Absensi</h3>
              </div>

              
            </div>

                                 <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>

                        <tr>
                        <th>No</th>
                          <th>Nama Guru</th>
                           <th>tanggal</th>
                          <th>file</th>
                         
                          <th>opsi</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                  <?php
                
                                $username = $_SESSION['user'];

                                $r = mysqli_query($conn, "SELECT * FROM guru WHERE username = '$username' ");

                                $row = mysqli_fetch_assoc($r); 

                                $nama = $row['nama'];


                 
                   $no     = 1;
                   $result = mysqli_query($conn,"SELECT * FROM rekap_guru WHERE nama = '$nama' "); ?>
                  <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
                        <tr>
                          <td><?= $no; ?> </td>
                          <td><?= $row['nama'];?> </td>
                          <td><?= $row['tanggal'];?> </td>

                          <td> 
                        <?= $row['file'];?> 
                        
                        </td>
                          <td>
                            <a href="d-rekap-absen.php?file=<?= $row['file']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-download"></i> Download </a>
                            
                          </td>    
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
        <!-- /page content -->

        <?php require_once 'template/footer.php'; ?>
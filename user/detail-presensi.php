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


if (isset($_POST['simpan'])) {

    if (registrasi($_POST) > 0 ) {

        echo " 
            <script>
            alert('data berhasil di simpan');
            </script>
            ";
    }else{
        echo " 
        <script>
        alert('data gagal di simpan');
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
                <h3>data Presensi : </h3>
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
                          <th>Nama</th>
                          <th>Jam ke- 1</th>
                          <th>Jam ke- 2</th>
                          <th>Jam ke- 3</th>
                          <th>Jam ke- 4</th>
                          <th>Jam ke- 5</th>
                          <th>Jam ke- 6</th>
                          <th>Jam ke- 7</th>
                          <th>Jam ke- 8</th>
                          <th>Jam ke- 9</th>
                          <th>tanggal</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                  <?php
                   $no     = 1;
                   $result = mysqli_query($conn,"SELECT * FROM presensi"); ?>
                  <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
                        <tr>
                          <td><?= $no; ?> </td>
                          <td><?= $row['nama'];?> </td>
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
 
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
                <h3>Data Rekap Absensi guru</h3>
              </div>

              
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
           
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
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" ><i class="fa fa-plus"></i> tambah file</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">tambah data</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <form method = "post" action ="" enctype ="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

<div class="item form-group">
  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama guru <span class="required">*</span>
  </label>

    
  <div class="col-md-6 col-sm-6 ">
     
    <select class="form-control" name="nama">
      <?php 
      $con = mysqli_query($conn,"SELECT * FROM guru");
       ?>
    <?php while ( $as  = mysqli_fetch_assoc($con)) : ?>
      <option name="nama" ><?= $as['nama'] ?></option>
       <?php endwhile ?>
    </select>
  
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">tanggal <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name ="tanggal" class="date-picker form-control"  type="date">
  </div>
</div>


<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">file <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name ="foto" class="date-picker form-control"  type="file">
    <p style="font-size: 12px;font-style: italic;color: red;" >* harap ganti nama file nya sesuai dengan rekapan absensi ex. rekapan guru.xls</p>
  </div>
</div>
<div class="ln_solid"></div>
<div class="item form-group">
  <div class="col-md-6 col-sm-6 offset-md-3">
  
    <button class="btn btn-primary" type="reset">Reset</button>
    <button name = "simpan" type="submit" class="btn btn-success">Simpan</button>
  </div>
</div>

</form>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
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
                   $no     = 1;
                   $result = mysqli_query($conn,"SELECT * FROM rekap_guru"); ?>
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
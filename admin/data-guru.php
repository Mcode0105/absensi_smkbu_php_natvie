<?php 
ob_start();
session_start();

require_once "template/header.php";
require_once "template/sidebar.php";
require_once "template/topbar.php";
require_once "../config/function.php";
require_once "../config/db.php";
if (!isset($_SESSION['admin'])) {
  echo "session belum di set";
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
                <h3>Data Guru</h3>
              </div>

             

          
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" ><i class="fa fa-plus"></i> tambah data</button>

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
  <label  class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="first-name" name = "nama" required="required" class="form-control ">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">email <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input type="text" id="last-name" name="email" required="required" class="form-control">
  </div>
</div>
<div class="item form-group">
  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Hp</label>
  <div class="col-md-6 col-sm-6 ">
    <input id="middle-name" class="form-control" type="text" name="nohp">
  </div>
</div>

<div class="item form-group">
  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">tanggal Lahir</label>
  <div class="col-md-6 col-sm-6 ">
    <input id="middle-name" class="form-control" type="date" name="tanggal_lahir">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name = "alamat" class="date-picker form-control" required="required" type="text">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Struktural <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name = "struktural" class="date-picker form-control" required="required" type="text">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">username <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name = "username" class="date-picker form-control" required="required" type="text">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Password <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name = "password" class="date-picker form-control" required="required" type="password">
  </div>
</div>
<div class="item form-group">
  <label class="col-form-label col-md-3 col-sm-3 label-align">Foto <span class="required">*</span>
  </label>
  <div class="col-md-6 col-sm-6 ">
    <input id="birthday" name ="foto" class="date-picker form-control"  type="file">
  </div>
</div>
<div class="ln_solid"></div>
<div class="item form-group">
  <div class="col-md-6 col-sm-6 offset-md-3">
    <button  class="btn btn-primary" type="button">Cancel</button>
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
                          <th>Nama</th>
                         
                          <th>email</th>
                          <th>Struktural</th>

                          <th>opsi</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                  <?php
                   $no     = 1;
                   $result = mysqli_query($conn,"SELECT * FROM guru"); ?>
                  <?php while ( $row = mysqli_fetch_assoc($result) ) : ?>
                        <tr>
                          <td><?= $no; ?> </td>
                          <td><?= $row['nama'];?> </td>
                          
                          <td><?= $row['email'];?> </td>
                          <td><?= $row['struktural'];?> </td>


                          <td>
               
                            <a href="edit.php?id=<?=$row['id']; ?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="hapus.php?id=<?=$row['id']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Delete </a>
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
            </div>
          </div>
        </div>
        <!-- /page content -->

      <?php require_once "template/footer.php"; ?>
 
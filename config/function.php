<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once "db.php";
function login($post)
    {
        global $conn;
        $username = $post['username'];
        $password = $post['password'];
        $remember = $post['remember'];
        $time      = time();
        //admin
        $query =  "SELECT * FROM admin WHERE username = '$username' AND password = '$password' ";
        $result = mysqli_query($conn,$query );
        $cek = mysqli_num_rows($result);

        //cek user
        $query1 =  "SELECT * FROM guru WHERE username = '$username' AND password = '$password' ";
        $result1 = mysqli_query($conn,$query1 );
        $cek1 = mysqli_num_rows($result1);
    
        if ($cek > 0 ) {
             $_SESSION['admin'] = $username;
             if (isset($post['remember'])) {
                setcookie('username',$username,time()+ 60 * 60 * 24 * 30);
               setcookie('password',$password,time()+ 60 * 60 * 24 * 30);
             }

            header("Location: admin/");
         }elseif ($cek1 > 0) {
              $_SESSION['user'] = $username;
                if (isset($post['remember'])) {
                setcookie('username',$username,time()+ 60 * 60 * 24 * 30);
             }
            header("Location: user/");
        }else{
            echo "<script>
            alert('login gagal.! username atau pasword salah');
            </script>
            ";

        }
    }

function registrasi ($post)
    {
        global $conn;
        $nama           = $post['nama'];
        $email          = $post['email'];
        $struktural     = $post['struktural'];
        $nohp           = $post['nohp'];
        $tanggal_lahir  = $post['tanggal_lahir'];
        $alamat         = $post['alamat'];
        $username       = $post['username'];
        $password       = $post['password'];
        $foto           = uploadfoto();
       // cek jika usernamesudah terdaftar
        $result = mysqli_query($conn, "SELECT * FROM guru");
        $cek    = mysqli_fetch_assoc($result);
        if ($cek['username'] === $username) {
            echo "<script>
            alert('username sudah terdaftar');
            </script>
            ";
            return false;
        }
        
        if (!$foto) {
             return false;   
            }

        $query = "INSERT INTO guru VALUES('','$nama','$email','$struktural','$nohp','$tanggal_lahir','$alamat','$username','$password','$foto')";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

function uploadfoto()
{

    $namafoto        = $_FILES['foto']['name'];
    $ukuranfoto      = $_FILES['foto']['size'];
    $error           = $_FILES['foto']['error'];
    $tmpname         = $_FILES['foto']['tmp_name'];
    if ($error === 4 ) {
             echo "<script>
            alert('anda belum mengisi foto');
            </script>
            ";

             return false;  
         }
           

        $extensivalid = ['png','jpg','jpeg'];
        $extensigambar  = explode('.', $namafoto);
        $extensigambar  = strtolower(end($extensigambar));
        if ( !in_array($extensigambar, $extensivalid)) {
                    echo "<script>
                    alert('yang anda isi bukan gambar');
                </script>
            "; 
            return false; 
            } 
            
        if ($ukuranfoto > 3000000) {
              echo "<script>
                    alert('ukuran foto terlalu besar');
                </script>";
            return false;
         } 

         move_uploaded_file($tmpname, '../admin/images/'.$namafoto);
         return $namafoto;
        
}
function uploadfotodaftar()
{

    $namafoto        = $_FILES['foto']['name'];
    $ukuranfoto      = $_FILES['foto']['size'];
    $error           = $_FILES['foto']['error'];
    $tmpname         = $_FILES['foto']['tmp_name'];
    if ($error === 4 ) {
             echo "<script>
            alert('anda belum mengisi foto');
            </script>
            ";

             return false;  
         }
           

        $extensivalid = ['png','jpg','jpeg'];
        $extensigambar  = explode('.', $namafoto);
        $extensigambar  = strtolower(end($extensigambar));
        if ( !in_array($extensigambar, $extensivalid)) {
                    echo "<script>
                    alert('yang anda isi bukan gambar');
                </script>
            "; 
            return false; 
            } 
            
        if ($ukuranfoto > 3000000) {
              echo "<script>
                    alert('ukuran foto terlalu besar');
                </script>";
            return false;
         } 

         move_uploaded_file($tmpname, 'admin/images/'.$namafoto);
         return $namafoto;
        
}
function hari (){
        $hari = date("l");
        if ($hari == 'Thursday') {
            $hari = 'kamis';
        }else if ($hari == 'Friday' ) {
            $hari = "jumat";
        }else if ($hari == 'Saturday') {
            $hari = "Sabtu";
        }elseif ($hari == "Sunday") {
            $hari = "Minggu";
        }else if ($hari == "Monday") {
            $hari = "Senin";
        }else if ($hari == "Tuesday") {
            $hari = "Selasa";
        }else if ($hari == "Wednesday") {
            $hari = "Rabu";
        }
        return $hari;
    }
function jam()
    {
        date_default_timezone_set("asia/jakarta");
        $j = date("Hi");


        return $j;
    }
function tanggal()
    {
        $t = date("d-m-Y");
        return $t;
    }
function bulan(){
    $b = date("m");
    if ($b == "01") {
        $b = "Januari";
    }elseif ($b == "02") {
        $b = "Februari";
    }elseif ($b == "03" ) {
        $b = "Maret";
    }elseif ($b == "04") {
        $b = "April";
    }elseif ($b == "05") {
        $b = "Mei";
    }elseif ($b == "06") {
        $b = "Juni";
    }elseif ($b == "07") {
        $b = "juli";
    }elseif ($b == "08") {
        $b = "Agustus";
    }elseif ($b == "09") {
        $b = "September";
    }elseif ($b == 10) {
        $b = "0ktober";
    }elseif ($b == 11) {
        $b = "November";
    }elseif ($b == 12) {
        $b = "Desember";
    }
    return $b;
}

function absen_struktural($post){
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM presensi");
    $cek    = mysqli_fetch_assoc($result);
    $bulan      = bulan();
    $nama       = $post['nama'];
    $struktural = $post['struktural'];
    $tanggal    = hari().",".date("d-Y");
    date_default_timezone_set("asia/jakarta");         
    $waktu      = date("H:i:s");
    $result     = mysqli_query($conn, "SELECT * FROM presensi WHERE nama = '$nama'  ");
    $cek        = mysqli_fetch_assoc($result);

    // cek masuk jam ke 1=======================================================================================================
        if ( jam() < "1000") {
            echo "<script>
                    alert('absensi berhasil di jam ke I');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','I','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlambatan
        }elseif (jam() >= "1010" && jam() <= "1011" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke 1');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','I','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;

// cek masuk jam ke 2 =======================================================================================================
        }elseif (jam() < "1040") {
            echo "<script>
                    alert('absensi berhasil di jam ke II');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','II','HADIR','$struktural')";
            mysqli_query($conn,$query);


        // keterlambatan jam k2
        }elseif (jam() >= "1050" && jam() <= "1051" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke II');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','II','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;

// cek masuk jam ke 3=======================================================================================================
        }elseif (jam() < "1120") {
            echo "<script>
                    alert('absensi berhasil di jam ke III');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','III','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlamabatan jam 3
        }elseif (jam() >= "1130" && jam() <= "1130" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke III');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','III','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 4===========================================================================================================
        }elseif (jam() < "1200") {
            echo "<script>
                    alert('absensi berhasil di jam ke IV');
                </script>";
           
           $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','IV','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlambatan jam 4
        }elseif (jam() >= "1210" && jam() <= "1230" ) {
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke IV');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','IV','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 5=======================================================================================================
        }elseif (jam() < "1335") {
           echo "<script>
                    alert('absensi berhasil di jam ke V');
                </script>";
          $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','V','HADIR','$struktural')";
            mysqli_query($conn,$query);
// jam ke 5
        }elseif (jam() >= "1345" && jam() <= "1346" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke V');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','V','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam k 6=====================================================================================================

        }elseif (jam() < "1410") {
            echo "<script>
                    alert('absensi berhasil di jam ke VI');
                </script>";
        $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VI','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlamabatan jam6
        }elseif (jam() >= "1420" && jam() <= "1421" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VI');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VI','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 7=====================================================================================================
         }elseif (jam() < "1445") {
            echo "<script>
                    alert('absensi berhasil di jam ke VII');
                </script>";
           $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','Vll','$struktural')";
            mysqli_query($conn,$query);
        // cek ketrlambatan jam 7
        }elseif (jam() >= "1455" && jam() <= "1456" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VII');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VII','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam8=======================================================================================================
        }elseif (jam() < "1520") {
              echo "<script>
                    alert('absensi berhasil di jam ke 8');
                </script>";
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VII','$struktural')";
            mysqli_query($conn,$query);
        }elseif (jam() >= "1530" && jam() <= "1540" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VIII');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VIII','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
        }else{
            echo "<script>
                    alert('anda sudah absen..! tunggu hari esok untuk melakukan absen kembali');
                </script>";
                return false;
        }


        return mysqli_affected_rows($conn);
}

function absen($post){
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM presensi");
    $cek    = mysqli_fetch_assoc($result);
    $bulan      = bulan();
    $nama       = $post['nama'];
    $struktural = $post['struktural'];
    $tanggal    = hari().",".date("d-Y");
    date_default_timezone_set("asia/jakarta");         
    $waktu      = date("H:i:s");
    $result     = mysqli_query($conn, "SELECT * FROM presensi WHERE nama = '$nama'  ");
    $cek        = mysqli_fetch_assoc($result);

    // cek masuk jam ke 1=======================================================================================================
        if ( jam() < "1000") {
            echo "<script>
                    alert('absensi berhasil di jam ke I');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','I','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlambatan
        }elseif (jam() >= "1010" && jam() <= "1011" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke 1');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','I','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;

// cek masuk jam ke 2 =======================================================================================================
        }elseif (jam() < "1040") {
            echo "<script>
                    alert('absensi berhasil di jam ke II');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','II','HADIR','$struktural')";
            mysqli_query($conn,$query);


        // keterlambatan jam k2
        }elseif (jam() >= "1050" && jam() <= "1051" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke II');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','II','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;

// cek masuk jam ke 3=======================================================================================================
        }elseif (jam() < "1120") {
            echo "<script>
                    alert('absensi berhasil di jam ke III');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','III','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlamabatan jam 3
        }elseif (jam() >= "1130" && jam() <= "1130" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke III');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','III','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 4===========================================================================================================
        }elseif (jam() < "1200") {
            echo "<script>
                    alert('absensi berhasil di jam ke IV');
                </script>";
           
           $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','IV','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlambatan jam 4
        }elseif (jam() >= "1210" && jam() <= "1230" ) {
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke IV');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','IV','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 5=======================================================================================================
        }elseif (jam() < "1335") {
           echo "<script>
                    alert('absensi berhasil di jam ke V');
                </script>";
          $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','V','HADIR','$struktural')";
            mysqli_query($conn,$query);
// jam ke 5
        }elseif (jam() >= "1345" && jam() <= "1346" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke V');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','V','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam k 6=====================================================================================================

        }elseif (jam() < "1410") {
            echo "<script>
                    alert('absensi berhasil di jam ke VI');
                </script>";
        $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VI','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlamabatan jam6
        }elseif (jam() >= "1420" && jam() <= "1421" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VI');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VI','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 7=====================================================================================================
         }elseif (jam() < "1445") {
            echo "<script>
                    alert('absensi berhasil di jam ke VII');
                </script>";
           $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','Vll','$struktural')";
            mysqli_query($conn,$query);
        // cek ketrlambatan jam 7
        }elseif (jam() >= "1455" && jam() <= "1456" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VII');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VII','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam8=======================================================================================================
        }elseif (jam() < "1520") {
              echo "<script>
                    alert('absensi berhasil di jam ke 8');
                </script>";
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VII','$struktural')";
            mysqli_query($conn,$query);
        }elseif (jam() >= "1530" && jam() <= "1540" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VIII');
                </script>";
           
            $query = "INSERT INTO presensi VALUES ('','$nama','$tanggal','$waktu','$bulan','VIII','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
        }else{
            echo "<script>
                    alert('anda sudah absen..! tunggu hari esok untuk melakukan absen kembali');
                </script>";
                return false;
        }


        return mysqli_affected_rows($conn);
}


function absenstruktural($post){
    global $conn;
    $result = mysqli_query($conn, "SELECT * FROM presensi");
    $cek    = mysqli_fetch_assoc($result);
    $bulan      = bulan();
    $nama       = $post['nama'];
    $struktural = $post['struktural'];
    $tanggal    = hari().",".date("d-Y");
    date_default_timezone_set("asia/jakarta");         
    $waktu      = date("H:i:s");
    $result     = mysqli_query($conn, "SELECT * FROM presensi WHERE nama = '$nama'  ");
    $cek        = mysqli_fetch_assoc($result);

    // cek masuk jam ke 1=======================================================================================================
        if ( jam() < "1000") {
            echo "<script>
                    alert('absensi berhasil di jam ke I');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','I','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlambatan
        }elseif (jam() >= "1010" && jam() <= "1011" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke 1');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','I','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;

// cek masuk jam ke 2 =======================================================================================================
        }elseif (jam() < "1040") {
            echo "<script>
                    alert('absensi berhasil di jam ke II');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','II','HADIR','$struktural')";
            mysqli_query($conn,$query);


        // keterlambatan jam k2
        }elseif (jam() >= "1050" && jam() <= "1051" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke II');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','II','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;

// cek masuk jam ke 3=======================================================================================================
        }elseif (jam() < "1120") {
            echo "<script>
                    alert('absensi berhasil di jam ke III');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','III','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlamabatan jam 3
        }elseif (jam() >= "1130" && jam() <= "1130" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke III');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','III','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 4===========================================================================================================
        }elseif (jam() < "1200") {
            echo "<script>
                    alert('absensi berhasil di jam ke IV');
                </script>";
           
           $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','IV','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlambatan jam 4
        }elseif (jam() >= "1210" && jam() <= "1230" ) {
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke IV');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','IV','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 5=======================================================================================================
        }elseif (jam() < "1335") {
           echo "<script>
                    alert('absensi berhasil di jam ke V');
                </script>";
          $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','V','HADIR','$struktural')";
            mysqli_query($conn,$query);
// jam ke 5
        }elseif (jam() >= "1345" && jam() <= "1346" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke V');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','V','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam k 6=====================================================================================================

        }elseif (jam() < "1410") {
            echo "<script>
                    alert('absensi berhasil di jam ke VI');
                </script>";
        $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','VI','HADIR','$struktural')";
            mysqli_query($conn,$query);
            // cek keterlamabatan jam6
        }elseif (jam() >= "1420" && jam() <= "1421" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VI');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','VI','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam 7=====================================================================================================
         }elseif (jam() < "1445") {
            echo "<script>
                    alert('absensi berhasil di jam ke VII');
                </script>";
           $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','Vll','$struktural')";
            mysqli_query($conn,$query);
        // cek ketrlambatan jam 7
        }elseif (jam() >= "1455" && jam() <= "1456" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VII');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','VII','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
// cek masuk jam8=======================================================================================================
        }elseif (jam() < "15:20") {
              echo "<script>
                    alert('absensi berhasil di jam ke 8');
                </script>";
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','VII','$struktural')";
            mysqli_query($conn,$query);
        }elseif (jam() >= "1530" && jam() <= "1540" ) {
            
              echo "<script>
                    alert('anda telat dalam  melakukan absens di jam ke VIII');
                </script>";
           
            $query = "INSERT INTO presensi_struktural VALUES ('','$nama','$tanggal','$waktu','$bulan','VIII','TELAT','$struktural')";
            mysqli_query($conn,$query);
            return false;
        }else{
            echo "<script>
                    alert('anda sudah absen..! tunggu hari esok untuk melakukan absen kembali');
                </script>";
                return false;
        }


        return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn,"DELETE FROM guru WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function daftar ($post)
{
    global $conn;

    $username   =$post['username'];
    $nama       =$post['nama'];
    $email      =$post['email'];
    $struktural =$post['struktural'];
    $foto       =uploadfotodaftar();
    $password   =$post['password'];
    $password1  =$post['password1'];
     $result = mysqli_query($conn, "SELECT * FROM guru");
    $cek = mysqli_fetch_assoc($result);
    $user = $cek['username'];
    $na   = $cek['nama'];
    if ($password !== $password1) {
        echo "<script>
                    alert('konfirmasi pasword tidak sama');
                </script>";
       
    }elseif ($username === $user) {
        echo "<script>
                    alert('username sudah terdaftar');
                </script>";
              
    }elseif ($nama === $na) {
        echo "<script>
                    alert('anda sudah mendaftar, silahkan login kembali');
                </script>";
                return false;
    }
    if (!$foto) {
             return false;   
            }


    $query = "INSERT INTO guru VALUES('','$nama','$email','$struktural','','','','$username','$password','$foto') ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function edit($post)
{           
        global $conn;
        $id             = $post['id'];
         $nama          = $post['nama'];
        $email          = $post['email'];
        $struktural     = $post['struktural'];
        $nohp           = $post['nohp'];
        $tanggal_lahir  = $post['tanggal_lahir'];
        $alamat         = $post['alamat'];
        $username       = $post['username'];
        $password       = $post['password'];
        $fotolama       = $post['fotolama'];
        $struktural     = $post['struktural'];
        if ($_FILES['foto']['error'] === 4 ) {
            $foto    = $fotolama;
        }else{
            $foto    = uploadfoto();
        }


        $query = "UPDATE guru SET 
                    nama            = '$nama',
                    email           = '$email',
                    struktural      = '$struktural',
                    nohp            = '$nohp',
                    tanggal_lahir   = '$tanggal_lahir',
                    alamat          = '$alamat',
                    username        = '$username',
                    password        = '$password',
                    foto            = '$foto'
                    WHERE   id = $id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
}


function tambahsurat($post)
{
    global $conn;
    $namasurat      = $post['nama_surat'];
    $nomorsurat     = $post['nomor_surat'];
    $tanggal_keluar = $post['tanggal_keluar'];
    $file           = uploadfile();

    mysqli_query($conn, "INSERT INTO surat_keluar VALUES('','$namasurat','$tanggal_keluar','$nomorsurat','$file') ");
    return mysqli_affected_rows($conn);
}

function uploadfile()
{

    $namafoto        = $_FILES['foto']['name'];
    $ukuranfoto      = $_FILES['foto']['size'];
    $error           = $_FILES['foto']['error'];
    $tmpname         = $_FILES['foto']['tmp_name'];
    if ($error === 4 ) {
             echo "<script>
            alert('anda belum mengisi file');
            </script>
            ";

             return false;  
         }
           

        $extensivalid = ['png','jpg','jpeg','pdf','docx','xls','ppt'];
        $extensigambar  = explode('.', $namafoto);
        $extensigambar  = strtolower(end($extensigambar));
        if ( !in_array($extensigambar, $extensivalid)) {
                    echo "<script>
                    alert('yang anda isi bukan file');
                </script>
            "; 
            return false; 
            } 
            
        if ($ukuranfoto > 3000000) {
              echo "<script>
                    alert('ukuran file terlalu besar');
                </script>";
            return false;
         } 

         move_uploaded_file($tmpname, '../admin/images/'.$namafoto);
         return $namafoto;
        
}
function tambahsuratmasuk($post)
{
    global $conn;
    $namasurat      = $post['nama_surat'];
    $nomorsurat     = $post['nomor_surat'];
    $tanggal_masuk = $post['tanggal_masuk'];
    $file           = uploadfile();

    mysqli_query($conn, "INSERT INTO surat_masuk VALUES('','$namasurat','$tanggal_masuk','$nomorsurat','$file') ");
    return mysqli_affected_rows($conn);
}

function editsuratmasuk($post)
{
    global $conn;
        $id              = $post['id'];
        $nama           = $post['nama_surat'];
        $nomor_surat     = $post['nomor_surat'];
        $tanggal_masuk   = $post['tanggal_masuk'];
        $fotolama       = $post['fotolama'];
        if ($_FILES['foto']['error'] === 4 ) {
            $foto    = $fotolama;
        }else{
            $foto    = uploadfile();
        }


        $query = "UPDATE surat_masuk SET 
                    nama_surat          = '$nama',
                    tanggal_masuk       = '$tanggal_masuk',
                    nomor_surat         = '$nomor_surat',
                    file_surat         = '$foto'
                 
                    WHERE   id = $id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
}

function hapussuratmasuk($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM surat_masuk WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function hapussuratkeluar($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM surat_keluar WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function editsuratkeluar($post)
{
    global $conn;
        $id              = $post['id'];
        $nama           = $post['nama_surat'];
        $nomor_surat     = $post['nomor_surat'];
        $tanggal_keluar   = $post['tanggal_keluar'];
        $fotolama       = $post['fotolama'];
        if ($_FILES['foto']['error'] === 4 ) {
            $foto    = $fotolama;
        }else{
            $foto    = uploadfile();
        }


        $query = "UPDATE surat_keluar SET 
                    nama_surat          = '$nama',
                    tanggal_keluar       = '$tanggal_keluar',
                    nomor_surat         = '$nomor_surat',
                    file_surat         = '$foto'
                 
                    WHERE   id = $id";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
}

function editadmin($post)
{
    global $conn;
    $id = $post['id'];
    $username = $post['username'];
    $password = $post['password'];
    $fotolama = $post['fotolama'];

      if ($_FILES['foto']['error'] === 4 ) {
            $foto    = $fotolama;
        }else{
            $foto    = uploadfoto();
        }

    mysqli_query($conn, "UPDATE admin SET username = '$username', password = '$password', foto ='$foto' WHERE id = $id ");
    return mysqli_affected_rows($conn);

}

function waktu(){
    date_default_timezone_set("Asia/Jakarta");

$b = time();
$hour = date("G",$b);

if ($hour>=0 && $hour<=11)
{
$hour = " Pagi";
}
elseif ($hour >=12 && $hour<=14)
{
$hour = " Siang ";
}
elseif ($hour >=15 && $hour<=17)
{
$hour = " Sore ";
}
elseif ($hour >=17 && $hour<=18)
{
$hour = " Petang ";
}
elseif ($hour >=19 && $hour<=23)
{
$hour = " Malam";
}
return $hour;
}


function pengunjung ()
{
$filecounter=("counter.txt");
$kunjungan=file($filecounter);
$kunjungan[0]++;
$file=fopen($filecounter,"w");
fputs($file,"$kunjungan[0]");
fclose($file);
return $kunjungan[0];
}

function rekapguru($post)
{
    global$conn;
    $nama  = $post['nama'];
    $tanggal = $post['tanggal'];
    $foto  = uploadfile();

    mysqli_query($conn, "INSERT INTO rekap_guru VALUES ('','$nama','$tanggal','$foto') ");
    return mysqli_affected_rows($conn);
}

function hapusrekap($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM rekap_guru WHERE id = $id ");
    return mysqli_affected_rows($conn);
}


?>

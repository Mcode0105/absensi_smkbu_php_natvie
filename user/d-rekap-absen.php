<?php 

require_once '../config/db.php';

$folder = "images/";
if (!file_exists($folder.$_GET['file'])) {
			echo "<script>
					alert('anda tidak boleh download file ini');
					document.location.href='d-rekap-absen.php';
				</script>
			";	
			exit();
}else{
	header("Conten-Type: octet/stream");
	header("Content-Disposition:attachment; filename=\"".$_GET['file']."\"" );
	$fp = fopen($folder.$_GET['file'], "r");
	$data = fread($fp, filesize($folder.$_GET['file']));

	fclose($fp);
	print $data;

}


 ?>
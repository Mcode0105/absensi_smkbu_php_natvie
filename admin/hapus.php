<?php 
require_once '../config/function.php';
$id = $_GET ['id'];
if (hapus($id) > 0 ) {
	echo "<script>
					alert('data berhasil dihapus');
                    document.location.href='index.php';
				
				</script>
			";
}else{
	echo "<script>
					alert('data gagal di hapus');
                    document.location.href='index.php';
				</script>
			";
}


if (hapussuratmasuk($id) > 0 ) {
	echo "<script>
					alert('data berhasil dihapus');
                    document.location.href='surat-masuk.php';
				</script>
			";
}else{
	echo "<script>
					alert('data berhasil dihapus');
                    document.location.href='surat-masuk.php';
				</script>
			";
}


if (hapussuratkeluar($id) > 0 ) {
	echo "<script>
					alert('data berhasil dihapus');
                    document.location.href='surat-keluar.php';
				</script>
			";
}else{
	echo "<script>
					alert('data berhasil dihapus');
                    document.location.href='surat-keluar.php';
				</script>
			";
}


if (hapusadmin($id) > 0 ){
        echo "<script>
					alert('data berhasil dihapus');
					document.location.href='data-admin.php';
				</script>
			";
}else{
    echo "<script>
					alert('data berhasil dihapus');
                    document.location.href='data-admin.php';
				</script>
			";
}

if (hapusrekap($id) > 0 ){
        echo "<script>
					alert('data berhasil dihapus');
					document.location.href='data-admin.php';
				</script>
			";
}else{
    echo "<script>
					alert('data gagal dihapus');
                    document.location.href='data-admin.php';
				</script>
			";
}


 ?>
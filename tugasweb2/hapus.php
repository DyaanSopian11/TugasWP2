<?php

require_once "core/init.php";

$nip = $_GET['nip'];

$sql = tampilkan_per_nip($nip);
$data = mysqli_fetch_assoc($sql);
if(is_file("image/".$data['gambar'])){
unlink("image/".$data['gambar']);
}
if (isset($_GET['nip'])) {
	if (hapus_data($_GET['nip'])) {
		echo "<script> alert ('Karyawan Berhasil Dihapus'); document.location='departemen.php'</script>";
	}else{
		echo "<script> alert ('Karyawan Gagal Dihapus'); document.location='departemen.php'</script>";
	}
}

 ?>

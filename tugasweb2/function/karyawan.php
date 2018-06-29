<?php

function tampilkan(){

	$query  = "SELECT * FROM data_karyawan";
	return result($query);
}

function tampilkan_per_nip($nip){

	$query  = "SELECT * FROM data_karyawan WHERE nip='$nip'";
	return result($query);
}

function tampil_departemen($filter){
	$query = "SELECT * FROM data_karyawan WHERE departemen='$filter'";
	return result($query);
}

function tampil_urut(){
	$query = "SELECT * FROM data_karyawan ORDER BY nama ASC";
	return result($query);
}

function cari_nama($cari){
	$query = "SELECT * FROM data_karyawan WHERE nama LIKE '%$cari%'";
	return result($query);
}

function result($query){
	global $link;

	if ($result = mysqli_query($link, $query) or die('gagal menampilkan data')) {

		return $result;

	}

}

function tambah_data($nip, $nama, $alamat, $status, $jabatan, $jns_kel, $gambar, $notelp){
  $nip = escape($nip);
  $nama = escape($nama);
  $alamat = escape($alamat);
  $status = escape($status);
  $jabatan = escape($jabatan);
  $jns_kel = escape($jns_kel);
  $gambar = escape($gambar);
  $notelp = escape($notelp);


  $query = "INSERT INTO data_karyawan (nip, nama, alamat, status, jabatan, jns_kel, gambar, no_telp) VALUES
            ('$nip','$nama','$alamat','$status','$jabatan','$jns_kel','$gambar','$notelp')";
  return run($query);
}

function edit_data($nip, $nama, $alamat, $status, $jabatan, $jns_kel, $gambar, $notelp){
  $query = "UPDATE data_karyawan SET nama='$nama', alamat='$alamat', status='$status', jabatan='$jabatan', jns_kel='$jns_kel', no_telp='$notelp', gambar='$gambar'
            WHERE nip='$nip';";
  return run($query);
}

function edit_tanpa_gambar($nip, $nama, $alamat, $status, $jabatan, $jns_kel, $notelp){
  $query = "UPDATE data_karyawan SET nama='$nama', alamat='$alamat', status='$status', jabatan='$jabatan', jns_kel='$jns_kel', no_telp='$notelp'
            WHERE nip='$nip';";
  return run($query);
}

function hapus_data($nip){
  $query = "DELETE FROM data_karyawan WHERE nip='$nip';";
  return run($query);
}

function run($query){
	global $link;

	if (mysqli_query($link, $query)) return true;
	else return false;
}

function escape($data){
	global $link;
	return mysqli_real_escape_string($link, $data);
}
 ?>

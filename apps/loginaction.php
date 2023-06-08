<?php
	session_start();
	date_default_timezone_set("Asia/Jakarta");
	include "../config/database.php";
	
	$nama	= mysqli_real_escape_string($koneksi, $_POST['nama']);
	$email	= md5(mysqli_real_escape_string($koneksi, $_POST['email']));
	$alamat	= md5(mysqli_real_escape_string($koneksi, $_POST['alamat']));
	$ip		= $_SERVER['REMOTE_ADDR'];
	$updated= date('Y-m-d');

	$sql = $koneksi->query("INSERT INTO absensi (absensi_id, nama, email, alamat, updated, ip) VALUES (NULL, '$nama', '$email', '$alamat', '$updated', '$ip')") or die (mysqli_error($koneksi));

	if($sql){
		$_SESSION['success'] = "Absensi berhasil! Selamat Datang Di Candi Muara Takus";
	}
	
	header("location:login");
?>

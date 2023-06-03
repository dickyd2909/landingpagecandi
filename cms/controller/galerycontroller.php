<?php
    date_default_timezone_set('Asia/Jakarta');
    if ($_GET['m'] == 'galerysimpan') {
		$odb 				= $koneksi->query("SELECT MAX(galery_order) AS LastNo FROM galery");
		$odt 				= $odb->fetch_array();
		$stringreplace 		= array ('/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+',' ','_');
        $db                 = $koneksi->query("SELECT max(galery_id) as kodeTerbesar FROM galery");
        $dt                 = $db->fetch_array();
        $kode               = $dt['kodeTerbesar'];    
        $urutan             = (int) substr($kode, 3, 3); 
        $urutan++;
        $huruf              = "GA";
        $galery_id       	= $huruf . sprintf("%03s", $urutan);
        $galery_nama    	= mysqli_real_escape_string($koneksi, $_POST['galery_nama']);
		$galery_order 		= $odt['LastNo'] + 1;
		$code		   			= md5(uniqid(rand()));
		$gencode				= substr($code, 0, 3);
		$replace				= strtolower(str_replace($stringreplace,'_',$galery_nama));	
		$nama_file 				= $_FILES["galery_image"]["name"];
		$tipe_file 				= $_FILES["galery_image"]["type"];
		$alamat 				= $_FILES["galery_image"]["tmp_name"];
		$nama_baru 				= $replace."_".$gencode.".".end((explode(".", $nama_file)));
		$tujuan 				= "../../assets/images/galery/$nama_baru";
		$updated				= date('Y-m-d H:i:s');
		if(empty($nama_file))
		{
			$sql = $koneksi->query("INSERT INTO galery(galery_id, galery_nama, galery_order) VALUES ('$galery_id', '$galery_nama', '$galery_order') ")or die(mysqli_error($koneksi));
			if($sql == true){
				$koneksi->query("INSERT INTO logscontent(logsconten_id, logscontent_status, logscontent_desc, logscontent_read, postdated, admin_id) VALUES(NULL, 'Simpan', 'Data Galery: $galery_nama', '1', '$updated', '$_SESSION[admin_id]')")or die(mysqli_error($koneksi));
				$_SESSION['success'] = 'Data Galery Berhasil Ditambahkan';
			}else{
				$_SESSION['error'] = 'Tambah Data Galery Gagal!';
			}	
			echo "<meta http-equiv='refresh' galery='0; url=index.php?m=galery'>";
		}else{
			if ($tipe_file != "image/gif" && $tipe_file != "image/jpg" && $tipe_file != "image/jpeg" && $tipe_file != "image/png") {
				$_SESSION['error'] = 'Tambah Data galery Gagal!, tipe data tidak didukung!';
				echo "<meta http-equiv='refresh' galery='0; url=index.php?m=galery'>";
			}else{
				$gambar_baru = move_uploaded_file($alamat, $tujuan);
				$sql = $koneksi->query("INSERT INTO galery(galery_id, galery_nama, galery_image, galery_order) VALUES ('$galery_id', '$galery_nama', '$nama_baru', '$galery_order') ")or die(mysqli_error($koneksi));
				if($sql == true){
					$koneksi->query("INSERT INTO logscontent (logscontent_id, logscontent_status, logscontent_desc, logscontent_read, postdated, admin_id) VALUES(NULL, 'Simpan', 'Data Galery: $galery_nama', '1', '$updated', '$_SESSION[admin_id]')")or die(mysqli_error($koneksi));
					$_SESSION['success'] = 'Data Galery Berhasil Ditambahkan';
				}else{
					$_SESSION['error'] = 'Tambah Data Galery Gagal!';
				}	
				echo "<meta http-equiv='refresh' galery='0; url=index.php?m=galery'>";
			}
		}	
    }else if ($_GET['m'] == 'galeryupdate') {
		$stringreplace 		= array ('/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+',' ','_');
        $galery_id       		= mysqli_real_escape_string($koneksi, $_POST['galery_id']);
        $galery_nama    		= mysqli_real_escape_string($koneksi, $_POST['galery_nama']);
		$code		   			= md5(uniqid(rand()));
		$gencode				= substr($code, 0, 3);
		$replace				= strtolower(str_replace($stringreplace,'_',$galery_nama));	
		$nama_file 				= $_FILES["galery_image"]["name"];
		$tipe_file 				= $_FILES["galery_image"]["type"];
		$alamat 				= $_FILES["galery_image"]["tmp_name"];
		$nama_baru 				= $replace."_".$gencode.".".end((explode(".", $nama_file)));
		$tujuan 				= "../../assets/images/galery/$nama_baru";
        $updated			= date('Y-m-d H:i:s'); 
		if(empty($nama_file))
		{	
			$sql = $koneksi->query("UPDATE galery SET
            galery_nama   = '$galery_nama'
            WHERE galery_id= '$galery_id'") or die(mysqli_error($koneksi));
			if($sql == true){
				$koneksi->query("INSERT INTO logscontent (logscontent_id, logscontent_status, logscontent_desc, logscontent_read, postdated, admin_id) VALUES(NULL, 'Update', 'Data Galery: $galery_nama', '1', '$updated', '$_SESSION[admin_id]')")or die(mysqli_error($koneksi));
				$_SESSION['success'] = 'Data Galery Berhasil Diubah';
			}else{
				$_SESSION['error'] = 'Ubah Data Galery Gagal!';
			}	
			echo "<meta http-equiv='refresh' galery='0; url=index.php?m=galery'>";
		}else{
			if ($tipe_file != "image/gif" && $tipe_file != "image/jpg" && $tipe_file != "image/jpeg" && $tipe_file != "image/png") {
				$_SESSION['error'] = 'Tambah Data Galery Gagal!, tipe data tidak didukung!';
				echo "<meta http-equiv='refresh' galery='0; url=index.php?m=galery'>";
			}else{
				$db = "SELECT * FROM galery WHERE galery_id='$galery_id'";
				$result = mysqli_query($koneksi, $db);
				if(mysqli_num_rows($result) > 0 ){
					$data = mysqli_fetch_array($result);
					@unlink('../../assets/images/galery/'.$data['galery_image']);
				}
				$gambar_baru = move_uploaded_file($alamat, $tujuan);
				$sql = $koneksi->query("UPDATE galery SET
				galery_nama   = '$galery_nama',
                galery_image  = '$nama_baru'
				WHERE galery_id= '$galery_id'") or die(mysqli_error($koneksi));
				if($sql == true){
					$koneksi->query("INSERT INTO logscontent (logscontent_id, logscontent_status, logscontent_desc, logscontent_read, postdated, admin_id) VALUES(NULL, 'Update', 'Data Galery: $galery_nama', '1', '$updated', '$_SESSION[admin_id]')")or die(mysqli_error($koneksi));
					$_SESSION['success'] = 'Data Galery Berhasil Diubah';
				}else{
					$_SESSION['error'] = 'Ubah Galery Gagal!';
				}	
				echo "<meta http-equiv='refresh' galery='0; url=index.php?m=galery'>";
			}
		}

    }else if($_GET['m'] == 'galeryhapus'){
		$updated	= date('Y-m-d H:i:s');
		$id 		= $_GET['id'];
		$db 		= "SELECT * FROM galery WHERE galery_id='$id'";
		$result 	= mysqli_query($koneksi, $db);
		if(mysqli_num_rows($result) > 0 ) {
			$dt 				= mysqli_fetch_array($result);
			$galery_nama	= $dt['galery_nama'];
			@unlink('../../assets/images/galery/'.$dt['galery_image']);
			$sql = mysqli_query($koneksi, "DELETE FROM galery WHERE galery_id='$id'") or die (mysqli_error($koneksi));
			if($sql == true){
				$koneksi->query("INSERT INTO logscontent (logscontent_id, logscontent_status, logscontent_desc, logscontent_read, postdated, admin_id) VALUES(NULL, 'Hapus', 'Data Galery: $galery_nama', '1', '$updated', '$_SESSION[admin_id]')")or die(mysqli_error($koneksi));
				$_SESSION['success'] = 'Data Galery Berhasil Dihapus!';
			}else{
				$_SESSION['error'] = 'Hapus Data galery Gagal!';
			}
			echo "<meta http-equiv='refresh' galery='0; url=index.php?m=galery'>";
		}
    }
?>
<?php

	if (isset($_POST['id_pemasok'])){
		$id_pemasok = $_POST['id_pemasok'];
		$simpan = "EDIT " ;
	}else{
		$simpan = "BARU" ;
	}
	
	$email = $_POST['email'];
	$nm_pemasok = $_POST['nm_pemasok'];
	$no_telp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];
	

	$dataValid="YA";
	if (strlen(trim($email))==0) {
		echo "email Harus Diisi! <br />";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($nm_pemasok))==0) {
		echo "nama pemasok Harus diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($no_telp))==0) {
		echo "no telepon Harus diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if (strlen(trim($alamat))==0) {
		echo "alamat Harus diisi! <br/>";
		$dataValid = "TIDAK";
	}
	if ($dataValid == "TIDAK") {
		echo "Masih Ada Kesalahan, silahkan perbaiki! </br>";
		echo "<input type='button' value='Kembali'
			onClick='self.history.back()'>";
		exit;
	}
	
	include "koneksi.php";
	
	if($simpan == "EDIT") {
	
		$sql =" update pemasok set
				email = '$email' ,
				nm_pemasok = '$nm_pemasok' ,
				no_telp = $no_telp ,
				alamat = '$alamat'
				where id_pemasok = '$id_pemasok' ";
			
	}else{
		$sql = "insert into pemasok
				(id_pemasok,email,nm_pemasok,no_telp,alamat)
				values
				('$id_pemasok','$email','$nm_pemasok',$no_telp,'$alamat') " ;
	}
	$hasil = mysqli_query($koneksidb, $sql);
	
	
	if (!$hasil) {
		echo "Gagal Simpan, silahkan diulangi! <br />";
		echo mysqli_error($koneksidb);
		echo"<br/> <input type='button' value='Kembali'
			onClick='self.history.back()'>";
			exit;
} else {
    header("location:daftar_pemasok.php");
} 
		
?>

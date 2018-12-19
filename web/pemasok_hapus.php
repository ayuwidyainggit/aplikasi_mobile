<?php
	$id_pemasok = $_GET['id_pemasok'] ;
	include "koneksi.php";
	$sql = "select * from pemasok where id_pemasok = '$id_pemasok' ";
	$hasil = mysqli_query($koneksidb,$sql);
	if(!$hasil) die ('Gagal query...');
	
	$data = mysqli_fetch_array($hasil);
	$email = $data['email'];
	$nm_pemasok = $data['nm_pemasok'];
	$no_telp = $data['no_telp'];
	$alamat = $data['alamat'];
	
	echo "<h2>Konfirmasi Hapus</h2>";
	echo "email  :".$email."<br/>" ;
	echo "nama pemasok  :".$nm_pemasok."<br/>";
	echo "no telp  :".$no_telp."<br/>";
	echo "alamat  :".$alamat."<br/>";
	echo "AMEH DIHAPUS?? <br/>";
	echo "<a href='pemasok_hapus.php?
	
	<?php
	$id_pemasok = $_GET['id_pemasok'] ;
	include "koneksi.php";
	$sql = "select * from pemasok where id_pemasok = '$id_pemasok' ";
	$hasil = mysqli_query($koneksidb,$sql);
	if(!$hasil) die ('Gagal query...');
	
	$data = mysqli_fetch_array($hasil);
	$email = $data['email'];
	$nm_pemasok = $data['nm_pemasok'];
	$no_telp = $data['no_telp'];
	$alamat = $data['alamat'];
	
	echo "<h2>Konfirmasi Hapus</h2>";
	echo "email :".$email."<br/>" ;
	echo "nm pemasok :".$nm_pemasok."<br/>";
	echo "no_telp : ".$no_telp."<br/>";
	echo "alamat : ".$alamat."<br/>";
	echo "Apa anda Yakin ingin menghapus ?? <br/>";
	echo "<a href='pemasok_hapus.php?id_pemasok=$id_pemasok=$id_pemasok&hapus=1'> IYO  </a>";
	echo "&nbsp;&nbsp;" ;
	echo "<a href='daftar_pemasok.php'> ORA  </a> <br/><br/>";
	
	if(isset($_GET['hapus'])) {
			$sql = "delete from pemasok where id_pemasok = '$id_pemasok'";
			$hasil = mysqli_query($koneksidb,$sql);
			if(!$hasil) {
				echo "AHAHAHAHAHAHA... GAGAL: $email ..<br/> ";
				echo "<a href='daftar_pemasok.php'> Kembali </a>";
			}else{
				header('location:daftar_pemasok.php');
			}
	}
?>id_pemasok=$id_pemasok=$id_pemasok&hapus=1'> IYO  </a>";
	echo "&nbsp;&nbsp;" ;
	echo "<a href='daftar_pemasok.php'> ORA  </a> <br/><br/>";
	
	if(isset($_GET['hapus'])) {
			$sql = "delete from pemasok where id_pemasok = '$id_pemasok'";
			$hasil = mysqli_query($krsort,$sql);
			if(!$hasil) {
				echo "AHAHAHAHAHAHA... GAGAL: $email ..<br/> ";
				echo "<a href='daftar_pemasok.php'> Kembali ke Daftar pemasok</a>";
			}else{
				header('location:daftar_pemasok.php');
			}
	}
?>
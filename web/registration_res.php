<?php

  $nama				= $_POST['nama'];
  $username			= $_POST['username'];
  $password			= $_POST['password'];
  $jabatan     = $_POST['jabatan'];
  $pass				= MD5($password);

  

include "koneksi.php";
$sql = "insert into user values('','$nama', '$username','$pass','$jabatan')";   
$hasil = $koneksidb->query($sql);
if (!$hasil) {
    echo "Gagal Simpan, silakan diulangi! <br /> ".mysqli_error($koneksidb);
    echo "<input type='button' value='Kembali'
    onClick='self.history.back()'>";
    exit;
} else {
    header("location:login.html");
} 
?>
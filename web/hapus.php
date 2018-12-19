
<?php
include 'koneksi.php';
$id_pemasok = $_GET['id_pemasok'];
mysql_query("delete from pemasok where id_pemasok='$id_pemasok'")or die(mysql_error());

header("location:daftar_pemasok.php?pesan=hapus");
?>
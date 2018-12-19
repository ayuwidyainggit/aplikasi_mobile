<?php
	$id = $_GET['id'];
	$sql = $koneksi->query("delete from pembelian where id_beli ='$id'");
	if ($sql) {
?>
<script type="text/javascript">
	alert("Hapus Data Berhasil");
	window.location.href="?page=masuk";
</script>
<?php
	}
?>
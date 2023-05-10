<?php 
//error_reporting(0);
include"config/koneksi.php";

	$sqldel=mysqli_query($koneksi, "delete from karyawan_mario
	where nik_mario='$_GET[id]'");
	echo"<script>document.location='?module=karyawan'</script>";	 			


?>
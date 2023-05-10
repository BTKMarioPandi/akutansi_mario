<?php 
error_reporting(0);
include"config/koneksi.php";
if (isset($_POST[simpan])){
	$sqlsimpan=mysqli_query($koneksi, "update karyawan_mario set
				nama_karyawan_mario = '$_POST[nama]',
				alamat_mario = '$_POST[alamat]',
				telpon_mario = '$_POST[telpon]' 
				where nik_mario='$_POST[nik]' ");
	echo"<script>document.location='?module=karyawan'</script>";	 			
}
$sql=mysqli_query($koneksi, "select * from karyawan_mario where nik_mario='$_GET[id]'");
$data=mysqli_fetch_array($sql);
echo"<h1>Tambah Data Perkiraan</h1>";
echo"<form action='' method='POST'>
<table border='0' >
<tr>
<td>Nama Karyawan</td><td><input type='hidden' name='nik' value='$data[nik_mario]'><input type='text' name='nama' value='$data[nama_karyawan_mario]'></td>
</tr>
<tr>
<td>Alamat </td><td><input type='text' name='alamat' value='$data[alamat_mario]'></td>
</tr>
<tr>
<td>telpon </td><td><input type='text' name='telpon' value='$data[telpon_mario]'></td>
</tr>
<tr>
<td><input type='submit' name='simpan' value='Edit'></td>
</tr>
</table>
</form>";
?>
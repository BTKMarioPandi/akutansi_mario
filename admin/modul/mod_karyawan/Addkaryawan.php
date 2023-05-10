<?php 
error_reporting(0);
include"config/koneksi.php";
if (isset($_POST[simpan])){
	$sqlsimpan=mysqli_query($koneksi, "insert into karyawan_mario
			   (nik_mario,
				nama_karyawan_mario,
				alamat_mario,
				telpon_mario)
		 values('$_POST[nik]',
				'$_POST[nama]',
				'$_POST[alamat]',
				'$_POST[telpon]')");
	echo"<script>document.location='?module=karyawan'</script>";	 			
}

echo"<h1>Tambah Data Perkiraan</h1>";
echo"<form action='' method='POST'>
<table border='0' >
<tr>
<td>NIK </td><td><input type='text' name='nik'></td>
</tr>
<tr>
<td>Nama Karyawan</td><td><input type='text' name='nama'></td>
</tr>
<tr>
<td>Alamat </td><td><input type='text' name='alamat'></td>
</tr>
<tr>
<td>telpon </td><td><input type='text' name='telpon'></td>
</tr>
<tr>
<td><input type='submit' name='simpan' value='Kirim'></td>
</tr>
</table>
</form>";
?>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    </style>
  </head>

<?php
error_reporting(0);
include"config/koneksi.php";
echo"<h1>Informasi Data Karyawan</h1>";

echo"<a href='?module=addkaryawan'>Tambah Data</a>";
echo"<table border='1' width='100%'>
<tr style=background:purple;color:white>
<td>No</td>
<td>NIK</td>
<td>Nama Karywan</td>
<td>Alamat</td>
<td>Telepon</td>
<td>Aksi</td>
</tr>";
$sql=mysqli_query($koneksi, "select * from karyawan_mario");
while($data=mysqli_fetch_array($sql)){
$no++;	
	echo"<tr>
	<td>$no</td>
	<td>$data[nik_mario]</td>
	<td>$data[nama_karyawan_mario]</td>
	<td>$data[alamat_mario]</td>
	<td>$data[telpon_mario]</td>
  <td><a href='?module=delkaryawan&id=$data[nik_mario]'>Del</a> | <a href='?module=editkaryawan&id=$data[nik_mario]'>edit</a></td>
	</tr>";
}
echo"</table>";
?>
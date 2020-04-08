<link href="style.css" rel="stylesheet" type="text/css">
<table><tr><th>No</th><th>Nama</th><th>Alamat</th></tr>
<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$file = "use_paging.php";
// Memanggil dan menginisiasi class
include "class_paging.php";
$p = new Paging;

// Tentukan limit atau batas
$batas = 5;

// Cek halaman dan posisi data
$posisi = $p->cariPosisi($batas);

// Sesuaikan perintah SQL
$tampil="select * from anggota limit $posisi,$batas";
$hasil=mysql_query($tampil);

$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
  $no++;
}
echo "</table><br>";

// Dapatkan jumlah data keseluruhan
$jmldata = mysql_num_rows(mysql_query("SELECT * FROM anggota"));

// Dapatkan jumlah halaman
$jmlhalaman = $p->jumlahHalaman($jmldata, $batas);

// Cetak link navigasi halaman
$linkHalaman = $p->navHalaman($_GET[halaman], $jmlhalaman);
echo $linkHalaman;
?>

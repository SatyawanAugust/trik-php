<link href="style.css" rel="stylesheet" type="text/css">
<table>
      <tr><th>No</th><th>Nama</th><th>Alamat</th></tr>
<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

//Langkah 1: Tentukan batas,cek halaman & posisi data
$batas   = 5;
$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}

//Langkah 2: Sesuaikan perintah SQL
$tampil="select * from anggota limit $posisi,$batas";
$hasil=mysql_query($tampil);

$no=$posisi+1; // Agar angka (penomoran) mengikuti paging
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
  $no++;
}
echo "</table>";

//Langkah 3: Hitung total data dan halaman serta link 1,2,3 ...
echo "<br>Halaman : ";
$file="paging_1.php";

$tampil2="select * from anggota";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);

for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman)
{
	echo " <a href=$_SERVER[PHP_SELF]?halaman=$i>$i</A> | ";
}
else
{
	echo " <b>$i</b> | ";
}
echo "<p>Total anggota : <b>$jmldata</b> orang</p>";
?>

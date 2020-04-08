<link href="style.css" rel="stylesheet" type="text/css">

<form method=get action=paging_2.php>
Isikan Nama : <input type=text name="nama"> 
<input type=submit name=oke value=Cari>
</form>
 
<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$oke=$_GET['oke'];
if ($oke=='Cari'){

$batas=5;
$halaman=$_GET['halaman'];

if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{ 
$posisi = ($halaman-1) * $batas; 
}

$nama=$_GET['nama'];

$tampil="select * from anggota where nama like '%$nama%' limit $posisi,$batas";
$hasil=mysql_query($tampil);
$jumlah=mysql_num_rows($hasil);

if ($jumlah > 0){
echo "<table>
      <tr><th>No</th><th>Nama</th><th>Alamat</th></tr>";
$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
  $no++;
}
echo "</table>";

echo "<br>Halaman : ";

$file="paging_2.php";

$tampil2="select * from anggota where nama like '%$nama%'";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);

$jmlhalaman=ceil($jmldata/$batas);

for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman)
{
	echo " <a href=$file?halaman=$i&nama=$nama&oke=$oke>$i</A> | ";
}
else
{
	echo " <b>$i</b> | ";
}
echo "<p>Ditemukan <b>$jmldata</b> orang yang bernama <b>$nama</b></p>";

}
else{
  echo "Tidak ditemukan data yang bernama <b>$nama</b>";
}
}
?>

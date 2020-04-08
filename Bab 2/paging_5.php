<link href="style.css" rel="stylesheet" type="text/css">
<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

// Langkah 1
$batas=5; 
$halaman=$_GET['halaman'];
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}

// Langkah 2: Sesuaikan perintah SQL
$tampil="select * from anggota limit $posisi,$batas";
$hasil=mysql_query($tampil);
echo "<table>
      <tr><th>No</th><th>Nama</th><th>Alamat</th></tr>";

$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
  $no++;
}
echo "</table>";

// Langkah 3
$tampil2="select * from anggota";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);

$file="paging_5.php";
echo "<form method=get action='$file'>
      Halaman: <select name=halaman onChange='this.form.submit()'>";
      for ($i=1;$i<=$jmlhalaman;$i++){
        $awal = (($i*$batas)-$batas+1);
        $akhir = $batas*$i;
       if ($i==$halaman)
          echo "<option value=$i selected>$awal s/d $akhir</option>";
        else
          echo "<option value=$i> $awal s/d $akhir <br></option>";
       }
      echo "</select></form>";

echo "<p>Total anggota : <b>$jmldata</b> orang</p>";
?>

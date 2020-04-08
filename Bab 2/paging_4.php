<link href="style.css" rel="stylesheet" type="text/css">
<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$batasan=5; // nilai awal utk kelipatan 5
$file="paging_4.php";
$angka=$_GET['angka'];
$batas=$_GET[batas]; // limit yang dinamis
$halaman=$_GET['halaman'];
if(empty($halaman)){
	$posisi=0;
	$halaman=1;
}
else{
	$posisi = ($halaman-1) * $batas;
}

echo "<form method=get action='$file'>
      <input type=hidden name=halaman value=$halaman>
      Tentukan Tampilan Data Per Halaman: 
      <select name=batas onChange='this.form.submit()'>";
      for ($i=1;$i<=10;$i++){
        $angka=$batasan*$i;
       if ($batas==$angka)
          echo "<option value=$angka selected>$angka</option>";
        else
          echo "<option value=$angka>$angka</option>";
      }
      echo "</select></form>";

// Langkah 1
if(empty($batas)){
$batas=$batasan;
}
else{
$batas=$batas;
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

// Langkah 3: Hitung total data dan halaman serta link 1,2,3 ...
echo "<br>Halaman : ";

$tampil2="select * from anggota";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);
$jmlhalaman=ceil($jmldata/$batas);

for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
	echo " <a href=$file?halaman=$i&batas=$batas>$i</A> | ";
}
else{
	echo " <b>$i</b> | ";
}
echo "<p>Total anggota : <b>$jmldata</b> orang</p>";
?>


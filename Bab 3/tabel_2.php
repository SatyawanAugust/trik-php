<style type="text/css">
table {
  border: 1px solid #000000;
}
th {
  background-color: #FF9900;
  color           : #FFFFFF;
}
tr:hover{
  background-color: #CCCCCC;
}
</style>

<?php
$warna1 = "#A6D000";   // baris genap berwarna hijau tua 
$warna2 = "#D5F35B";   // baris ganjil berwarna hijau muda
$warna  = $warna1;     // warna default

mysql_connect("localhost","root","root");
mysql_select_db('pintar');
$sql = mysql_query("select * from anggota");

echo "<table cellpadding=4><tr><th>No</th><th>Nama</th><th>Alamat</th></tr>";

$no=1;
while($data=mysql_fetch_array($sql)){
if($warna == $warna1){
  $warna = $warna2;
} 
else {
  $warna = $warna1;
}
echo "<tr bgcolor=$warna><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
$no++;
}
echo "</table>";
?>

<link href="style2.css" rel="stylesheet" type="text/css">

<?php
mysql_connect("localhost","root","root");
mysql_select_db('pintar');

$sql=mysql_query("select * from anggota");

echo "<table><tr><th>No</th><th>Nama</th><th>Alamat</th></tr>";

$no=1;
while($data=mysql_fetch_array($sql)){
  // Apabila sisa baginya genap, maka warnanya abu-abu (#E1E1E1).
  if(($no % 2)==0){
    $warna="#E1E1E1";
  }
  // Apabila sisa baginya ganjil, maka warnanya kuning (#FFFF00). 
  else{
    $warna="#FFFF00";
  }
echo "<tr bgcolor=$warna><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
$no++;
} 
echo "</table>";
?>

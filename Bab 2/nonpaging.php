<link href="style.css" rel="stylesheet" type="text/css">

<table>
      <tr><th>No</th><th>Nama</th><th>Alamat</th></tr>

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$tampil="select * from anggota";
$hasil=mysql_query($tampil);

$no=1;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
  $no++;
}
echo "</table>";
?>

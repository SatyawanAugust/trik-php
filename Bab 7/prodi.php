<link href="style.css" rel="stylesheet" type="text/css">

<table>
<tr><th>No</th><th>Program Studi</th><th>Tanggal Berdiri</th><th>Aksi</th></tr>

<?php
include "fungsi_indotgl.php";

mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$tampil=mysql_query("select * from prodi");

$no=1;
while ($data=mysql_fetch_array($tampil)){
  //Cara menggunakan fungsi
  $tanggal=tgl_indo($data[tgl_berdiri]);
  echo "<tr><td>$no</td><td>$data[nama]</td>
        <td>$tanggal</td>
        <td><a href=editprodi.php?id=$data[id]>Edit</a></td></tr>";
  $no++;
}
?>
</table>

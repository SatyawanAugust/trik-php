<link href="style.css" rel="stylesheet" type="text/css">

<table>
<tr><th>No</th><th>Fakultas</th><th>Aksi</th></tr>

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$tampil=mysql_query("select * from fakultas");

$no=1;
while ($data=mysql_fetch_array($tampil)){
  echo "<tr><td>$no</td><td>$data[nama_fak]</td>
        <td><a href=editfakultas.php?id=$data[id_fak]>Edit</a></td></tr>";
  $no++;
}
?>

</table>

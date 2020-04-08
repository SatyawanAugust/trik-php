<link href="style.css" rel="stylesheet" type="text/css">

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$tampil="select * from anggota order by id_ang desc limit 10";
$hasil=mysql_query($tampil);

echo "<table>
      <tr><th>No</th><th>Nama</th><th>Alamat</th><th>Aksi</th></tr>";
$no=1;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td>
          <td><a href=del_1.php?id=$data[id_ang]>Hapus</a></td></tr>";
  $no++;
}
echo "</table>";
?>

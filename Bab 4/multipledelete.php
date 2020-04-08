<link href="style.css" rel="stylesheet" type="text/css">

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$tampil="select * from anggota order by id_ang desc limit 10";
$hasil=mysql_query($tampil);

echo "<form action=del_4.php method=POST>";
echo "<table>
      <tr><th>#</th><th>No</th><th>Nama</th><th>Alamat</th></tr>";
$no=1;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td><input type=checkbox name=cek[] value=$data[id_ang]></td>
  <td>$no</td><td>$data[nama]</td><td>$data[alamat]</td>
  </tr>";
  $no++;
}
echo "<tr><td colspan=4 align=center><input type=submit value=Hapus></td></tr></table></form>";
?>

<link href="style.css" rel="stylesheet" type="text/css">

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$tampil="select * from anggota order by id_ang desc limit 10";
$hasil=mysql_query($tampil);

echo "<form action=del_5.php method=POST>";
echo "<table>
      <tr><th>#</th><th>No</th><th>Nama</th><th>Alamat</th></tr>";
$no=0;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td><input type=checkbox name=cek[] value=$data[id_ang] id=id$no></td>";
  
    $no++;

  echo "<td>$no</td><td>$data[nama]</td><td>$data[alamat]</td>
  </tr>";
}
echo "<tr><td colspan=4 align=center>
<input type=radio name=pilih onClick='for (i=0;i<$no;i++){document.getElementById(\"id\"+i).checked=true;}'>Check All 
<input type=radio name=pilih onClick='for (i=0;i<$no;i++){document.getElementById(\"id\"+i).checked=false;}'>Uncheck All 

</td></tr>
<tr><td colspan=4 align=center><input type=submit value=Hapus></td>
</tr></table></form>";
?>

<link href="style.css" rel="stylesheet" type="text/css">

<table><tr><th>Nama File</th><th>Ukuran File</th><th>Aksi</th></tr>

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");
$tampil="SELECT * FROM upload_file ORDER BY id_upload DESC";
$hasil=mysql_query($tampil);

while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$data[nama_file]</td>
        <td>$data[ukuran_file] bytes</td>
        <td><a href='hapus_file.php?id=$data[id_upload]&file=$data[direktori]'>Hapus</a></td></tr>";
}
echo "</table>";
?>


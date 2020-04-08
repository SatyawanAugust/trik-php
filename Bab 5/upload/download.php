<link href="style.css" rel="stylesheet" type="text/css">

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$tampil="SELECT * FROM upload_file ORDER BY id_upload DESC";
$hasil=mysql_query($tampil);

while ($data=mysql_fetch_array($hasil)){
  echo "Nama File   : <b>$data[nama_file]</b> <br>";
  echo "Ukuran File : $data[ukuran_file] bytes <br>";
  echo "Deskripsi   : $data[deskripsi] <br>";
  echo "<a href='$data[direktori]'>Download File</a> <hr>";
}
?>


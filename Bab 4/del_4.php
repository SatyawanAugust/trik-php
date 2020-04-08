<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$cek=$_POST[cek];
$jumlah=count($cek);
for($i=0;$i<$jumlah;$i++){
  mysql_query("DELETE FROM anggota WHERE id_ang='$cek[$i]'");
}
header("location:multipledelete.php");
?>


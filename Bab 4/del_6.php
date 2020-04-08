<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

mysql_query("DELETE FROM anggota WHERE id_ang='$_GET[id]'");
mysql_query("DELETE FROM anak WHERE id_ang='$_GET[id]'");
header("location:nonkonfirmasi2.php");
?>


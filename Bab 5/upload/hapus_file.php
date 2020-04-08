<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

mysql_query("DELETE FROM upload_file WHERE id_upload='$_GET[id]'");
unlink("$_GET[file]");

header("location:tampil_uploadfile.php");
?>


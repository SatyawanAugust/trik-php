<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

echo "<select name=prodi>";
$sql2=mysql_query("SELECT * FROM prodi WHERE id_fak='$_GET[kode]'");
while ($row=mysql_fetch_array($sql2)){
    echo "<option value=$row[id]>$row[nama]</option>";
}
echo "</select>";
?>

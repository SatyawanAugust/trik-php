<link href="style.css" rel="stylesheet" type="text/css">


<form method=get action=simpan.php>
<select name=fakultas>

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$sql1  = mysql_query("select * from fakultas where id_fak='$_GET[id]'");
$data1 = mysql_fetch_array($sql1);

$sql2=mysql_query("select * from fakultas");
while ($data2=mysql_fetch_array($sql2)){
  if ($data1[id_fak]==$data2[id_fak])
    echo "<option value=$data2[id_fak] selected>$data2[nama_fak]</option>";
  else
    echo "<option value=$data2[id_fak]>$data2[nama_fak]</option>";
}
?>

</select></form>

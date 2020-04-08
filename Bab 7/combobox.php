<link href="style.css" rel="stylesheet" type="text/css">

<form method=get action=simpan.php>
<select name=fakultas>
<option value=0 selected>- Pilih Fakultas -</option>

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");
$sql=mysql_query("select * from fakultas");
while ($data=mysql_fetch_array($sql)){
  echo "<option value=$data[id_fak]>$data[nama_fak]</option>";
}
?>

</select></form>

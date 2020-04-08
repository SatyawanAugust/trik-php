<link href="style.css" rel="stylesheet" type="text/css">

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

echo "<form method=get action=$_SERVER[PHP_SELF]>";
echo "Fakultas : <select name='fakultas' onChange='this.form.submit()'>";

echo "<option value=0 selected>- Pilih Fakultas -</option>";

$sql=mysql_query("select * from fakultas");
while ($data=mysql_fetch_array($sql)){
  if ($data[id_fak]==$_GET[fakultas])
     echo "<option value=$data[id_fak] selected>$data[nama_fak]</option>";
  else
     echo "<option value=$data[id_fak]>$data[nama_fak]</option>";
}	
echo "</select></form>";
	
if (isset($_GET[fakultas])){
	echo "Program Studi : <br>";
	$sql2=mysql_query("select * from prodi where id_fak='$_GET[fakultas]'");
	while ($row=mysql_fetch_array($sql2)){
  	echo "$row[nama]<br>";
	}
}
?>

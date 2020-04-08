<link href="style1.css" rel="stylesheet" type="text/css">

<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
<table>
<tr><td>Subjek</td><td> : </td><td><input name="subjek" type="text"></td></tr>
<tr><td valign="top">Pesan</td><td valign="top"> : </td><td><textarea name="pesan" cols="25" rows="5"></textarea></td></tr>
 
<tr><td colspan=3><input type="submit" name="kirimkan" value="Kirim"></td></tr>
</table>
</form>

<?php
if($_POST[kirimkan]){
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$sql=mysql_query("SELECT email FROM user");

echo "Email sudah terkirim ke: <br>"; 
while($data=mysql_fetch_array($sql)){
$kepada = $data[email]; //alamat email user
$judul = $_POST[subjek];
$pesan = $_POST[pesan];
$dari = "From: webmaster@masterweb.com \n"; 

mail($kepada,$judul,$pesan,$dari);
echo "<b>$data[email]</b><br>";
}
}
?>

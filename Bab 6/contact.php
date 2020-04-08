<link href="style1.css" rel="stylesheet" type="text/css">

Kontak kami secara online :
<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
<table>
<tr><td>Nama Anda</td><td> : </td><td><input name="nama" type="text"></td></tr>
<tr><td>Email Anda</td><td> : </td><td><input name="email" type="text"></td></tr>
<tr><td valign="top">Pesan</td><td valign="top"> : </td><td><textarea name="pesan" cols="25" rows="5"></textarea></td></tr>
<tr><td colspan=3><input type="submit" name="kirimkan" value="Kirim"></td></tr>
</table>
</form>

<?php
if($_POST[kirimkan]){
$kepada = "webmaster@localhost"; //alamat email webmaster
$judul  = "Kontak dari website";
$dari   = "From: $_POST[nama] \n";
$dari  .= "Reply-To: $_POST[email] \n";
$pesan  = "$_POST[pesan]";

mail($kepada,$judul,$pesan,$dari);
echo "Pesan Anda telah terkirim";
}
?>

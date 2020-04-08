<link href="style1.css" rel="stylesheet" type="text/css">

Kontak kami secara online :
<form action=email_html.php method=post>
<table>
<tr><td>Nama Anda</td><td> : </td><td><input name="nama" type="text"></td></tr>
<tr><td>Email Anda</td><td> : </td><td><input name="email" type="text"></td></tr>
<tr><td valign="top">Pesan</td><td valign="top"> : </td><td><textarea name="pesan" cols="25" rows="5"></textarea></td></tr>
<tr><td colspan=3><input type="submit" name="kirimkan" value="Kirim"></td></tr>
</table>
</form>

<?php
if($_POST[kirimkan]){
$kepada = "algosigma@gmail.com"; //alamat email webmaster
$judul  = "Kontak dari website";
$pesan  = "$_POST[pesan]";
$dari   = "From: $_POST[nama] \r\n";
$dari  .= "Reply-To: $_POST[email] \r\n";
$dari  .= "Content-type: text/html \r\n";

mail($kepada,$judul,$pesan,$dari);
echo "Pesan Anda telah terkirim";
}
?>

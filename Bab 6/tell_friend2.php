<link href="style1.css" rel="stylesheet" type="text/css">
<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
<table>
<tr><td>Nama Anda</td>    <td> : <input name="nama" type="text"></td></tr>
<tr><td>Email Anda</td>   <td> : <input name="email" type="text"></td></tr><tr><td colspan=2><hr></td></tr>
<tr><td>Email Teman 1</td><td> : <input name="emailteman1" type="text"></td></tr>
<tr><td>Email Teman 2</td><td> : <input name="emailteman2" type="text"></td></tr>
<tr><td>Email Teman 3</td><td> : <input name="emailteman3" type="text"></td></tr>
<tr><td colspan=2><input type="submit" name="beritahu" value="Beritahu Teman"></td></tr>
</table>
</form>

<?
if($_POST[beritahu]){
  // Kirim beberapa email sekaligus pakai tanda pemisah koma
  $kepada = $_POST[emailteman1].",".$_POST[emailteman2].",".$_POST[emailteman3];
  $judul  = "Beritahu Teman Mengenai Website";
  $dari   = "From: $_POST[nama] \n"; 
  $dari  .= "Reply-To: $_POST[email] \n";
  $dari  .= "Content-type: text/html \r\n";
  $pesan  = "Hai fren, <br>";
  $pesan .= "Teman Anda ".$_POST[nama]." mengharapkan agar Anda mengunjungi website <br>";
  $pesan .= "<a href='http://www.lokomedia.com'>Penerbit Lokomedia</a>";

  mail($kepada,$judul,$pesan,$dari);
  echo "Pesan telah terkirim ke email teman Anda";
}
?>

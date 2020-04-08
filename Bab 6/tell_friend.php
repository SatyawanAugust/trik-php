<link href="style1.css" rel="stylesheet" type="text/css">

<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
<table>
<tr><td>Nama Anda</td>       <td> : <input name="nama" type="text"></td></tr>
<tr><td>Email Anda</td>      <td> : <input name="email" type="text"></td></tr><tr><td colspan=2><hr></td></tr>
<tr><td>Nama Teman Anda</td> <td> : <input name="namateman" type="text"></td></tr>
<tr><td>Email Teman Anda</td><td> : <input name="emailteman" type="text"></td></tr>
<tr><td colspan=2><input type="submit" name="beritahu" value="Beritahu Teman"></td></tr>
</table>
</form>

<?PHP
if($_POST[beritahu]){
  $kepada = $_POST[emailteman]; //alamat email user
  $judul  = "Beritahu Teman Mengenai Website";
  $dari   = "From: $_POST[nama] \n"; 
  $dari  .= "Content-type: text/html \r\n";
  $pesan  = "Hai ".$_POST[namateman].", <br>";
  $pesan .= "Teman Anda ".$_POST[nama]." mengharapkan agar Anda mengunjungi website <br>";
  $pesan .= "<a href='http://www.lokomedia.com'>Penerbit Lokomedia</a>";

  mail($kepada,$judul,$pesan,$dari);
  echo "Pesan telah terkirim ke email teman Anda";
}
?>

<link href="style1.css" rel="stylesheet" type="text/css">

<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
<table>
<tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
<tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
<tr><td>Email </td>  <td> : <input name="email" type="text"></td></tr>
<tr><td colspan=2><input type="submit" name="daftarkan" value="Daftar"></td></tr>
</table>
</form>

<?
if($_POST[daftarkan]){
  // membuat kode acak yang unik
  $kode=md5(uniqid(rand()));

  mysql_connect("localhost","root","root");
  mysql_select_db("pintar");

  mysql_query("INSERT INTO user_sementara VALUES('$kode','$_POST[username]','$_POST[password]','$_POST[email]')");

  $kepada = $_POST[email]; 
  $judul  = "Aktivasi Account Anda";
  $dari   = "From: webmaster@lokomedia.com \n"; 
  $dari  .= "Content-type: text/html \r\n";
  $pesan  = "Klik link di bawah ini untuk mengaktifkan account Anda : <br>";
  $pesan .= "<a href='http://localhost/confirm.php?kode=$kode'>http://localhost/confirm.php?kode=$kode</a>";

  mail($kepada,$judul,$pesan,$dari);
  echo "Aktivasi account telah terkirim ke email Anda";
}
?>

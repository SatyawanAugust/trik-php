<?php
include "../config/koneksi.php";

$pass   = md5($_POST[password]);
$login  = mysql_query("SELECT * FROM user WHERE id_user='$_POST[username]' AND password='$pass'");
$ketemu = mysql_num_rows($login);
$r      = mysql_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  session_register("namauser");
  session_register("passuser");

  $_SESSION[namauser]=$r[id_user];
  $_SESSION[passuser]=$r[password];
  header('location:form_berita.php');
}
else{
  echo "<center>Login gagal! username & password tidak benar<br>";
  echo "<a href=index.php><b>ULANGI LAGI</b></a></center>";
}
?>

<?php
if ($_POST[username]=='admin' and $_POST[password]=='rahasia'){
 $admin=true;
} 
 if ($admin){
  echo "<table><tr><td>Selamat Datang di Halaman Admin</td></tr></table>";
 }
 else{
  echo "<table><tr><td>Login Gagal, Silahkan Ulangi Lagi</td></tr></table>";    
 }
?>

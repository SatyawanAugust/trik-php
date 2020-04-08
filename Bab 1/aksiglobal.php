<?php
if ($username=='admin' and $password=='rahasia'){
 $admin=true;
} 
 if ($admin){
  echo "<table><tr><td>Selamat Datang di Halaman Admin</td></tr></table>";
 }
 else{
  echo "Login Gagal, Silahkan Ulangi Lagi";    
 }
?>

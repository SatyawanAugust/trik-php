<?php
$kepada = "webmaster@localhost";
$subjek = "Tes Email";
$dari   = "from: redaksi@lokomedia.com";
$pesan  = "Tes kirim email ke server email di komputer lokal";

$kirim_email = mail($kepada,$subjek,$pesan,$dari);

if($kirim_email){
  echo "Email berhasil terkirim.";
}
else{
  echo "Email tidak terkirim.";
}
?>


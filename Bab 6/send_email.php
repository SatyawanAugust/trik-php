<?php
$kepada = "webmaster@localhost";
$subject = "Tes Email";
$dari = "from: redaksi@lokomedia.com";
$pesan = "Tes kirim email ke server email di komputer lokal";

$kirim_email = mail($to,$subject,$message,$mail_from);

if($sentmail){
  echo "Email berhasil terkirim.";
}
else{
  echo "Email tidak terkirim.";
}
?>


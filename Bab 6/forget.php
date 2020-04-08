<link href="style.css" rel="stylesheet" type="text/css">

<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
<table>
<tr><td>Email Anda : <input name="email" type="text"> 
<input type="submit" name="proses" value="Proses"></td></tr>
</table>
</form>

<?php
if($_POST[proses]){
  mysql_connect("localhost","root","root");
  mysql_select_db("pintar");

  $sql    = "SELECT password FROM user WHERE email='$_POST[email]'";
  $hasil  = mysql_query($sql);
  $jumlah = mysql_num_rows($hasil);

  if ($jumlah==1){
    $data=mysql_fetch_array($hasil);
    $kepada = "$_POST[email]"; //alamat email user
    $judul = "Password Anda";
    $dari = "From: lukman@solusi-media.com \r\n"; 
    $dari .= "Content-type: text/html \r\n";
    $pesan = "Password Anda untuk login ke website kami <br>";
    $pesan .= "Password Anda : <b>$data[password]</b>";

    mail($kepada,$judul,$pesan,$dari);
    echo "Password telah terkirim ke email Anda";
  }
else{
    echo "Password tidak bisa dikirimkan ke email Anda";
  }
}
?>

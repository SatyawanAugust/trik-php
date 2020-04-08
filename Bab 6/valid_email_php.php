<link href="style1.css" rel="stylesheet" type="text/css">

<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
E-mail : <input name="email" type="text">
<input type="submit" name="prosesi" value="Proses">
</form>

<?php
if($_POST[prosesi]){
  $karakter1 = strstr($_POST[email],"@"); 
  $karakter2 = strstr($_POST[email],"."); 

  if (strlen($karakter1)==0 OR strlen($karakter2)==0){
 	echo "Alamat email salah";
 }
 else{
 	echo "Alamat email benar";
 }
}
?>

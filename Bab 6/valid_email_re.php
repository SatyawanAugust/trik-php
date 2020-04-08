<link href="style1.css" rel="stylesheet" type="text/css">

<form method=post action=<?php $_SERVER['PHP_SELF']; ?>>
E-mail : <input name="email" type="text"> 
<input type="submit" name="prosesi" value="Proses">
</form>

<?php
if($_POST[prosesi]){
 $pola_email = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$";
 if (eregi($pola_email,$_POST[email])){
 	echo "Alamat email benar";
 }
 else{
 	echo "Alamat email salah";
 }
}
?>

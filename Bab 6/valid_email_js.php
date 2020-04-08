<SCRIPT LANGUAGE="JavaScript">
function valid(){
var cek_email=document.formku.email.value

if ((cek_email=="") || (cek_email.indexOf('@',0) == -1) || (cek_email.indexOf('.',0) == -1)){
alert("Alamat email Anda belum valid")
formku.email.focus()
return false
}
return true
}
</SCRIPT>

<link href="style1.css" rel="stylesheet" type="text/css">

<form method="post" name="formku" onSubmit="return valid()" action=<?php $_SERVER['PHP_SELF']; ?>>
E-mail : <input name="email" type="text">
<input type="submit" name="prosesi" value="Proses">
</form>

<?php
if($_POST[prosesi]){
 	echo "Alamat email benar";
}
?>


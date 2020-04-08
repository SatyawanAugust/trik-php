<?php
echo "<form method=GET action=offglobal.php>
Isikan Nama Anda : <input type=text name=nama> 
<input type=submit name=oke value=Proses>
</form>";

if ($_GET[oke]=='Proses'){
  echo "Nama Anda adalah: <b>$_GET[nama]</b>";
}
?>

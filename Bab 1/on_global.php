<?php
echo "<form method=GET action=on_global.php>
Isikan Nama Anda : <input type=text name='nama'> 
<input type=submit name=oke value=Kirim>
</form>";

if ($oke=='Kirim'){
  echo "Nama Anda adalah: <b>$_GET[nama]</b>";
}
?>

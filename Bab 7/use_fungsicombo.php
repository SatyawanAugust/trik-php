<link href="style.css" rel="stylesheet" type="text/css">

<form method=get action=simpan.php>

<?php
include "fungsi_combobox.php";

$tgl_skrg = date("d");
$bln_skrg = date("m");
$thn_skrg = date("Y");

echo "Tanggal sekarang : ";

combotgl(1,31,'tanggal',$tgl_skrg);
combobln(1,12,'bulan',$bln_skrg);
combotgl(2000,$thn_skrg,'tahun',$thn_skrg);
?>

</form>

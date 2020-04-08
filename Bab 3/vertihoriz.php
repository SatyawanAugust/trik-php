<link href="style2.css" rel="stylesheet" type="text/css">

<?php
$kolom = 3;    // Tentukan banyaknya kolom
$no    = 1;    // Untuk penomoran

mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$sql       = mysql_query("SELECT nama FROM anggota");
$jml_baris = mysql_num_rows($sql);

$sisa_bagi = $jml_baris % $kolom; 
if ($sisa_bagi == 0) 
	$no_kolom = $jml_baris / $kolom;
else 
	$no_kolom = ceil($jml_baris/$kolom)-1;

echo "<table><tr>";
  $ulang1 = 0;
  for($i = 0; $i < $kolom; $i++){ 
    if($sisa_bagi > 0){
  	   $jumbaris = $no_kolom + 1;
	   $ulang2   = $i * $jumbaris;
	   $ulang1   = $jumbaris * ($i + 1);
	} 
     else{
	   $ulang2 = $ulang1;
 	   $ulang1 = ($no_kolom*($i+1))+($jml_baris % $kolom);
     }
     $sisa_bagi--; // decrease sisa bagi

	// Tampilkan per kolom
	echo "<td valign=top>";
	for($j = $ulang2; $j < $ulang1; $j++){
	   $data = mysql_fetch_array($sql);
     $no  = $j+1; 
     echo "$no. $data[nama] <br>";
  }   
	echo "</td>";
 }
echo "</tr></table>";
?> 





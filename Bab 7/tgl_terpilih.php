<link href="style.css" rel="stylesheet" type="text/css">

<form method=get action=tanggal.php>

<?php
$nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
                    "Juni", "Juli", "Agustus", "September", 
                    "Oktober", "November", "Desember");

echo "Tanggal saat ini : ";

$tanggal=date("d");
echo "<select name=tgl>";
for ($i=1; $i<=31; $i++){
  if ($tanggal==$i)
    echo "<option value=$i selected>$tanggal</option>";
  else
    echo "<option value=$i>$i</option>";
}
echo "</select>";  
      
$bulan=date("m");
echo " <select name=bln>";
for ($i=1; $i<=$bulan; $i++){
  if ($bulan==$i)
    echo "<option value=$i selected>$nama_bln[$i]</option>";
  else
    echo "<option value=$i>$nama_bln[$i]</option>";
}   
echo "</select>";
      
$sekarang=date("Y");
echo " <select name=tahun>";
for ($i=2000;$i<=$sekarang;$i++){
  if ($sekarang==$i)
     echo "<option value=$i selected>$sekarang</option>";
  else
     echo "<option value=$i>$i</option>";
}   
echo "</select></form>";
?>

</form>

<link href="style.css" rel="stylesheet" type="text/css">

<form method=get action=updateprodi.php>
<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$nama_bln = array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
                    "Juni", "Juli", "Agustus", "September", 
                    "Oktober", "November", "Desember");

$sql  = mysql_query("select * from prodi where id='$_GET[id]'");
$data = mysql_fetch_array($sql);

echo "Program Studi : <select name=prodi>";    
$sql2=mysql_query("select * from prodi");
while ($data2=mysql_fetch_array($sql2)){
  if ($data[id]==$data2[id])
    echo "<option value=$data2[id] selected>$data2[nama]</option>";
  else
    echo "<option value=$data2[id]>$data2[nama]</option>";
}
echo "</select><br><br>";

echo "Tanggal Berdiri: <select name=tgl>";    
$tgl=substr("$data[tgl_berdiri]",8,2);
for ($i=1; $i<=31; $i++){
  if ($tgl==$i)
    echo "<option value=$i selected>$i</option>";
  else
    echo "<option value=$i>$i</option>";
}
echo "</select> ";

echo "<select name=bln>";    
$bln=substr("$data[tgl_berdiri]",5,2);
for ($bulan=1; $bulan<=12; $bulan++){
  if ($bln==$bulan)
    echo "<option value=$bulan selected>$nama_bln[$bulan]</option>";
  else
    echo "<option value=$bulan>$nama_bln[$bulan]</option>";
}
echo "</select> ";  
  
echo "<select name=thn>";    
$thn      = substr("$data[tgl_berdiri]",0,4);
$sekarang = date("Y");
for ($tahun=2000; $tahun<=$sekarang; $tahun++){
  if ($thn==$tahun)
    echo "<option value=$tahun selected>$tahun</option>";
  else
    echo "<option value=$tahun>$tahun</option>";
}
echo "</select>";  
?>

</form>

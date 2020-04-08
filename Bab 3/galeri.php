<link href="style.css" rel="stylesheet" type="text/css">

<?php
$kolom = 3; // Tentukan banyaknya kolom

mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$sql = mysql_query("select * from galeri");
echo "<table><tr>";
$i = 0;
while ($data = mysql_fetch_array($sql)){
  // Tampilkan data ke kolom kanan selama $i >= kolom
  if ($i >= $kolom){
    echo "</tr><tr>";
      $i = 0;
  }
  $i++;
  echo "<td align=center><br>
  <a href='#'><img src='$data[gambar]' border=0><br>
    $data[judul]</a><br><br></td>";
}
echo "</tr></table>";
?>

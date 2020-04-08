<link href="style2.css" rel="stylesheet" type="text/css">

<?php
$kolom = 3;    // Tentukan banyaknya kolom
$no    = 1;    // Untuk penomoran

mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$sql       = mysql_query("SELECT nama FROM anggota");
$jml_baris = mysql_num_rows($sql);

echo "<table>";
for($i = 0; $i < $jml_baris; $i++) {
    $data = mysql_fetch_array($sql);

	// % adalah operator modulus (sisa bagi) 	
    if($i % $kolom == 0) {
        echo "<tr>";
    }
    echo "<td>$no</td>";
    echo "<td>$data[nama]</td>";

    if(($i % $kolom) == ($kolom - 1) OR ($i + 1) == $jml_baris) {
       echo "</tr> ";
    }
    $no++;
}
echo "</table> ";
?> 

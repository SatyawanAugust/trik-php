<link href="style.css" rel="stylesheet" type="text/css">

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];

echo "File-file yang berhasil diupload: <BR><BR>";

//Hitung jumlah file yang diupload
$jml_file=count($nama_file);
$i=0;

//Lakukan perulangan selama $i <= jumlah file yang diupload
while ($i < $jml_file)
{
if ($nama_file[$i] != ""){
  $direktori = "files/$nama_file[$i]";
  move_uploaded_file($lokasi_file[$i],"$direktori");
  echo "<B>$nama_file[$i]</B><BR>";

  // Masukkan informasi file ke database
  mysql_connect("localhost","root","root");
  mysql_select_db("pintar");
  $input="INSERT INTO upload_file(nama_file,ukuran_file,deskripsi,direktori)
          VALUES('$nama_file[$i]','$ukuran_file[$i]','$_POST[deskripsi]','$direktori')";
  mysql_query($input);
}
$i++;
}
?>


<link href="style.css" rel="stylesheet" type="text/css">

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];

$direktori = "files/$nama_file";
if (move_uploaded_file($lokasi_file,"$direktori")){
  echo "Nama File   : <b>$nama_file</b> berhasil di upload <br>";
  echo "Ukuran File : <b>$ukuran_file</b> bytes";
  
  // Masukkan informasi file ke database
  mysql_connect("localhost","root","root");
  mysql_select_db("pintar");
  $input="INSERT INTO upload_file(nama_file,ukuran_file,deskripsi,direktori)
          VALUES('$nama_file','$ukuran_file','$_POST[deskripsi]','$direktori')";
  mysql_query($input);
}
else{
  echo "File gagal diupload";
}

?>


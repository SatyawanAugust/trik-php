<link href="style.css" rel="stylesheet" type="text/css">

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$ukuran_file = $_FILES['fupload']['size'];
$nama_file = $_FILES['fupload']['name'];

// Buat nama file jadi unik
$acak           = rand(0000,9999);
$nama_file_unik = $acak.$nama_file; 

$direktori      = "files/$nama_file_unik";
if (move_uploaded_file($lokasi_file,"$direktori")){
  echo "Nama File   : <b>$nama_file_unik</b> berhasil di upload <br>";
  echo "Ukuran File : <b>$ukuran_file</b> bytes";
  
  // Masukkan informasi file ke database
  mysql_connect("localhost","root","root");
  mysql_select_db("pintar");
  $input="INSERT INTO upload_file(nama_file,ukuran_file,deskripsi,direktori)
          VALUES('$nama_file_unik','$ukuran_file','$_POST[deskripsi]','$direktori')";
  mysql_query($input);
}
else{
  echo "File gagal diupload";
}

?>


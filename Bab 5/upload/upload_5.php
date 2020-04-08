<link href="style.css" rel="stylesheet" type="text/css">

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];

$direktori_file = "files/$nama_file";

// Jika nama file sudah ada di server 
if (file_exists($direktori_file)){
  echo "Upload Gagal !!! <br>
        Nama file <b>$nama_file</b> sudah ada<br>
        Ganti dulu nama filenya agar bisa di upload";
}
else{
  move_uploaded_file($lokasi_file,"$direktori_file");
  echo "Nama File   : <b>$nama_file</b> berhasil di upload <br>";
  echo "Ukuran File : <b>$ukuran_file</b> bytes";
  
  // Masukkan informasi file ke database
  mysql_connect("localhost","root","root");
  mysql_select_db("pintar");
  $input="INSERT INTO upload_file(nama_file,ukuran_file,deskripsi,direktori)
          VALUES('$nama_file','$ukuran_file','$deskripsi','$direktori')";
  mysql_query($input);
}
?>


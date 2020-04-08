<link href="style.css" rel="stylesheet" type="text/css">

<?php
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];

// Jika ukuran file > ukuran maksimal file 
if ($ukuran_file > $_POST[ukuran_maks_file]){
  echo "Upload Gagal !!! <br>
        Ukuran file <b>$nama_file</b> : $ukuran_file bytes<br>
        Ukuran file tidak boleh > 1000000 bytes (1 Mb) <br>";
}
else{
  $direktori_file = "files/$nama_file";

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


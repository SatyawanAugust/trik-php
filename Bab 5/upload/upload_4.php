<link href="style.css" rel="stylesheet" type="text/css">

<?php
$tipe_file   = $_FILES['fupload']['type'];
$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file   = $_FILES['fupload']['name'];
$ukuran_file = $_FILES['fupload']['size'];

// Jika tipe file bukan gif, jpg (jpeg) dan png 
if ($tipe_file != "image/gif" AND 
    $tipe_file != "image/jpeg" AND
    $tipe_file != "image/pjpeg" AND 
    $tipe_file != "image/png"){
  echo "Upload Gagal !!! <br>
        Tipe file <b>$nama_file</b> : $tipe_file <br>
        Tipe file yang boleh di upload: gif, jpg dan png.";
}
else{
  // Tentukan maksimal lebar dan panjang
  $lebar_maks   = 300;
  $panjang_maks = 200;
  // Dapatkan ukuran gambar yg diupload pengguna
  $ukuran_gbr   = GetImageSize($lokasi_file);
  // Jika ukuran gambar melebihi lebar dan panjang yg telah ditentukan
  if (($ukuran_gbr[0] > $lebar_maks) OR ($ukuran_gbr[1] > $panjang_maks)){
    echo "Upload Gagal !!! <br>
          Ukuran gambar yang Anda upload : <b>$ukuran_gbr[0] x $ukuran_gbr[1]</b> <br>
          Ukuran gambar tidak boleh lebih dari $lebar_maks x $panjang_maks.";
  }
  else{
  $direktori = "files/$nama_file";
  $url = "http://localhost/upload/files";

  move_uploaded_file($lokasi_file,"$direktori");
  echo "Nama File : <b>$nama_file</b> berhasil di upload <br>";
  echo "Tipe Filenya : <b>$tipe_file</b><br><br>";
  echo "<img src=$url/$nama_file>";
  
  // Masukkan informasi file ke database
  mysql_connect("localhost","root","root");
  mysql_select_db("pintar");
  $input="INSERT INTO upload_file(nama_file,ukuran_file,deskripsi,direktori)
          VALUES('$nama_file','$ukuran_file','$_POST[deskripsi]','$direktori')";
  mysql_query($input);
  }
}
?>


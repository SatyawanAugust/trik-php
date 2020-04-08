<link href="style1.css" rel="stylesheet" type="text/css">

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$sql    = "SELECT * FROM user_sementara WHERE kode_verifikasi='$_GET[kode]'";
$hasil  = mysql_query($sql);
$jumlah = mysql_num_rows($hasil);

// Apabila kode verifikasi ditemukan
if ($jumlah==1){
  $data=mysql_fetch_array($hasil);
  // Masukkan data ke tabel user_sah
  $sql2="INSERT INTO user_sah(username, password, email) 
        VALUES('$data[username]', '$data[password]', '$data[email]')";
  $hasil2=mysql_query($sql2);

  // Apabila data sudah sukses diinputkan ke tabel user_sah
  if ($hasil2){
    echo "Account Anda telah diaktifkan";
    // Hapus data pendaftar tersebut di tabel user_sementara
    mysql_query("DELETE FROM user_sementara WHERE kode_verifikasi='$_GET[kode]'");
  }
}
else {
  echo "Kode verifikasi tidak ditemukan";
}

?>

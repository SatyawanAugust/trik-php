<?php
session_start();
include "../config/koneksi.php";
include "../config/library.php";

$module=$_GET[module];
$act=$_GET[act];

// Menghapus data
if (isset($module) AND $act=='hapus'){
  mysql_query("DELETE FROM ".$module." WHERE id_".$module."='$_GET[id]'");
  header('location:media.php?module='.$module);
}

// Input user
elseif ($module=='user' AND $act=='input'){
  $pass=md5($_POST[password]);
  mysql_query("INSERT INTO user(id_user,
                                password,
                                nama_lengkap,
                                email) 
	                     VALUES('$_POST[id_user]',
                              '$pass',
                              '$_POST[nama_lengkap]',
                              '$_POST[email]')");
  header('location:media.php?module='.$module);
}


// Update user
elseif ($module=='user' AND $act=='update'){
  // Apabila password tidak diubah
  if (empty($_POST[password])) {
    mysql_query("UPDATE user SET id_user='$_POST[id_user]',
                                 nama_lengkap='$_POST[nama_lengkap]',
                                 email='$_POST[email]'  
                 WHERE id_user='$_POST[id]'");
  }
  // Apabila password diubah
  else{
    $pass=md5($_POST[password]);
    mysql_query("UPDATE user SET id_user='$_POST[id_user]',
                                 password='$pass',
                                 nama_lengkap='$_POST[nama_lengkap]',
                                 email='$_POST[email]'  
                WHERE id_user='$_POST[id]'");
  }
  header('location:media.php?module='.$module);
}

// Input berita
elseif ($module=='berita' AND $act=='input'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){  
    move_uploaded_file($lokasi_file,"foto_berita/$nama_file");
    mysql_query("INSERT INTO berita(judul,
                                    id_kategori,
                                    isi_berita,
                                    id_user,
                                    jam,
                                    tanggal,
                                    hari,
                                    gambar) 
                           VALUES('$_POST[judul]',
                                  '$_POST[kategori]',
                                  '$_POST[isi_berita]',
                                  '$_SESSION[namauser]',
                                  '$jam_sekarang',
                                  '$tgl_sekarang',
                                  '$hari_ini',
                                  '$nama_file')");
  }
  // Apabila tidak ada gambar yang di upload
  else{
  mysql_query("INSERT INTO berita(judul,
                                  id_kategori,
                                  isi_berita,
                                  id_user,
                                  jam,
                                  tanggal,hari) 
                          VALUES('$_POST[judul]',
                                 '$_POST[kategori]',
                                 '$_POST[isi_berita]',
                                 '$_SESSION[namauser]',
                                 '$jam_sekarang',
                                 '$tgl_sekarang',
                                 '$hari_ini')");
  }
  header('location:media.php?module='.$module);
}

// Update berita
elseif ($module=='berita' AND $act=='update'){
  $lokasi_file = $_FILES['fupload']['tmp_name'];
  $nama_file   = $_FILES['fupload']['name'];

  // Apabila gambar tidak diganti
  if (empty($lokasi_file)) {
    mysql_query("UPDATE berita SET judul   = '$_POST[judul]',
                               id_kategori = '$_POST[kategori]',
                               isi_berita  = '$_POST[isi_berita]'  
                           WHERE id_berita = '$_POST[id]'");
  }
  else{
    move_uploaded_file($lokasi_file,"foto_berita/$nama_file");
    mysql_query("UPDATE berita SET judul   = '$_POST[judul]',
                               id_kategori = '$_POST[kategori]',
                               isi_berita  = '$_POST[isi_berita]'  
                               gambar      = '$nama_file'   
                           WHERE id_berita = '$_POST[id]'");
  }
  header('location:media.php?module='.$module);
}




?>

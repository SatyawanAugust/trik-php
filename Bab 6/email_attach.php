<link href="style1.css" rel="stylesheet" type="text/css">

<form method="post" enctype="multipart/form-data" action=<?php $_SERVER['PHP_SELF']; ?>>
<table>
<tr><td>Kepada</td> <td> : </td><td><input name="kepada" type="text"></td></tr>
<tr><td>Judul</td>  <td> : </td><td><input name="judul" type="text"></td></tr>
<tr><td valign="top">Pesan</td><td valign="top"> : </td><td><textarea name="pesan" cols="25" rows="5"></textarea></td></tr>
<tr><td>Attach File</td><td> : </td><td><input name="attach" type="file"></td></tr>
<tr><td colspan=3><input type="submit" name="kirimkan" value="Kirim"></td></tr>
</table>
</form>

<?php
if($_POST[kirimkan]){
  $kepada  = $_POST['kepada'];
  $judul   = $_POST['judul'];
  $pesan   = $_POST['pesan'];

  $attach      = $_FILES['attach']['tmp_name'];
  $attach_type = $_FILES['attach']['type'];
  $attach_name = $_FILES['attach']['name'];

  $hdr = "From: webmaster@lokomedia.com";
  // Apabila ada file yang di attach
  if (is_uploaded_file($attach)) {
    // Baca file yang akan di attach/kirim ('rb' = read binary)
    $file = fopen($attach,'rb');
    $data = fread($file,filesize($attach));
    fclose($file);

    // Generate string untuk batas (boundary)
    $semi_rand     = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
  
    // Tambahkan header untuk file yang akan dikirim
    $hdr .= "\nMIME-Version: 1.0\n" .
              "Content-Type: multipart/mixed;\n" .
              " boundary=\"{$mime_boundary}\"";

    // Tambahkan pesan 
    $pesan = "Ini adalah pesan berbentuk multi-part dalam format MIME format.\n\n" .
             "--{$mime_boundary}\n" .
             "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
             "Content-Transfer-Encoding: 7bit\n\n" .
             $pesan . "\n\n";

    // Untuk transisi data gunakan base64_encode();
    $data = chunk_split(base64_encode($data));

    // Tambahkan pesan pada file yang dikirim.
    $pesan .= "--{$mime_boundary}\n" .
              "Content-Type: {$attach_type};\n" .
              " name=\"{$attach_name}\"\n" .
              "Content-Transfer-Encoding: base64\n\n" .
              $data . "\n\n" .
              "--{$mime_boundary}--\n";
  }
  mail($kepada,$judul,$pesan,$hdr);     
  echo "Email telah terkirim ...";
}
?>

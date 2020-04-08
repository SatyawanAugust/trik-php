<link href="style.css" rel="stylesheet" type="text/css">

<form enctype="multipart/form-data" method="post" action="upload_2.php">

<? // Menentukan ukuran maksimal file yang boleh di upload ?>
<input type="hidden" name="ukuran_maks_file" value="1000000">

File yang diupload : <input type="file" name="fupload"><br>
Deskripsi File     : <br><textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>

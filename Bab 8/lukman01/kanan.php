<table width="100%" cellspacing=5>
<?php
include "config/koneksi.php";
include "config/fungsi_indotgl.php";

// Bagian Home
if ($_GET[module]=='home'){
  echo "<tr><td align=center><img src=images/welcome.jpg><br><br></td></tr>";
  
  // Tampilkan 3 berita terbaru
  echo "<tr><td class=judul_head>&#187; Berita Terkini</td></tr>";
 	$terkini= mysql_query("SELECT * FROM berita,user 
                          WHERE user.id_user=berita.id_user 
                          ORDER BY id_berita DESC LIMIT 3");		 
	while($t=mysql_fetch_array($terkini)){
		$tgl = tgl_indo($t[tanggal]);
		echo "<tr><td class=isi_kecil>$t[hari], $tgl</td></tr>";
		echo "<tr><td class=judul><a href=?module=detailberita&id=$t[id_berita]>$t[judul]</a></td></tr>";
		echo "<tr><td class=isi_kecil>Ditulis Oleh : $t[nama_lengkap]</td></tr>";
    echo "<tr><td class=isi>";
 		if ($t[gambar]!=''){
			echo "<img src='admin/foto_berita/$t[gambar]' width=150 height=120 hspace=10 border=0 align=left>";
		}
    $kalimat=strtok(nl2br($t[isi_berita])," ");
    for ($i=1;$i<=50;$i++){
      echo ($kalimat);
      echo (" "); // Spasi antar kalimat
      $kalimat=strtok(" "); // Potong per kalimat
    } 
    echo " ... <a href=?module=detailberita&id=$t[id_berita]>Selengkapnya</a>
          <br><br><hr color=white></td></tr>";
			}
  
  // Tampilkan 5 berita sebelumnya
  echo "<tr><td><img src=images/berita_sebelumnya.jpg></td></tr>";
  $sebelum=mysql_query("SELECT * FROM berita 
                        ORDER BY id_berita DESC LIMIT 3,5");		 
	while($s=mysql_fetch_array($sebelum)){
	   echo "<tr><td class=isi>&bull; &nbsp; &nbsp; 
          <a href=?module=detailberita&id=$s[id_berita]>$s[judul]</a></td></tr>";
	}
  echo "<tr><td align=right><a href=?module=berita>
        <img src=images/arsip_berita.jpg border=0></a></td></tr>";
}


// Detail Berita
elseif ($_GET[module]=='detailberita'){
	$detail=mysql_query("SELECT * FROM berita,user 
                      WHERE user.id_user=berita.id_user 
                      AND id_berita='$_GET[id]'");
	$d   = mysql_fetch_array($detail);
	$tgl = tgl_indo($d[tanggal]);
	echo "<tr><td class=isi_kecil>$d[hari], $tgl</td></tr>";
	echo "<tr><td class=judul>$d[judul]</td></tr>";
	echo "<tr><td class=isi_kecil>Ditulis Oleh : $d[nama_lengkap]</td></tr>";
  echo "<tr><td class=isi>";
 	if ($d[gambar]!=''){
		echo "<img src='admin/foto_berita/$d[gambar]' hspace=10 border=0 align=left>";
	}
 	$isi_berita=nl2br($d[isi_berita]);
	echo "$isi_berita</td></tr>";	 		  
	echo "<tr><td class=kembali><br>
        [ <a href=javascript:history.go(-1)>Kembali</a> ]</td></tr>";	 		  

  // Apabila berita dibuka, maka tambahkan counternya
  mysql_query("UPDATE berita SET counter=$d[counter]+1 
              WHERE id_berita='$_GET[id]'");
}
?>
</table>

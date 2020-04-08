<link href="style.css" rel="stylesheet" type="text/css">
<table><tr><th>No</th><th>Nama</th><th>Alamat</th></tr>
<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$batas=5;
$halaman=$_GET['halaman'];
if(empty($halaman))
{
	$posisi=0;
	$halaman=1;
}
else
{
	$posisi = ($halaman-1) * $batas;
}

$tampil="select * from anggota limit $posisi,$batas";
$hasil=mysql_query($tampil);

$no=$posisi+1;
while ($data=mysql_fetch_array($hasil)){
  echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td></tr>";
  $no++;
}
echo "</table><br>";

$file="paging_6.php";

$tampil2="select * from anggota";
$hasil2=mysql_query($tampil2);
$jmldata=mysql_num_rows($hasil2);

$jmlhalaman=ceil($jmldata/$batas);


//link ke halaman sebelumnya (previous)
if($halaman > 1)
{
	$previous=$halaman-1;
	echo "<A HREF=$file?halaman=1><< First</A> | 
        <A HREF=$file?halaman=$previous>< Previous</A> | ";
}
else
{ 
	echo "<< First | < Previous | ";
}

$angka=($halaman > 3 ? " ... " : " ");
for($i=$halaman-2;$i<$halaman;$i++)
{
  if ($i < 1) 
      continue;
  $angka .= "<a href=$file?halaman=$i>$i</A> ";
}

$angka .= " <b>$halaman</b> ";
for($i=$halaman+1;$i<($halaman+3);$i++)
{
  if ($i > $jmlhalaman) 
      break;
  $angka .= "<a href=$file?halaman=$i>$i</A> ";
}

$angka .= ($halaman+2<$jmlhalaman ? " ...  
          <a href=$file?halaman=$jmlhalaman>$jmlhalaman</A> " : " ");

echo "$angka";

//link kehalaman berikutnya (Next)
if($halaman < $jmlhalaman)
{
	$next=$halaman+1;
	echo " | <A HREF=$file?halaman=$next>Next ></A> | 
  <A HREF=$file?halaman=$jmlhalaman>Last >></A> ";
}
else
{ 
	echo " | Next > | Last >>";
}
echo "<p>Total anggota : <b>$jmldata</b> orang</p>";

?>

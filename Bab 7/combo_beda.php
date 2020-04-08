<script language="JavaScript1.2">

function validate_pil(data) {
		var pil1=data.pil1;
		var pil2=data.pil2;
		var pil3=data.pil3;
		if (pil1.value==pil2.value) {
		   if (pil1.value!=0) {
		   alert ("Pilihan 1 tidak boleh sama dengan Pilihan 2");
		   pil2.value=0;   }
		   }
		if (pil1.value==pil3.value) {
		   if (pil1.value!=0) {
		   alert ("Pilihan 1 tidak boleh sama dengan Pilihan 3");
		   pil3.value=0;   }
		   }
		if (pil2.value==pil3.value) {
		   if (pil2.value!=0) {
		   alert ("Pilihan 2 tidak boleh sama dengan Pilihan 3");
		   pil3.value=0;   }
		   }
}
</script>

<link href="style.css" rel="stylesheet" type="text/css">

<form method=get action=update.php>

<?php
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

function combo($var, $data) {
	echo "<select name='$var' onChange='validate_pil(this.form)'>";
	echo "<option value=0 selected>- Pilih Prodi -</option>";
	$sql=mysql_query("select * from prodi");
	while ($data=mysql_fetch_array($sql)){
		echo "<option value=$data[id]>$data[nama]</option>";
	}	
	echo "</select>";
}

echo "Pilihan 1 : ";
combo("pil1",$data1);

echo "<br><br>Pilihan 2 : ";
combo("pil2",$data2);

echo "<br><br>Pilihan 3 : ";
combo("pil3",$data3);

?>
</form>

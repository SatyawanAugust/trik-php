<script type='text/javascript'>
var xmlhttp = createRequestObject();

function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}

function dinamis(combobox)
{
    var kode = combobox.value;
    if (!kode) return;
    xmlhttp.open('get', 'getdata.php?kode='+kode, true);
    xmlhttp.onreadystatechange = function() {
        if ((xmlhttp.readyState == 4) && (xmlhttp.status == 200))
        {
             document.getElementById("tampilprodi").innerHTML = xmlhttp.responseText;
        }
        return false;
    }
    xmlhttp.send(null);
}
</script>

<link href="style.css" rel="stylesheet" type="text/css">

<table>
<form method=post action=simpan.php>
<tr><td>Fakultas </td><td> 
<select name='fakultas' onChange='javascript:dinamis(this)'>
<option value=0>- Pilih Fakultas -</option>

<?php 
mysql_connect("localhost","root","root");
mysql_select_db("pintar");

$sql = mysql_query("SELECT * FROM fakultas");
while ($data=mysql_fetch_array($sql))
{
   	echo "<option value=$data[id_fak]>$data[nama_fak]</option>";
}
?>

</select></td></tr>
<tr><td>Program Studi</td><td><div id='tampilprodi'></div></td></tr>
</form>
</table>

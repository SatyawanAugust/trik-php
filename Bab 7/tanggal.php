<link href="style.css" rel="stylesheet" type="text/css">

<form method=get action=update.php>

<?php
$nama_bln=array(1=> "Januari", "Februari", "Maret", "April", "Mei", 
                    "Juni", "Juli", "Agustus", "September", 
                    "Oktober", "November", "Desember");

echo "<select name=tanggal>
      <option value=0 selected>Tgl</option>";
      for ($tgl=1; $tgl<=31; $tgl++){
        echo "<option value=$tgl>$tgl</option>";
      }
      echo "</select> ";  
      
echo "<select name=bulan>
      <option value=0 selected>Bulan</option>";
      for ($bln=1; $bln<=12; $bln++){
        echo "<option value=$bln>$nama_bln[$bln]</option>";
      }   
      echo "</select> ";
      
$thn_skrg=date("Y");
echo "<select name=tahun>
      <option value=0 selected>Tahun</option>";
      for ($thn=2000;$thn<=$thn_skrg;$thn++){
        echo "<option value=$thn>$thn</option>";
      }
      echo "</select>";
?>

</form>

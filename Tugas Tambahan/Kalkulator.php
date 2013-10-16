<!-- Nama	: Binti Nafsiah
	 NIM	: 110533430602
	 Off	: D
	 S1 PTI' 11 -->
	 
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title> Kalkulator Sederhana </title>
</head>
<body>
<?php
error_reporting(E_ERROR|E_WARNING);
$a = $_POST['angka1'];
$b = $_POST['angka2'];
$cmd = $_POST['act'];
if(!empty($a) and !empty($b)){
 if ($cmd == 'Tambah'){
  $hasil= $a + $b;
  $opt = " + ";
 }
 elseif ($cmd == 'Kurang'){
  $hasil= $a - $b;
  $opt = " - ";
 }
 elseif ($cmd == 'Kali'){
  $hasil= $a * $b;
  $opt = " X ";
 }
 elseif ($cmd == 'Bagi'){
  $hasil= $a / $b;
  $opt = " / ";
 }
 elseif ($cmd == 'Reset'){
  $a = "";
  $b = "";
  $hasil = "";
  $opt= "";
  $cmd= "";

 }
}
elseif($cmd == 'Reset'){
  echo "<script> window.alert('Angka sudah dibersihkan!!!'); </script>";
  $a = "";
  $b = "";
  $hasil = "";
  $opt= "";
  $cmd= "";
}elseif(!empty($cmd)){
  echo "<script> window.alert('Angka 1 dan 2 tidak boleh kosong !!!'); </script>";
  $a = "";
  $b = "";
  $hasil = "";
  $opt= "";
  $cmd= "";
  }
?>
<form method='post'>
<table align='center'>
<tr>
<td colspan=6 align='center'> <font size=4 >Kalkulator Sederhana

</font> <BR><BR></td></tr>
<tr>
 <td align='center'>Angka 1</td>
 <td align='center'> </td>
 <td align='center'>Angka 2</td>
 <td align='center'> </td>
 <td align='center'>Hasil</td>
 <td align='center'>Operator</td>
</tr>
<tr>
 <td><input type="number" name="angka1" value="<?php echo $a; ?>"/></td> 
 <td><?php echo $opt; ?></td>
 <td><input type="number" name="angka2" value="<?php echo $b; ?>"/></td>
 <td>=</td>
 <td><input type="number" name="hasil" disabled value="<?php echo $hasil; ?>"/></td>

 <td><input type="submit" name="act" value='Tambah'/>
 <input type="submit" name="act" value='Kurang'/>
 <input type="submit" name="act" value='Kali'/>
 <input type="submit" name="act" value='Bagi'/>
 <input type="submit" name="act" value='Reset'/></td>
</tr>
</table>
</form>
</body>
</html>
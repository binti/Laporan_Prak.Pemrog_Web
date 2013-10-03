<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Passing by Reference</title>
</head>
<body>

<?php

function tambah_string(&$str){
	$str = $str . ", Malang";
	return $str;
}
//
$str = "Universitas Negeri Malang";
echo "\$str = $str<br>";
echo tambah_string ($str). "<br>";
echo "\$str = $str<br>";

?>

</body>
</html>
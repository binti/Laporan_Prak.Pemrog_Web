<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Fungsi Grenerate Matriks Sel</title>
</head>
<body>

<?php

function Matriks($baris,$kolom){
				echo "<table border='1'>"; 
 
				for($tr=1;$tr<=$baris;$tr++){ 
      				echo "<tr>"; 
        			for($td=1;$td<=$kolom;$td++){ 
               			echo "<td> ".$tr."  ".$td."</td>"; 
        			} 
    				echo "</tr>"; 
				} 
 				echo "</table>"; 
			}
			Matriks(3,4);

?>

</body>
</html>
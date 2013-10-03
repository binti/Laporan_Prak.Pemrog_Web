<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Demo Variabel</title>
	</head>

	<body>
		
		<?php
			$bil = 3;	//Deklarasi dan inisialisasi
			//Dumping informasi mengenai variabel
			var_dump($bil); //output int(3)
			
			$var = "";
			var_dump($var); //output string(0) ""
			
			$var = null;
			var_dump($var); //output NULL
			
		?>
	</body>
</html>

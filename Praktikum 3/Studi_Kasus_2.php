<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Penanganan Check Box</title>
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">  <!--form ditangani oleh current script & transfer data menggunakan metode POST-->
			Menu
			<input type="checkbox" name="menu[]" value="Ayam Panggang" 
				<?php
					if (isset($_POST['menu'])){		//kondisi melakukan cek menu mempunyai nilai atau tidak			
						foreach ($_POST['menu'] as $key => $val){	//pengulangan untuk membaca nilai array menu
							if($val == 'Ayam Panggang'){	//checkbox akan ditandai apabila 'Ayam Panggang' merupakan salah satu elemen array menu			
								echo 'checked="checked"';		
							}
						}
					}
				?>
			/>Ayam Panggang		<!-- input berupa CheckBox -->	
			<input type="checkbox" name="menu[]" value="Ayam Goreng"
				<?php
					if (isset($_POST['menu'])){	//kondisi melakukan cek menu mempunyai nilai atau tidak			
						foreach ($_POST['menu'] as $key => $val){	//pengulangan untuk membaca nilai array menu
							if($val == 'Ayam Goreng'){		//checkbox akan ditandai apabila 'Ayam Goreng' merupakan salah satu elemen array menu		
								echo 'checked="checked"';		
						}
					}
				} 
				?> 
			/>Ayam Goreng   	<!-- input berupa CheckBox -->
			<input type="checkbox" name="menu[]" value="Ayam Tepung"
				<?php
					if (isset($_POST['menu'])){	//kondisi melakukan cek menu mempunyai nilai atau tidak			
						foreach ($_POST['menu'] as $key => $val){	//pengulangan untuk membaca nilai array menu
							if($val == 'Ayam Tepung'){		//checkbox akan ditandai apabila 'Ayam Tepung' merupakan salah satu elemen array menu			
								echo 'checked="checked"';		
						}
					}
				} 
				?> 
			/>Ayam Tepung   <!-- input berupa CheckBox -->
			<input type="checkbox" name="menu[]" value="Ayam Kecap"   
				<?php
					if (isset($_POST['menu'])){	//kondisi melakukan cek menu mempunyai nilai atau tidak	
						foreach ($_POST['menu'] as $key => $val){	//pengulangan untuk membaca nilai array menu
							if($val == 'Ayam Kecap'){	//checkbox akan ditandai apabila 'Ayam Kecap' merupakan salah satu elemen array menu				
								echo 'checked="checked"';		
							}
						}
					} 
				?> 
			/>Ayam Kecap	<!-- input berupa CheckBox -->	
			<input type="submit" value="OK" />		 <!--membuat button submit -->							
		</form>
		<?php 
		//Ekstraksi Nilai	
			if (isset($_POST['menu'])){		//kondisi melakukan cek menu mempunyai nilai atau tidak						
				foreach ($_POST['menu'] as $key => $val){	//pengulangan untuk mendapatkan nilai array menu dan disimpan pada variabel $val	
					echo 'Menu '.$key.':'.$val.'<br />';	//menampilkan index array dan isi array			
				}
			}
		?>
	</body>
</html>
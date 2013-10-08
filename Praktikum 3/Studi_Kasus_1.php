<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Penanganan Seleksi</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post"> <!--form ditangani oleh current script dan transfer data menggunakan metode POST-->
			Menu
			<select name="makanan">		<!--membuat combo box dengan nama index makanan-->							
				<option value="Ayam Goreng"
					<?php
						if (empty($_POST['makanan'])){		//kondisi saat index makanan bernilai empty	
							$a = 'Kosong';
						}else{								//kondisi saat index makanan tidak bernilai empty
							$a = $_POST['makanan'];
						}
					
						if ($a == 'Ayam Goreng'){			//option Ayam Goreng akan terseleksi apabila variabel a = 'Ayam Goreng'	
							echo 'selected="selected"';
						}
						?>
				>Ayam Goreng		<!--membuat menu pilihan combo box dengan value Ayam Goreng-->
				<option value="Ayam Panggang"
				<?php
					if ($a == 'Ayam Panggang'){		//option Ayam Panggang akan terseleksi apabila variabel a = 'Ayam Panggang'			
						echo 'selected="selected"';
					}
				?>
				>Ayam Panggang		<!--membuat menu pilihan combo box dengan value Ayam Panggang-->	
				<option value="Ayam Kecap"
				<?php
					if ($a == 'Ayam Kecap'){	//option Ayam Kecap akan terseleksi apabila variabel a = 'Ayam Kecap'				
						echo 'selected="selected"';
					}
				?>
				>Ayam Kecap		<!--membuat menu pilihan combo box dengan value Ayam Kecap-->			
				<option value="Ayam Tepung"						
				<?php
					if ($a == 'Ayam Tepung'){		//option Ayam Tepung akan terseleksi apabila variabel a = 'Ayam Tepung'			
						echo 'selected="selected"';
					}
				?>
				>Ayam Tepung	<!--membuat menu pilihan combo box dengan value Ayam Tepung-->		
			</select> <br />
			<input type="submit" value="OK" />		<!--membuat Button Submit-->
		</form>
		
		<?php 
			if (isset($_POST['makanan'])){	//kondisi melakukan cek makanan mempunyai nilai atau tidak				
				echo $_POST['makanan'];		//mencetak isi dari index makanan dengan menggunakan superglobal POST		
			}
		?>
	</body>
</html>
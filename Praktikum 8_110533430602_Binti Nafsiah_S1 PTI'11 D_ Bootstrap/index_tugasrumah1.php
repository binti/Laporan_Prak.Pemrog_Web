<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Page Admin</title>
		<style type="text/css">
			body{
				background-color:#33FFFF;
				color:#006600;
			}
			a{
				color:#006600;
			}
			.inner{
				margin: 200px auto;
				padding: 20px;
				width:240px;
				border:10px solid #006600;
			}
		</style>
	</head>
	<body>
		<?php
			ini_set('display errors',1);
			define('_VALID',1);
			//include file eksternal
			require_once('./proses_tugasrumah1.php');
			init_login();		//cocokkan username dan passsword dengan input
			validate();			//tampilkan login bila session kosong atau logout bila session tidak kosong
		?>
		<h1 style="text-align:center">Simulation Page Admin</h1>
		<p style="text-align:center">
			<a href="?m=Logout">Logout</a>
		</p>
		<div class="inner">
			Menu
			<?php
				if($_SESSION['login']==''){			//hapus session jika checkbox tidak dicentang
					unset($_SESSION['login']);
					session_destroy();
					exit;
				}
			?>
		</div>
	</body>
</html>
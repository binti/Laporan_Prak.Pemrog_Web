<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Page Admin</title>
		<link href="../../../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<style type="text/css">
			body{
				background-color:#993300;
				color:#00FF00;
			}
			a{
				color:#00FF00;
			}
			.inner{
				margin: 200px auto;
				padding: 20px;
				width:512px;
			}
		</style>
        <link rel="stylesheet" type="text/css" href="../../bootstrap.min.css" />
	</head>

	<body>
		<?php
			ini_set('display errors',1);
			define('_VALID',1);
			//include file eksternal
			require_once('./proses.php');
			init_login();		//cocokkan username dan passsword dengan input
			validate();			//tampilkan login bila session kosong atau logout bila session tidak kosong
		?>
		<h1 class="text-center">Simulation Page Admin</h1>
		<p class="text-center">
			<a href="?m=Logout">Logout</a>
		</p>
		<div class="inner">
			<script type="text/javascript">
				document.location.href="../admin_tugasrumah2";
			</script>
			<?php
				if($_SESSION['login']==''){			//hapus session bila checkbox tidak dicentang
					unset($_SESSION['login']);
					session_destroy();
					exit;
				}
			?>
		</div>
	</body>
</html>
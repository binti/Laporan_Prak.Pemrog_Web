<link rel="stylesheet" type="text/css" href="../bootstrap.min.css" />
<?php
	defined('_VALID') or die('Not Allowed');
		function init_login(){
		//simulasi data account nama dan password
		$nama = 'admin';	//inisialisasi username
		$pass = 'admin';	//inisialisasi password
		session_start();	//mulai session
		if(isset($_POST['nama']) && isset($_POST['pass'])){	//cek nilai user dan password
			$n = trim($_POST['nama']);
			$p = trim($_POST['pass']);
			if(($n === $nama) && ($p === $pass)){		//cocokkan input dengan user dan password
				if(isset($_POST['remember'])){			//inisialisasi bila checkbox dicentang
					//jika sama,set cookie
					$_SESSION['login']=$n;
					//redireksi
					?>
					<script type="text/javascript">
						document.location.href="./";
					</script>
					<?php
				}else{
					$_SESSION['login']='';				//inisialisasi bila checkbox tidak dicentang					
				}
			}else{										//teks yang ditampilkan bila inputan salah
				echo '<h5 style="margin:20px auto;text-align:center;">Error!!!Maaf,nama atau password tidak sesuai</h5>';
				return false;
			}
		}
	}
	function validate(){
		if(!isset($_SESSION['login'])){					//cek ketersediaan session
			?>
			<div class="inner">
				<form action="" method="post" class="form-horizontal">
                	<div class="control-group">
                    	<label class="control-label" for="Nama">Nama</label>
                        <div class="controls">
                        	<input type="text" name="nama" placeholder="Nama" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="control-label" for="Password">Password</label>
                        <div class="controls">
                        	<input type="password" name="pass" placeholder="Password" />
                        </div>
                    </div>
                    <div class="control-group">
                    	<label class="checkbox">
                        	<input type="checkbox" name="remember" value="simpan" /> Remember Me
                        </label>
                    	<div class="controls">
                        	<input type="submit" value="Login" />
                        </div>
                    </div>
				</form>
			</div>
			<?php
			exit;		
		}
		if(isset($_GET['m']) && $_GET['m'] == 'Logout'){	
			if(isset($_SESSION['login'])){				
				unset($_SESSION['login']);
				session_destroy();
			}
			//redireksi halaman
			?>
			<script type="text/javascript">
				document.location.href="./";
			</script>
			<?php
		}
	}
?>
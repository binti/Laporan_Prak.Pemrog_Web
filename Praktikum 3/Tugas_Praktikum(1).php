<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>LOGIN</title>
		<style type="text/css">
			body{
				background-color:#AFE8FA;
			}
			.login{
				font-family:Arial, Helvetica, sans-serif;
				border:5px solid #18BDED;
				margin: auto;
				margin-top:50px;
				margin-bottom:50px;
				padding:50 50 100 50;
				font-size:14px;
				color:#18BDED;
				width:512px;
				height:256px;
			}
			#input{
				width:256;
				margin:50 128 10 128;
			}
			h1{
				font-size:50px;
				text-align:center;
				color:#0066FF;
			}			
		</style>
		<script type="text/javascript" language="javascript">
			function cekhuruf(huruf){
				cek = /^[A-Za-z]{1,}$/;	
				return cek.test(huruf);
			}
			function validasi(form){
				var Id = form.id.value;				//ambil nilai index id pada form login
				var passwd = form.password.value;	//ambil nilai index password pada form login
				if(Id === '' || passwd === ''){		//kondisi jika id atau passwd kosong
					alert("Please completing username and password!"); //pesan yg ditampilkan jika id atau passwd kosong
					form.id.focus();				//memberi perintah focus pada id apabila username atau password kosong
					return false;
				}else if(!cekhuruf(Id) === true || !cekhuruf(passwd) === true){		//kondisi mengecek inputan berupa huruf atau tidak
					alert("Username and Password must be characters");	//pesan yg ditampilkan apabila inputan bukan huruf
					return false;
				}else{
					return true;					//perintah yang dilakakukan apabila inputan berupa huruf dan berlanjut ke Tugas_Praktikum(2).php
				}				
		}
	</script>
	</head>

	<body>
		<div class="login">
			<b><h1>Login</h1></b>
			<hr color="#18BDED" width="512px;" size="5px"/>
			<div id="input">
				<form action="Tugas_Praktikum(2).php" name="login" method="post" onSubmit="return validasi(this)">
					Username<br />
					<input type="text" name="id" size="30" /><br />			<!--inputan textfield dengan ukuran 30 dan nama id-->
					Password<br />
					<input type="text" name="password" size="30" /><br />	
					<input type="submit" value="LOGIN" />					<!--inputan button submit dengan value LOGIN-->
				</form>
			</div>
		</div>
	</body>
</html>
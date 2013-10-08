<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>hasil Login</title>
</head>

<body>
	<?php
		$username = 'admin';				
		$password = 'admin';				
		$Id = $_REQUEST['id'];				//inputan dimasukkan pada variabel $Id
		$passwd = $_REQUEST['password'];	//inputan dimasukkan pada variabel $passwd
		if(is_string($Id) && is_string($passwd)){	// cek nilai variabel berupa string
			if($Id == $username && $passwd == $password){	//membandingkan nilai inputan dengan predefined
				echo '<h1>Selamat Datang......'.$Id.'<h3>Your Login is successfully</h3><br /><p>This is the default web page for this server.</p><br /><p>The web server software is running but no content has been added yet.</p>';				
			}else{
				echo '<h1>Login Error!</h1><br /><p>Please Check again your username and password!</p>';
			}
		}else{
			echo '<h1>Ups....Sorry!</h1><br /><p>Username and password is not string</p>';
		}
	?>
</body>
</html>

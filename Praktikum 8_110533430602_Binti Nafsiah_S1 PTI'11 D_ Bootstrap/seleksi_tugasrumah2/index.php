<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Menciptakan Tabel</title>
		<style type="text/css">
		body{
			background-color:#993300;
		}
		</style>
        <link href="../../bootstrap.min.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post" class="table table-hover">
			<div class="control-group">
            	<label class="control-label" for="NIM">NIM</label>
                <div class="controls">
                	<input type="text" name="nim" placeholder="NIM" />
                </div>
            </div>
            <div class="control-group">
            	<label class="control-label" for="Nama">Nama</label>
                <div class="controls">
                	<input type="text" name="nama" placeholder="Nama" />
                </div>
            </div>
            <div class="control-group">
            	<label class="control-label" for="Alamat">Alamat</label>
                <div class="controls">
                	<input type="text" name="alamat" placeholder="Alamat" />
                </div>
            </div>
            <div class="control-group">
            	<div class="controls">
                	<input type="submit" value="Simpan" />
                </div>
            </div>
		</form>
		<?php
			require_once '../koneksi.php';
			//bila field nim dan nama diisi kemudian disubmit
			if(isset($_POST['nim']) && isset($_POST['nama'])){
				$nim = $_POST['nim'];
				$nama = $_POST['nama'];
				$alamat = $_POST['alamat'];					
				//tambahkan data baru ke tabel
				$sql = "INSERT INTO mahasiswa VALUES ('".$nim. "', '" .$nama. "','" .$alamat. "' )";
				$res = mysql_query($sql);
				if($res){
					echo 'Data Berhasil Ditambahkan';
					@mysql_close($res);
				}else{
					echo 'Gagal Menambah Data <br />';
					echo mysql_error();
				}
			}
			echo '<hr />';
			require_once './seleksi.php';
		?>
	</body>
</html>
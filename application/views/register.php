<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<style type="text/css">
		body { font-family:tahoma; font-size:12px;  background-size: 100%; background-attachment: fixed; background-image: url("<?php echo base_url().'assets/img/gif.jpg'?>");}
		#container { width:450px; padding:20px 40px 60px; margin :180px auto; border:0px solid #555;  opacity: 0.8; background: linear-gradient(to right, #006699 0%, #00cc99 100%);}
		input[type=text], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=password], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 100%;
		    background-color: #239090;
		    color: white;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 8px 16px 0 rgba(0,0,0,0.19);
		}

		input[type=submit]:hover {
		    background-color: #45a049;
		    box-shadow: 0 8px 36px 0 rgba(0,0,0,0.2),0 8px 36px 0 rgba(0,0,0,0.19);
		}

		div {
		    border-radius: 5px;
		    background-color: #84e1e1;
		    padding: 20px;
		}
	</style>
</head>
<body>
<div id="container">
<h2 align="center">Register</h2>
<form method="post" action="<?php echo base_url(). 'index.php/ctrl_register/insert'?>">
	Nama <input type="text" name="nama_siswa" placeholder="Nama" required><br><br>
	Tgl Lahir <input type="date" name="tgl_lahir" placeholder="tgl lahir" required><br><br>
	Asal Sekolah <input type="text" name="asal_sekolah" placeholder="Asal sekolah" required><br><br>
	Alamat <input type="text" name="alamat" placeholder="Alamat" required><br><br>
	Email <input type="text" name="email_siswa" placeholder="Email" required><br><br>
	No HP <input type="text" name="nohp_siswa" placeholder="NO HP" required><br><br>
	ID GRUP <input type="text" name="id_grupbimbel" placeholder="ID GRUP BIMBEL" required><br><br>
	Username <input type="text" name="username_siswa" placeholder="Username" required><br><br>
	Password <input type="password" name="password_siswa" placeholder="Password" required><br>
	<input type="submit" name="go" value='kirim'>
<div>
</form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
		#container2 { width:50px; padding:5px 5px 5px; margin :20px auto; border:0px solid #555;  opacity: 0.8;}

	</style>
</head>
<body>
	<div id="container">
	<h2 align="center">Sign In</h2>
	<form action="<?php echo base_url().'index.php/login/verify'?>" method="post">
		<div>
			Username <input type="text" name="username" placeholder="Username" required><br><br> 
			Password <input type="password" name="password" placeholder="Password" required><br>
			<?php echo $this->session->flashdata('msg');?>
			<input type="submit" name="submit" value="Login">
		</div>
	</form>
	
	<div id="container2" >
	<?php echo anchor('ctrl_register','Register'); ?>
	<!--p><a href="<?php// echo base_url(); ?>index.php/ctrl_admin/register" role="button"></a></p-->
	</div>

</body>
</html>

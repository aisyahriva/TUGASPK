<?php 

session_start();

if (empty($_SESSION['username'])){
  
	header('location:login.php');
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Modal Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="style/bootstrap.css">
</head>
<body>


<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<p>
				<center>
					<h2>Login Form</h2>
					Oleh : <a href="https://www.facebook.com.Andre ID" target="_blank">SITI AISYAH</a> 
					
				</center>
			</p>
			<br>
				 <div class="login-panel panel panel-default">
                    <div class="panel-body">
                       Selamat Datang <?php echo $_SESSION['username'] ; ?>
					   <p>
							Ini adalah halaman Rahasia..
					   </p>
					   <a class="btn btn-link pull-right" href="logout.php">Logout</a>
                    </div>
                </div>
		</div>
	</div>
	<p style="margin-top:5%;">
	<center>Copyright @ 2019 by : <a href="https://www.facebook.com.pendeta.mokong" target="_blank">SITI AISYAH</a> All rights reserved.</center>
	</p>
</div>
	<script type="text/javascript" src="style/jquery.js"></script>
	<script type="text/javascript" src="style/bootstrap.js"></script>	
	<script type="text/javascript" src="script.js"></script>	
</body>
</html>

<?php
}
?>

           
<?php 
session_start();
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
					<h2>Login From</h2>
					Oleh : <a href="https://www.facebook.com.pendeta.mokong" target="_blank">SITI AISYAH</a>
				</center>
			</p>
			<br>
				 <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="autentifikasi.php">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
                                <div class="checkbox">
                                    <label>
                                    <div>
                                        Lupa password..? <a href="password.php" >Lupa</a>
                                        </div>
                                        <div>
                                        Belum punya akun..? <a href="daftar.php">Daftar</a>
                                        </div>
                                    </label>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
		</div>
	</div>
	<div class="col-md-4 col-md-offset-4">
		<?php 
	</div>
	<br>
	<p style="margin-top:5%;">
	<center>Copyright @ 2019 by : <a href="https://www.facebook.com.pendeta.mokong" target="_blank"> SITI AISYAH</a> All rights reserved.</center>
	</p>
</div>
	<script type="text/javascript" src="style/jquery.js"></script>
        <script>
            $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
            setTimeout(function(){$("#pesan").fadeOut('slow');}, 3000);
        </script>
</body>
</html>



           
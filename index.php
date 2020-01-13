<?php
	session_start();
	require_once('models/functions.php');
	require_once('models/UserClass.php');
	ini_set("display_errors","on");
?>
<html>
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://raw.githubusercontent.com/JohnBlazek/codepen-resources/master/3d-carousel/css/stylesheet.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"  crossorigin="anonymous">
		<link rel="stylesheet" href="css/styleHome.css">
        <script src="js/scriptHome.js"></script>
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <title> IEE Login</title>
    </head>
    <body>
	<div id="container_login">
		<div class="form_login">
		<h1><span class="badge badge-light">Einloggen</span></h1>
		<form action="" name="form_login" method="POST">
			<div class="form-row">
				<div class="col-md-8 mb-3">
				<label for="validationDefaultUsername">Benutzername</label>
				<div class="input-group">
					<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupPrepend2"><img src="images/login_icone.PNG"></img></span>
					</div>
					<input type="text" class="form-control" name="benutzername" id="login" placeholder="Benutzername" aria-describedby="inputGroupPrepend2" required>
				</div>
				</div>
			</div>
			<div class="form-row">
			<div class="col-md-8 mb-3">
				<label for="validationDefaultUsername">Kennwort</label>
				<div class="input-group">
					<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupPrepend2"><img src="images/password_icone.PNG"></img></span>
					</div>
					<input type="password" class="form-control" name="kennwort" id="password"  aria-describedby="inputGroupPrepend2" required>
				</div>
				</div>
			</div>
			<button class="btn btn-primary" id="submit" type="submit">Login</button>
		</form>
		</div>	
		<!-- form control and redirection -->
		<?php 
			if(isset($_POST['benutzername']) && ($_POST['kennwort']))
				{
					connect_form($_POST['benutzername'],$_POST['kennwort']);
				}	
		?>
	</div>
	</body>
</html>

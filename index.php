<?php
	session_start();
	require_once('models/functions.php');
	require_once('models/UserClass.php');
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
        <script type="text/javascript">
			//initialize popper
			 $(function(){
				$(".myPopover").popover();
			 });
			 //initialize dropdown
			 $(function(){
				$('.dropdown-toggle').dropdown();
			 });
         </script>
        <title> IEE Login</title>
    </head>
    <body>
	<div id="container">
		<div class="form_login">
			<form action="" name="form_login" method="POST">
				<div class="form-group">
					<h1>Connexion</h1>
						<label for="labelUserName">Benutzer Name</label>
						<input type="text"  class="form-control" id="inputUsername" aria-describedby="userNameHelp" placeholder="Login eingeben" name="userName" required>
				</div>
				<div class="form-group">
    				<label for="labelPasswort">Kennwort</label>		
					<input type="password"  class="form-control" id="inputKennwort" placeholder="Kennwort eingeben" name="kennwort" required>
				</div>
				<input type="submit" id="submit" class="btn btn-primary" value='LOGIN'>
			</form>	
		</div>	
		<!-- form control and redirection -->
		<?php 
			if(isset($_POST['userName']) && ($_POST['kennwort']))
				{
					connect_form($_POST['userName'],$_POST['kennwort']);
				}	
		?>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://tympanus.net/Development/Slicebox/js/jquery.slicebox.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	</body>
</html>

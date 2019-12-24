<html>
<head>
	<meta charsetb="utf-8">
	<title>IEE/Login</title>
	<link rel="stylesheet"  href="..\css\login.css" media="screen" type="text/css"/>
</head>
<body>
	<div id="container">
		<form action="#" method="POST">
		  <h1>Connexion</h1>
			<label><b>Benutzer Name</b></label>
			<input type="text" placeholder="Benutzer Name" name="username" required>
			
			<label><b>PassWort</b></label>
			<input type="password" placeholder="KenntWort" name="username" required>
			
			<input type="submit" id="submit" value='LOGIN'>
			<?php
			  if(isset($_GET['erreur'])){
				  $err = $_GET['erreur'];
				  if($err==1 || $err==2)
					  echo"<p style='color:red'>BenutzerName oder KenntWort ungultig</p>";
			  }
			?>
		</form>		
	</div>
</body>
</html>
<?php

		// user_form.php
		// jutum�rkide vahele input elemendi v��rtus
		
		//echo $_POST["email"];
		
		//echo $_POST["Password"];
		
		$email_error = "";
		
		//kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["email"]))	{
				$email_error = "ei saa olla t�hi";
			}	
			if(empty($_POST["Password"]))
		$password_error = "Teie parooli l�nk on t�hi";
	
				//parool ei saa olla t�hi, kontrollime pikkust
				if(strlen($_POST["Password"]) < 8 ) {
				
					$password_error = "Peab olema v�hemalt 8 s�mbolit pikk";
		}
?>
<html>
	<head>
	 <title>User login page</title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form action="User_form.php" method="post">
		
		<input name="email" type="Email" placeholder="E-post">* <?php echo $email_error; ?> <br> <br> 
		<input name="Password" type="Password" placeholder="Password">	
		
		<input type ="submit" value ="logi sisse">
		</form>
		<h2>Create user</h2>
		
	</body>
</html>
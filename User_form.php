<?php

		// user_form.php
		// jutumärkide vahele input elemendi väärtus
		
		//echo $_POST["email"];
		
		//echo $_POST["Password"];
		
		$email_error = "";
		
		//kontrolli ainult siis, kui kasutaja vajutab logi sisse nuppu
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			if(empty($_POST["email"]))	{
				$email_error = "ei saa olla tühi";
			}
		}
?>
<html>
	<head>
	 <title>User login page</title>
	</head>
	<body>
	
		<h2>Login</h2>
		<form action="User_form.php" method="post">
		
		<input name="email" type="Email" placeholder="E-post"> <?php echo $email_error; ?> <br> <br> 
		<input name="Password" type="Password" placeholder="Password">	
		
		<input type ="submit" value ="logi sisse">
		</form>
		<h2>Create user</h2>
		
	</body>
</html>
<?php
	session_start();
	$cookieGuard = "banish";
	if(isset($_COOKIE[$cookieGuard]))
	{
		echo "<script type = 'text/javascript'>\n";
		echo "window.location = 'http://www.wikihow.com/Remember-a-Forgotten-Password';\n";
		echo "</script>";
	}
	

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Password Page</title>
	</head>
	<body >	
		<?php
			$gate = "close";
			if($_SESSION["SecretKey"] == $gate)
			{
				echo "<p style = 'color:red;'> Please Enter Password Again... </p>";
			}
		?>
		<form action="<?php $page = "passHandler.php"; echo htmlspecialchars($page);?>" method="post">
			Enter Password Below <br>
			<input type="password" name="pass" maxlength="10">
			<input type="submit">
		</form>
	</body>
	
</html>

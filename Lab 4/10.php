<?php


if (isset($_POST['submit'])){
	setcookie($_POST['un'], $_POST['pw'],time()+3600);
	header('Location:loguser.php');
}

?>

<html>
       <head>
	   </head>
	   <body>
	          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			   username: <input type="text" name="un" >
			   </br> </br>
			  
			   password: <input type="password" name="pw" >
			   </br> </br> </br>
			   
			  <input type="submit" name="submit" value="submit">
			   </form>
			  
			   
	   </body>
</html>	   
<?php

if (isset($_POST['login'])){
	setcookie($_POST['un'], $_POST['pw'],time()+3600);
	header('Location:index.php');
}

?>

<html>
       <head>
	   </head>
	   <body>
	           <form name= "" method="post" action="">
			   username: <input type="text" name="un" >
			   </br> </br>
			  
			   password: <input type="password" name="pw" >
			   </br> </br> </br>
			   
			   <input type="submit" name="login"/>
			   </form>
			  
			   
	   </body>
</html>	   
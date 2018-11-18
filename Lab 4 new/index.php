<?php

if (isset($_POST['login'])){
	//setcookie($_POST['un'], $_POST['pw'],time()+3600);
	header('Location:loguser.php');
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
			   <h1>For Registration</h1>
           <input type="button" value="Registration" onclick="window.location.href='Reg.php'" />
	           
			  
			   
	   </body>
</html>	   
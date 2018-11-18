<?php


session_start();
 echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
$_COOKIE[$un]=$pw; 


if(isset($_POST ['login'])){
	foreach ($_COOKIE as $item){
	 if($item[$un] == $pw)
	 {
	$_SESSION ['un'] = $un;
	 header("location:login.php");
	 }
	 else
	 {
		 echo "Wrong User Name or Password.";
	     echo "<a href='index.php'>Go Back</a>";
	 }

}
}
 else  
{	
	header("location: login.php");
	
}  

?>
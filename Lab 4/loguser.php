<?php
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
session_start();

$_POST['User_ID']

if ($_COOKIE[$un] == $pw ){
	$_SESSION ['un'] = $un;
	header("location:login.php");
}

/* else 
{
	echo "Wrong User Name or Password.";
	echo "<a href='index.php'>Go Back</a>";
	
}  */

?>
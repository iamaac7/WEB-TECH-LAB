<?php 
require_once("config.php");
/*
function suggest_mail($emailid)
{
 $new_data = str_replace("@",mt_rand(0,10000)."@",$data);
 echo check_user_mail($new_data);
}*/

//code check email
if(!empty($_POST["emailid"])) {
$result = mysqli_query($con,"SELECT count(*) FROM user WHERE email='" . $_POST["emailid"] . "'");
$row = mysqli_fetch_row($result);
$email_count = $row[0];
if($email_count>0) 
{
	echo "<span style='color:red'> Email Already Exit .</span>";
	echo "<br>";
	echo "You can Choose : ";
	 $new_data = str_replace("@",mt_rand(0,10000)."@",$_POST["emailid"]);
	 echo $new_data;
    
}


else echo "<span style='color:green'> Email Available.</span>";
}
// End code check email

//Code check user name
if(!empty($_POST["username"])) {
	$result1 = mysqli_query($con,"SELECT count(*) FROM user WHERE aiubid='" . $_POST["username"] . "'");
	$row1 = mysqli_fetch_row($result1);
	$user_count = $row1[0];
	if($user_count>0) echo "<span style='color:red'> AIUB ID already exit .</span>";
	else echo "<span style='color:green'> AIUB ID Available.</span>";
}
// End code check username
?>






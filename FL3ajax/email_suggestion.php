<?php
include('config.php');
$q=$_GET["q"];

$conn = OpenCon();
	$sql = "SELECT * FROM user_info where email= '$q'";
	$result = $conn->query($sql);
	$rows=mysqli_num_rows($result);
	
	$che;
if ($rows> 0)
{
    //echo "Email Already Exist";
	echo "<span style='color:red'> Email Already Exit .</span>";
	echo "<br>";
	echo "You can Choose : ";
	 $new_data = str_replace("@",mt_rand(0,10000)."@",$_GET["q"]);
	 echo $new_data;
	 echo "<br>";
	echo "You can Choose : ";
	 $new_data = str_replace("@",mt_rand(0,10000)."@",$_GET["q"]);
	 echo $new_data;
	 echo "<br>";
	echo "You can Choose : ";
	 $new_data = str_replace("@",mt_rand(0,10000)."@",$_GET["q"]);
	 echo $new_data;
}
else
{
    echo "Email Available";

}
CloseCon($conn);
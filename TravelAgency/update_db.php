<?php
function delete($sql){
	$conn = mysqli_connect("localhost", "root", "","project");
	mysqli_query($conn, $sql)or die(mysqli_error($conn));
}

}
else if($_REQUEST['signal']=="place"&&isset($_REQUEST['email'])){
	//" WHERE Email_id='$email'";
	$sql='UPDATE place_table SET Place_Id='$pid',Place_Name='$pname',Type='$ptype',Rating='$prating',Details='$pdetails',Photo='$photo' WHERE Place_Id="'.$_REQUEST["email"].'";';
	delete($sql);
	echo "Deleted";
}

?>
<html>
<head>
	<title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/bootstrap.min.js"></script>
</head>

<body class="container">
<br>
<a href="index.php"><span class="btn btn-primary">Home</span></a> <br />
<?php
include("config.php");
//connect to db here

     $aiubidErr = $emailErr = $fullnameErr = $phoneErr = $passwordchk = $conpasswordchk  ="";
                $aiubid = $email = $phone = $fullname = $password = $conpassword ="";


  /* $aiubid = $_POST['aiubid'];
	$fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password']; */
  
  
if(isset($_POST['submit'])) {
	$aiubid = $_POST['aiubid'];
	$fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];

	if($pass == ""|| $aiubid == "" || $fullname == ""|| $email == "" || $phone == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} 
	
	
  
                  /* if (empty($_POST["email"])) {
                    $emailErr = "Email is required";
                  } else {
                    $email = test_input($_POST["email"]);
                    // check if e-mail address is well-formed */
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                      $emailErr = "Invalid email format";
					  echo "Email is not valid";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
                    }
                    
  
                     /* if (empty($_POST["password"])) {
                      $passwordchk = "Password is required";
                    } else {
                      $password = test_input($_POST["password"]);
                      // check if e-mail address is well-formed */
                      if ($conpassword != $password) {
                        $passwordchk = "";
						 echo "PAssword don't match";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
                      }
                    
                    /*  if (empty($_POST["conpassword"])) {
                      $conpasswordchk = "Confirm Password is required";
                    } else {
                      $conpassword = test_input($_POST["conpassword"]);
                      // check if e-mail address is well-formed */
                      if ($conpassword != $password) {
                        $conpasswordchk = "password don't match ";
						 echo "password don't match ";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
                      }
                    
    
                    /* if (empty($_POST["fullname"])) {
                      $fullName = "";
                    } else {
                      $fullName = test_input($_POST["fullName"]); */
                      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
                      if (!preg_match(" /[a-zA-Z ]/",$fullname)) {
                        $fullnameErr = "Invalid Name";
						 echo "Invalid Name";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
                      }
                    

                  /*  if (empty($_POST["phone"])) {
                      $phone = "";
                    } else {
                      $phone = test_input($_POST["phone"]);
                      // check if URL address syntax is valid (this regular expression also allows dashes in the URL) */
                      if (!preg_match("/[0-9]/",$phone)) {
                        $phoneErr = "Invalid Number";
						echo "Invalid Phone number";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
                      }
                    
  // userID
	/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["aiubid"])) {
    $usernameErr = "AIUB ID is required";
  } else {
    $aiubid = test_input($_POST["aiubid"]); */
    // check if userID only contains letters and whitespace
    if (!preg_match("/^[0-9]{2}-[0-9]{5}-[1-3]/",$aiubid)) {
      $aiubidErr = "Invalid ID";
	  echo "Invalid AIUB ID";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
    }
  
	
	
	else {
		mysqli_query($conn,"INSERT INTO user(aiubid,fullname,email,phone,password) VALUES('$aiubid','$fullname','$email','$phone', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "<hr><div class='alert alert-success'>Registration successfully done. Click Home for login Now</div>";
		echo "<br/><hr>";
		
	}
   
  } //else {
?>

	<center><h2>New User Registration</h2><hr></center>
	<form name="form1" method="post" action="">
		<table class="table table-striped table-bordered table-condensed">
            <tr>
                <td>AIUB ID</td>
                <td>
				<input type="text" name="aiubid" class="form-control">
				<span class="error">* <?php echo $aiubidErr;?></span>
				</td>
            </tr>
            <tr>
                <td>Full Name</td>
                <td>
				<input type="text" name="fullname" class="form-control">
				<span class="error">* <?php echo $fullnameErr;?></span>
				</td>
				
            </tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control"> <span class="error">* <?php echo $emailErr;?></span>
				</td>
				
			</tr>
            <tr>
                <td>Phone Number</td>
				
                <td>
				<input type="text" name="phone" class="form-control">
				<span class="error">* <?php echo $phoneErr;?></span>
				</td>
				
            </tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password" class="form-control"><span class="error">* <?php echo $passwordchk;?></span></td>
				
			</tr>
			<tr>
            <td colspan="2"><br></td>
            </tr>
			<tr> 
				<td>Confirm Password</td>
				<td>
				<input type="password" name="conpassword" class="form-control">
				<span class="error">* <?php echo $passwordchk;?></span>
				</td>
				
			</tr>
			<tr>
            <td colspan="2"><br></td>
            </tr>
            <tr> 
			
			
			
				
				<td colspan="2"><input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="Register"></td>
			</tr>
		</table>
	</form>
<?php
//}
	
//close the db connection here
?>
</body>
</html>
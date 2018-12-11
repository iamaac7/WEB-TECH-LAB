
<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST['submit50']))
	{
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=($_POST['newpassword']);
	$sql ="SELECT Email_id FROM user_table WHERE Email_id=:email and Phone=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update user_table set Password=:newpassword where Email_id=:email and Phone=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Email id or Mobile no is invalid";	
}
}

?>

<!DOCTYPE html>
<html>
	<head>
			<link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
			<link rel="stylesheet" type="text/css" href="style.css">
			<title>Password Recovery | Chologhuri</title>
			<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
			<style>
			.div1{
			
				background-image:url(pic8.jpg);
				background-position:center;
				background-repeat:no-repeat;
				background-size:cover;
				position:relative;
                height: 100%;
                
				}
                .button {
			background-color: #008CBA; /* Blue */
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 12px;
			margin: 4px 2px;
			cursor: pointer;
		}
				
				
                input[type=text],[type=email] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                
            }
                 div{
                border-radius: 0px;
/*                background-color: #f2f2f2;*/
                padding: 8px;
            }
                form{
                width: 50%;
                margin: 0px auto 0px;
                padding: 20px;
                border: 1px solid gray;
                background: white;
                border-radius: 0px 0px 10px 10px;
            }
            input[type=submit]{
                width: 100%;
                background-color: #5F9EA0;
                color: white;
                padding: 14px 20px;
                margin:8px 0;
                border: none;
                border-radius: 4px;
                cursor: pointer;
		 font-size:20px;
            }
            input[type=submit]:hover{
                background-color: #35B049;
            }
			
			</style>
	</head>
	<body class="div1">
			 <div class="div3">
					<img src="world.gif" width="50px" height="50px" style="margin-left:20px";>
					<i style=" position:center; margin:20px";><font size="6"><b> Chologhuri.com</b></font></i><br>
					<i style=" position:center; margin:20px";><font size="2"><b> A Travel Guide to Travel Lovers....</b></font></i><br>
				</div>
      	<table style="border: 1px solid black ; width:100%";>
					<tr style="border: 1px solid black">
						<td style="text-align:right;background-color:green">
						<a href = "homepage.php"><input type= "button" class= "button" value= "Home"></a>
						<a href = "requestBook.php"><input type= "button" class= "button" value= "Custrom trip"></a>
						  <a href="contact.php"><input type="button" class = "button" value="contuct us" onclick="contact()"></a>
						  <a href = "loginHTML.php"><input type="button" class = "button" value="<?php  if(isset($_SESSION['login']) &&$_SESSION['login']>0)echo $_SESSION['name']; else echo "Login/Signup"; ?>" name="<?php if(isset($_SESSION['login'])) echo $_SESSION['login'];else echo 0;?>" onclick="login(this)">
						</td>
					</tr>
				</table>
				<form name="chngpwd" method="post" onSubmit="return valid();">
		 <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
	
		<p style="width: 350px;">
			<label>Email id</label>  
			<input type="email" name="email" class="form-control" id="email" placeholder="Reg Email id" required="">
	 
		</p> 
		<p style="width: 350px;">
		
			<label>Mobile No</label> 
			<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Reg Mobile no" required="">
		</p> 

<p style="width: 350px;">
<label>New  Password</label>
<input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password" required="">
</p>

<p style="width: 350px;">
<label>Confirm Password</label>
	<input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
			</p>

			<p style="width: 350px;">
<button type="submit" name="submit50" class="btn-primary btn">Change</button>
			</p>
			</form>
									</div>
	</body>
</html>
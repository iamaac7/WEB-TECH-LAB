<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
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
		.button2 {background-color: #f44336;} /* Red */ 
		.container{
		  background-image:url(brazil.jpg);
            min-height:100%;
			background-position:center;
			background-repeat:no-repeat;
			background-size:cover;
			position:relative;
		}
		.div3{
				 float:left;
				 margin-left:0px;
			}
</style>
		<link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
		<title>Login | Chologhuri</title>
	</head>
    <body >
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
						  <input type="button" class = "button" value="<?php  if(isset($_SESSION['login']) &&$_SESSION['login']>0)echo $_SESSION['name']; else echo "Login/Signup"; ?>" name="<?php if(isset($_SESSION['login'])) echo $_SESSION['login'];else echo 0;?>" onclick="login(this)">
						</td>
					</tr>
				</table>
        <br><br>
        <form name="login" action="login.php" method="post">
		
			
		
		
			<div class="">
				<div>
					<label>E-mail:</label>
					<input type="text" id="emailboxid" name="email" placeholder="Enter your E-mail address">
				</div>
				<div>
					<label>Password:</label> <br>
					<input  type="password" name="password" placeholder="Enter password"/>
				</div>
				<div class="input_group">
					<input type="submit" class = "button" value="login"/>
				</div>
			</div>
		
			<?php
		session_start();
		if(isset($_SESSION['loginerror']) && $_SESSION['loginerror']==1)
			echo"<b style='color:red;'>Wrong password or email</b>";
		?>
		<br><a href="forgot_password.php">forgot password </a>
        <h2  >
            <a href="signup.php">signup as user  </a>or<a href="ajency_signup.php">  signup_as_ajency</a>
        </h2>
            
          
            
        </form>
		<br/>
		<?php
		/*session_start();
		if(isset($_SESSION['loginerror']) && $_SESSION['loginerror']==1)
			echo"<b style='color:red;'>Wrong password or email</b>";*/
		?>
		
		
    </body>
</html>
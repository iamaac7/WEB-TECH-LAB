<!DOCTYPE html>
<html>
<?php session_start() ?>
<head>
<?php
if($_SESSION['login']=="")
{
	header("location:loginHTML.php");
}
?>


<?php include('function.php'); ?>
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
		.div7{
			
			padding-left:465px;
			padding-top: 38px;
			
		}
		.div9{
			padding-left: 537px;
			padding-top: 27px;

			
		}
</style>
<link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
<title>Admin Details | Chologhuri</title>
</head>

	<body>
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
		<div>
			<div>
				
				<div class="div7">
				<a href="admin_place.php"><input type="button" class ="button" value="place"></a>
				<a href="view_contact.php"><input type="button" class ="button" value="View Contact info"></a>
				<a href="view_request_trips.php"><input type="button" class ="button" value="View request"></a>
				<a href="admin_user.php"><input type="button" class ="button" value="user"></a>
				<a href="admin_agency.php"><input type="button" class ="button" value="agency"></a>
				</div>
				<div height="1" width="70" style="text-align:center;padding-top: 47px;">
				<h3>Details</h3>
				</div>
			</div>
			<div class="div9">
				<div >
					<!--<img src="<?php if($_SESSION['login']!=0) echo $_SESSION['image']; ?>" height="300" width="300"><br/> -->
					<b>Username:<i> <?php if($_SESSION['login']!=0) echo $_SESSION['name']; ?> </i></b><br/>
					<b>Email Id:<i> <?php if($_SESSION['login']!=0) echo $_SESSION['email']; ?> </i></b><br/>
					<b>Phone Number:<i> <?php if($_SESSION['login']!=0) echo $_SESSION['phone']; ?> </i></b></div><br/>
			</div>
		</div>
		<form action="logout.php" method="post">
		<?php
		if(isset($_SESSION['login'])&&$_SESSION['login']==3)
			echo '<input type="submit" class ="button button2"value="logout" name="logOutButton" id="logOutButtonId">';
		?>
		</form>
	</body>

<html>
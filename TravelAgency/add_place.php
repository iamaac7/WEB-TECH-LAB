<?php if(!isset($_SESSION)) { session_start(); } ?>
<! DOCTYPE html>
<html>
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
				
				
				margin:20px;
				padding-left:423px;
			}
</style>
		  <link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
		  <link rel="stylesheet" type="text/css" href="style.css">
		  <title>add place | Chologhuri</title>
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
						<a href = "admin_details.php"><input type= "button" class= "button" value= " Admin Panel"></a>
						  <a href="contact.php"><input type="button" class = "button" value="contuct us" onclick="contact()"></a>
						  <input type="button" class = "button" value="<?php  if(isset($_SESSION['login']) &&$_SESSION['login']>0)echo $_SESSION['name']; else echo "Login/Signup"; ?>" name="<?php if(isset($_SESSION['login'])) echo $_SESSION['login'];else echo 0;?>" onclick="login(this)">
						</td>
					</tr>
				</table>
				<div class="div7">
				<a href="admin_place.php"><input type="button" class ="button" value="place"></a>
				<a href="view_contact.php"><input type="button" class ="button" value="View Contact info"></a>
				<a href="view_request_trips.php"><input type="button" class ="button" value="View request"></a>
				<a href="admin_user.php"><input type="button" class ="button" value="user"></a>
				<a href="admin_agency.php"><input type="button" class ="button" value="agency"></a>
				<a href="logout.php"><input type="button" class ="button" value="Logout"></a>
				</div>
	<form action="add_database.php" method="post" enctype="multipart/form-data" name="frm">
	 <h3>
		Select image to upload : 
		<input type="file" name="fileToUpload" id="fileToUploadId" accept="image/*"><br><br>
		Place Id     :
		<input type="text" name="pid" placeholder="Enter Place_Id" >
		Place Name   :
		<input type="text" name="pname" placeholder="Enter Place_Name" >
		Place Type   :
		<input type="text" name="ptype" placeholder="Enter Place_Type" >
		Place Rating :
		<input type="text" name="prating" placeholder="Enter Place_Rating" >
		Place Details:
		<input type="text" name="pdetails" placeholder="Enter Place_Details" >
		Upload More photos for this place:
		<input type="file" name="pphotos[]" id="pphotosid" accept="image/*" multiple><br/>
		<input type="submit" value="ADD" class="button" id="sign" onclick="submit">
	</h3>
	</form>
	<form action="logout.php" method="post">
		<?php
			if(isset($_SESSION['login'])&&$_SESSION['login']>0)
			echo '<input type="submit" value="logout" class = "button button2" name="logOutButton" id="logOutButtonId">';
		?>
		</form>
	</body>
</html>
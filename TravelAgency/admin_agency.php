<?php
			require("database.php");
			$sql="select * from agency";
			$agency=getJSONFromDB($sql);
			$agencydata=json_decode($agency);
			$totalagency=sizeof($agencydata);
?>

<!DOCTYPE html>
<html>
<script>
var request=new XMLHttpRequest();
 function userDelete(id){
	 var usermail=id.name;
	 id.value="Deleted";
	 id.style.color="red";
	 //alert();
	 //alert(usermail);
	 request.onreadystatechange=function(usermail,id){
	 };
	 var url="delete_user.php?signal=agency&email="+usermail;
	 request.open("POST", url, true);
	 request.send();
 }
</script>
<head>
 <link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
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
		</style>
		
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
	text-align: center;
}
.div7{
				
				
				margin:20px;
				//padding-left:240px;
			}
</style>
		
			
			
</head>
<?php
if($_SESSION['login']=="")
{
	header("location:loginHTML.php");
}
?>


<?php include('function.php'); ?>

	<body>
	 
		  <title>Admin Agency | Chologhuri</title>
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
			<table style="width:100%">
	<tr>
		<th>Username</th>
		<th>Date_of_Estrublish</th> 
		<th>Lience</th>
		<th>Phone</th> 
		<th>Email_id</th>
		<th>Delete Agency</th>
	  </tr>
				<tr>
					
					 <?php
				
						for($i=0;$i<$totalagency;$i++){
							$aname=$agencydata[$i]->username;
							$adob=$agencydata[$i]->date;
							$alience=$agencydata[$i]->licence;
							$aphone=$agencydata[$i]->phone;
							$aemail=$agencydata[$i]->email;
							echo "<tr>";
							echo "<td>".$aname."</td>";
							echo "<td>".$adob."</td>";
							echo "<td>".$alience."</td>";
							echo "<td>".$aphone."</td>";
							echo "<td>".$aemail."</td>";
							echo '<td> <input type="button" class = "button button2" value="Delete" name="'.$alience.'" id="'.$i.'" onclick="userDelete(this)" >';
							echo "</tr>";
					
						}
					?>
					
				</tr>
			</table>
		</div>
			<form action="logout.php" method="post">
			<?php
				if(isset($_SESSION['login'])&&$_SESSION['login']>0)
				echo '<input type="submit" value="logout" class = "button button2" name="logOutButton" id="logOutButtonId">';
			?>
			</form>
	</body>
</html>
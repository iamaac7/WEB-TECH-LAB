<?php
			require("database.php");
			$sql="select * from user_table";
			$user=getJSONFromDB($sql);
			$userdata=json_decode($user);
			$totaluser=sizeof($userdata);
?>

<!DOCTYPE html>
<html>
<script>
var request=new XMLHttpRequest();
 function userDelete(id){
	 var usermail=id.name;
	 //alert();
	 //alert(usermail);
	 id.style.color="red";
	 id.value="Deleted";
	 request.onreadystatechange=function(usermail,id){
		 if (request.readyState == 4 && request.status == 200){
		        resp=request.responseText;
				alert(resp);
				alert(id.value);
				id.value=resp;
				id.style.color="red";
		 }
	 };
	 var url="delete_user.php?signal=user&email="+usermail;
	 request.open("POST", url, true);
	 request.send();
 }
</script>
<head>
<?php
if($_SESSION['login']=="")
{
	header("location:loginHTML.php");
}
?>


<?php include('function.php'); ?>
<link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
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
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Date_of_birth</th>
	<th>Gender</th>
    <th>Phone</th> 
	<th>Email_id</th>
	<th>Delete User</th>
  </tr>
            <tr>
            
                 <?php
			
					for($i=0;$i<$totaluser;$i++){
						$ufname=$userdata[$i]->FirstName;
						$ulname=$userdata[$i]->LastName;
						$udob=$userdata[$i]->Date_of_birth;
						$ugender=$userdata[$i]->Gender;
						$uphone=$userdata[$i]->Phone;
						$uemail=$userdata[$i]->Email_id;
						echo "<tr>";
						  echo "<td>".$ufname."</td>";
						  echo "<td>".$ulname."</td>";
						  echo "<td>".$udob."</td>";
						  echo "<td>".$ugender."</td>";
						  echo "<td>".$uphone."</td>";
						  echo "<td>".$uemail."</td>";
						  echo '<td> <input type="button" class="button button2" value="Delete" name="'.$uemail.'" id="'.$i.'" onclick="userDelete(this)" >';
						  echo "</tr>";
				
					}
				?>
               
            </tr>
        </table>
		<form action="logout.php" method="post">
		<?php
			if(isset($_SESSION['login'])&&$_SESSION['login']>0)
			echo '<input type="submit" value="logout" class = "button button2" name="logOutButton" id="logOutButtonId">';
		?>
		</form>
</body>
</html>
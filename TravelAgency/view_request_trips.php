<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<?php
if($_SESSION['login']=="")
{
	header("location:loginHTML.php");
}
?>


<?php include('function.php'); ?>
<link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
<title>View Contact | Chologhuri</title>


<link href="style1.css" rel="stylesheet" type="text/css" />


<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>

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
                width: 65%;
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

<!--/animated-css-->
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
<style>
/* form {
    width: 72%;
    margin: 0px auto 0px;
    padding: 20px;
    border: 1px solid gray;
    background: white;
    border-radius: 0px 0px 10px 10px;
}
.div7{
			
			padding-left:465px;
			padding-top: 38px;
			
		} */

</style>
<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['login']=="")
{
	header("location:loginHTML.php");
}
?>


<?php include('function.php'); ?>




<!--/sticky-->
<div style="padding-top:100px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:0px;">

</div>

<div class="col-sm-9">




<form method="post">
<table border="0" width="90%" height="300px" align="center" class="tableshadow">
<tr><td class="toptd">View  Requested Trips </td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="95%">
<tr><td style="font-size:15px; padding:5px; font-weight:bold;" >Request ID</td>
<td style="font-size:20px; padding:8px; font-weight:bold; "> Place Name</td>
<td style="font-size:20px; padding:8px; font-weight:bold; "> Duration of stay</td>
<td style="font-size:20px; padding:8px; font-weight:bold; "> Approximate Budget</td>
<td style="font-size:20px; padding:8px; font-weight:bold; "> Name</td>
<td style="font-size:20px; padding:8px; font-weight:bold;">Phone No.</td>
<td style="font-size:20px; padding:8px; font-weight:bold;">Email ID</td>
<td style="font-size:20px; padding:8px; font-weight:bold;">Approximated Time of Trip</td></tr>



<?php

$s="select * from request_trip";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{

	
		echo "<td style=' padding:8px;'>$data[0]</td>
		<td style=' padding:8px;'>$data[1]</td>
		<td style=' padding:8px;'>$data[2]</td>
		<td style=' padding:8px;'>$data[3]</td>
		<td style=' padding:8px;'>$data[4]</td>
		<td style=' padding:8px;'>$data[5]</td>
		<td style=' padding:8px;'>$data[6]</td>
		<td style=' padding:8px;'>$data[7]</td>
		
		</tr>";

}




?>

</table>
</td></tr></table>

</form>


<form action="logout.php" method="post">
		<?php
		if(isset($_SESSION['login'])&&$_SESSION['login']==3)
			echo '<input type="submit" class ="button button2"value="logout" name="logOutButton" id="logOutButtonId">';
		?>
		</form>


</body>
</html>
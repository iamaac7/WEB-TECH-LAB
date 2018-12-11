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
<title>Update Place | Chologhuri</title>


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
		
<!--header-->
<!--sticky-->
<?php
if($_SESSION['login']=="")
{
	header("location:loginHTML.php");
}
?>


<?php include('function.php'); ?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$f1=0;
	
	
	$target_dir = "url/";
	//t4
	$target_file = $target_dir.$_FILES["t4"]["name"];
	//$target_file = $target_dir.basename($_FILES["t4"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	
	
	

		if(move_uploaded_file($_FILES["t4"]["tmp_name"], $target_file)){
			$f1=1;
	} 	

}
	 
?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	$s="update place_table set Place_Name='" . $_POST["t1"] ."',Type='" . $_POST["t2"] . "',Rating='" . $_POST["t8"] . "',Details='" . $_POST["t7"] . "',Photo='" . $target_file = $target_dir.$_FILES["t4"]["name"] . "' where Place_Id='" . $_POST["s1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
    }

?>


<!--/sticky-->
<div style="padding-top:0px; box-shadow:1px 1px 20px black; min-height:570px" class="container">
<div class="col-sm-3" style="border-right:1px solid #999; min-height:0px;">

</div>
<div class="col-sm-9">




<form method="post" enctype="multipart/form-data">
<table border="0" width="500px" height="700px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Package</td></tr>
<tr><td class="lefttxt">Select Package</td><td><select name="s1" ><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from place_table";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);



?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from place_table where Place_Id='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);


$Place_Id=$data[0];
$Place_Name=$data[1];
$Type=$data[2];
$Rating=$data[3];
$Details=$data[4];
$Photo=$data[5];



mysqli_close($cn);

}

?>

</td></tr>

<tr><td class="lefttxt">Package Name</td><td><input type="text"  value="<?php if(isset($_POST["show"])){ echo $Place_Name ;} ?> " name="t1" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for Package Name"/></td></tr>
<tr><td class="lefttxt">Select type</td><td><input type="text"  value="<?php if(isset($_POST["show"])){ echo $Type ;} ?> " name="t2" required pattern="[a-zA-z _]{1,50}" title"Please Enter Only Characters between 1 to 50 for Package Name"/></td></tr>



</select>

<tr><td class="lefttxt">Rating</td><td><input type="text" name="t8" value="<?php if(isset($_POST["show"])){ echo $Rating ;} ?> " /></td></tr>
<!--/sticky-->
<tr><td class="lefttxt">Old Pic</td><td><img src="<?php echo @$Photo; ?>" width="150px" height="50px" />
<input type="hidden" name="h1" value="<?php if(isset($_POST["show"])) {echo $Photo;} ?>" />
</td></tr> 
<tr><td class="lefttxt">Upload Pic1</td><td><input type="file" name="t4"></td></tr>


<tr><td class="lefttxt">Details</td><td><textarea name="t7" /><?php if(isset($_POST["show"])){ echo $Details ;} ?></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>




</table>
</form>



</div>


</div>

<form action="logout.php" method="post">
		<?php
		if(isset($_SESSION['login'])&&$_SESSION['login']==3)
			echo '<input type="submit" class ="button button2"value="logout" name="logOutButton" id="logOutButtonId">';
		?>
		</form>
	
		


</body>
</html>



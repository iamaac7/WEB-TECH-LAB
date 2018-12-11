<?php
require("database.php");
?>
<!DOCTYPE html>
<html>
	
	<?php
	session_start();
	//echo $_SESSION['email'];
	$qury='SELECT `Url` FROM `photo_table` where `User_Email`="'.$_SESSION['email'].'"';
	$res=getJSONFromDB($qury);
	$photos=json_decode($res);
	//echo $photos[0]->Url;
	?>
	<head>
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
	</style>
	<title>My album | Chloghuri</title>
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
		<table>
			<tr>
			<td>
			<h1>Photos</h1>
			<?php
			
				for($i=0;$i<sizeof($photos);$i++){
					$source=$photos[$i]->Url;
					if($i%3==0&&$i!=0)echo "<br/>";
					echo '<img src="'.$source.'" width="330px" height="150px"> ';
				}
			?>
			</td>
			</tr>
			<tr>
				<td>
					<form action="imageUpload.php" method="post" enctype="multipart/form-data" name="photoUpload" id="photoUploadId">
					<input type="file" name="image[]" id="imageId" accept="image/*" multiple><br/>
					<input type="submit" value="Upload Image" id="imgSubmitId" name="imgSubmit">
					</form>
					<img src="" name="testimg" id="testid"/>
				</td>
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
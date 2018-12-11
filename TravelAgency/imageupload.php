<!DOCTYPE html>
<html>
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
<title>Upload Image | Chologhuri</title>
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
		<?php
		session_start();
		function insert($sql){
			$conn = mysqli_connect("localhost", "root", "","project");
			
			mysqli_query($conn, $sql)or die(mysqli_error($conn));
		}
		//$sql="select * from user_table where Email_id='".$_POST["email"]."' AND Password='".$_POST["password"]."'";
		//echo $sql;
		//echo "<pre>",print_r($_FILES),"</pre>";
		$size=sizeof($_FILES["image"]["name"]);


		if(isset($_FILES["image"]["name"])){
			for($i=0;$i<$size;$i++){
				$tergetdir="url/".$_FILES["image"]["name"][$i];
				if(move_uploaded_file($_FILES["image"]["tmp_name"][$i],$tergetdir)){
					$qury='INSERT INTO `photo_table`(`User_Email`, `Url`) VALUES ("'.$_SESSION["email"].'","'.$tergetdir.'")';
					insert($qury);
				}
					
			}
		}

		?>
		<form action="logout.php" method="post">
		<?php
			if(isset($_SESSION['login'])&&$_SESSION['login']>0)
			echo '<input type="submit" value="logout" class = "button button2" name="logOutButton" id="logOutButtonId">';
		?>
		</form>
	</body>
</html>
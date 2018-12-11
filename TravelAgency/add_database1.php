<?php
session_start();
header("location:ajency_details.php");

function insert($sql){
			$conn = mysqli_connect("localhost", "root", "","project");
			
			mysqli_query($conn, $sql)or die(mysqli_error($conn));
		}

			define('DB_HOST', 'localhost');
			define('DB_NAME', 'project');
			define('DB_USER','root');
			define('DB_PASSWORD','');
			$conn = mysqli_connect("localhost", "root", "","project");
			
			$pid1  = $_POST['offer'];
				$pname1  = $_POST['placeId'];
				$ptype1 = $_POST['lic'];
			
			
			$query = "INSERT INTO offer_table (Offer,Place_Id,licence) VALUES ('$pid1','$pname1','$ptype1')";
				$data = mysqli_query ($conn,$query)or die(mysqli_error($conn));
			
			
			
			
			
?>


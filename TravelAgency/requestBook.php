<!DOCTYPE html>
<html>
<?php session_start(); ?>
<script>
function login(elm)
		{
			//alert(elm.name);
			if(elm.name==0){
			window.location.assign("loginHTML.php");
			}
			else if(elm.name==1)
				window.location.assign("user.php");
			else if(elm.name==2)
				window.location.assign("ajency_details.php"); 
			else if(elm.name==3)
				window.location.assign("admin_details.php");
		}
</script>
<head>
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
        .contact{
            width: 100%;
            height: 25px;
            text-align: center;
            font-size: 25px;
        }
        .div1{
            width: 40%;
            height: 314px;
            float: left;
            margin-left: 25px;
            padding-left: 25px;
            background-color: burlywood;
			
        }
        .contact{
            width: 100%;
            height: 100%;
            
        }
        .plan{
            text-align: center;
        }
		form1{
                width: 50%;
                margin: 0px auto 0px;
                padding: 20px;
                border: 1px solid gray;
                background: white;
                border-radius: 0px 0px 10px 10px;
            }
      input[type=text]{
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
                
            }
			body{
				//background-color:brown;
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
			.div3{
				 float:left;
				 margin-left:0px;
			}
			 

	</style>
	

	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
<title>Custom Trip | chologhuri</title>
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
		
		
</head>
	<body>
	     <?php include('function.php'); ?>
         <div class="contact">
                <h3>Custom Trip</h3>
         </div>
		<div class="plan">
		      <img src="images/mail.png" alt="">
          <h4 style="color:#000">Plan Your Trip Our travel experts can help you book now!</h4>
		</div>

		  <div class="contact-grids">
			  <div class="container">
				  <div class="div1">
						<h4 style="color:#09F ">chologhuri.com</h4>
						<p style="color:#000">NEED HELP BOOKING PACKAGE<br/>
                        For fantastic suggestions you may also call our travel expert.</p>
						<h5 style="color:#000"><span class="img1"></span>(+880) 1773411528 &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;(+880) 1748963683</h5>
						<h5 style="color:#000"><span class="img2"></span><a href="#">info@chologhuri.com&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;support@chologhuri.com</a></h5>
						<h5 style="color:#000"><span class="img3"></span>Dhaka,banlgdesh.</h5>
                        <br/>
                       <img src="images/contac.jpg" />
                      </div>
				  <div class="col-md-8 contact">
                  
                  	<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="insert into request_trip(Place_Name,Duration,Budget,Name,Phone,Email,Time_Of_Trip) values('" . $_POST["t1"] ."','" . $_POST["t2"] ."','" . $_POST["t3"] ."','" . $_POST["t4"] ."','" . $_POST["t5"] ."','" . $_POST["t6"] ."','" . $_POST["t7"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
}
?>
					 <div  class="form1"style=" width:50%;height:520px;padding-right:25px;margin-left:612px">
					     
						  <form method="post"  >
						  <div  class="form" border="0" width="700px" height="500px">
						   <input type="text" class="text" value=" Place Name"  name="t1" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Place Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name">
						  <br>
						  <div  class="form" border="0" width="700px" height="500px">
						   <input type="text" class="text" value=" Duration"  name="t2" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Duration of Stay';}" required pattern="[0-9 _]{1,3}" title"Please Enter Only numbers between 1 to 3 for Duration">
						  <br>
						  <div  class="form" border="0" width="700px" height="500px">
						   <input type="text" class="text" value=" Budget"  name="t3" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Approximate Budget ';}" required pattern="[0-9]{1,11}" title"Please Enter Only  numbers between 1 to 11 for Budget">
						  <br>
						  <div  class="form" border="0" width="700px" height="500px">
						   <input type="text" class="text" value=" Name"  name="t4" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Name';}" required pattern="[a-zA-z1 _]{1,50}" title"Please Enter Only Characters and numbers between 1 to 50 for Name">
						  <br>
						  <input type="text" class="text" value=" Phone" name="t5" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your Contact NO';}" required pattern="[0-9]{10,12}" title"Please Enter Only  numbers between 10 to 12 for Contact no">
						 <br>
						 <input type="text" class="text" value="Email" name="t6" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Your mail';}" required>
						<br>
						<textarea onFocus="if(this.value == 'Time Of Trip') this.value='';" name="t7" onBlur="if(this.value == '') {this.value='****-**-**';}" required >Time Of Trip(Date) xxxx-xx-xx</textarea>
						 <br>
						 <input type="submit" value="Send message" name="sbmt">
						  </div>
						  <div class="clearfix"></div>
						   </form>
					 </div>
				  <div class="clearfix"></div>
			  </div>
		  </div>
	    
		
		<?php
		/* require("database.php");
		$data=getJSONFromDB("select * from admin_table");
		$ddata=json_decode($data);
		echo "Admin Name   :".$ddata[0]->Name."<br>";
		echo "Email Address:".$ddata[0]->Email_id."<br>";
		echo "Phone Number :".$ddata[0]->Phone."<br>";; */
		?>
		<form action="logout.php" method="post">
		<?php
			if(isset($_SESSION['login'])&&$_SESSION['login']>0)
			echo '<input type="submit" value="logout" class = "button button2" name="logOutButton" id="logOutButtonId">';
		?>
		</form>
	</body>
	
</html>
<!DOCTYPE html>
<html>
<?php session_start() ?>
<head>
	<title> Update Profile | Chologhuri</title>
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
			.div3{
				 float:left;
				 margin-left:0px;
			}
	</style>
	<link rel="icon" type="image/jpg" href="logo.jpg" sizes="20x20">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<script type="text/javascript">
	var flag=1;
	var request= new XMLHttpRequest();
	function fnamecheck()
		{
		 var a=document.frm.firstname.value;
		 var msg=document.getElementById("fnc");
		 if(a.length<3){
			msg.innerHTML="invalid name";
			msg.style.color="red";
			flag=0;
			return false;
		}
		else
			{
				msg.innerHTML="valid name";
				msg.style.color="green";
				flag=1;
				return true;
			}
		}
		
		function lincechk(lnc)
		{
			request.onreadystatechange=function(lnc)
					{
						if (request.readyState == 4 && request.status == 200)
							{
								resp=request.responseText;
								//alert("hi");
								//alert(resp);
								var msg=document.getElementById("lncc");
								if(resp>0){
								msg.innerHTML="lince is used";
								msg.style.color="red";
								return false;
								}
							}
							else{
								var msg=document.getElementById("lncc");
								msg.innerHTML="license valid";
								msg.style.color="green";
								return true;
							}
					};
					var url="check.php?signal=read&license="+lnc;
					request.open("POST", url, true);
					request.send();
		}
		
		function lnccheck(elm)
		{
		 var a=elm.value;
		 //alert(a);
		 var msg=document.getElementById("lncc");
		 if(a.length>4&&a.length<8){
			 alert(a.length);
			/*msg.innerHTML="valid licence";
			msg.style.color="green";
			flag=0;
			return true;*/
			lincechk(a);
			
		}
		else
			{
				msg.innerHTML="invalid licence";
				msg.style.color="red";
				flag=1;
				return false;
			}
		}
		
		function emailcheck(mail)
		{
		 var a=mail.value;
		 var pos=a.indexOf("@");
		 var com=a.indexOf(".com");
		 var msg=document.getElementById("emailc");
		 if(pos>=-1 && com>pos){
			msg.innerHTML="valid mail";
			msg.style.color="green";
			return true;
		}
		else
			{
				msg.innerHTML="invalid email";
				msg.style.color="red";
				flag=0;
				return false;
			}
		}
		
		
		function phonecheck()
		{
			var msg=document.getElementById("phnc");
			var pnum=document.frm.phone.value;
			if(pnum>1000&&pnum<9999999999)
			{
				msg.innerHTML="valid phone";
				msg.style.color="green";
				flag=1;
				return true;
			}
			else
			{
				msg.innerHTML="invalid phone";
				msg.style.color="red";
				flag=1;
				return false;
			}
		}
		
		function passcheck()
		{
		 var a=document.frm.password.value;
		 var msg=document.getElementById("passc");
		 if(a.length<5){
			msg.innerHTML="invalid password";
			msg.style.color="red";
			flag=0;
			return false;
		}
		else
			{
				msg.innerHTML="valid password";
				msg.style.color="green";
				flag=1;
				return true;
			}
		}
		
		
		function submitfrm()
		{
			var ch=document.getElementById("lncc");
			var m=document.getElementById("emailid");
			if(fnamecheck()==true && passcheck()==true && phonecheck()==true &&ch.style.color=="green"&&emailcheck(m)){
			document.frm.submit();
			}
			else
			alert("wrong");
		}
		
</script>

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

		<form action="Agency_update_database.php" method="post" name="frm">
		<p><h1>Create an account</h1></p>
		<p>User name:<br>
		<input type="text" name="firstname" value="<?php echo $_SESSION['name']; ?>"id="fn" onkeyup="fnamecheck()" placeholder="Enter User name" > <i id="fnc"></i>
		<br></p>
		<p>Date of Established:<br>
		<input type="text" name="dob" value="<?php echo $_SESSION['DOB']; ?>" id="dob" placeholder="Enter estadlished date" >
		<br></p>
		<p>licence No:<br>
		<input type="text" name="licence" value="<?php echo $_SESSION['licence']; ?>" id="lnc" readonly> <i id="lncc"></i>
		<br></p>
		<p>Phone:<br>
		<input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" id="phone" onkeyup="phonecheck()" placeholder="Enter phone number"><i id="phnc"></i> <br></p>
		<p>Email Id:<br>
		<input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" id="emailid" onkeyup="emailcheck(this)" placeholder="Enter email address" > <i id="emailc"></i>
		<br></p>
		<p>Password:<br>
		<input type="password" name="password" id="pass" onkeyup="passcheck()" placeholder="Enter password" > <i id="passc"></i>
		<br></p>
		<input type="submit" value="Sign Up" class = "button" id="sign" onclick="submitfrm()">
		</form>

</body>
</html>
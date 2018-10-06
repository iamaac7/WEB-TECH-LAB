<?php

/*
echo "Hello World! <br>";

$var1=1;
$var2=1.0;
$var3="1";
echo $var1 ."<br/>";
echo "v1=".$var1."v2=".$var2."v3=".$var3;


for($i=0;$i<=9;$i++){
	if($i%2 == 0){
	
	echo $i." ==> Even <br/>";
	}
else
{
	echo $i."==> Odd <br/>";
}	
}

*/





?>

<html>
       <head>
	   </head>
	   <body>
	           <form name= "" method="post" action="login.php">
			   username: <input type="text" name="un" >
			   </br>
			   FullName: <input type="text" name="fn" >
			   </br>
			   Email: <input type="text" name="em" >
			   </br>
			   Phone: <input type="text" name="pn" >
			   </br>
			   password: <input type="password" name="pw" >
			   </br>
			   confirm password: <input type="password" name="cpw" >
			   </br></br>Gender</br></br>
			   <input type="radio" name="ut" value="m" />Male
			   <input type="radio" name="ut" value="f" />Female
			   <input type="radio" name="ut" value="ad" />Other
			   </br></br>Education</br></br>
			   <input type="checkbox" name="ct[]" value="SSC <br/>" />SSC
			   <input type="checkbox" name="ct[]" value="HSC <br/>" />HSC
			   <input type="checkbox" name="ct[]" value="BSC <br/>" />BSC
			   <input type="checkbox" name="ct[]" value="MSC <br/>" />MSC			   
			   
			   
			   <input type="submit"/>
			   </form>
			  
			   
	   </body>
</html>	   
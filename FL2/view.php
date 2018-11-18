<?php

$usr= $_POST ['name'];
$fullname= $_POST ['address'];
$email= $_POST ['zipcode'];
$phone= $_POST ['country'];
$cpass= $_POST ['phone'];
$gen= $_POST ['email'];
$pass= $_POST ['password'];
$chk= $_POST ['pwVerified'];

echo "</br>Registration Sucessful !";
echo "</br>Your user name is : ".$usr;
echo "</br>Your Full Name : ".$fullname;
echo "</br>Your Email: ".$email;
echo "</br>Your phone : ".$phone;
echo "</br>Your password: ".$pass;
echo "</br>Your password: ".$chk;
echo "</br>Your gender: ".$gen;


?>


<?php

$usr= $_POST ['un'];
$fullname= $_POST ['fn'];
$email= $_POST ['em'];
$phone= $_POST ['pn'];
$cpass= $_POST ['cpw'];
$gen= $_POST ['ut'];
$pass= $_POST ['pw'];
$chk= $_POST ['ct'];

echo "</br>Registration Sucessful !";
echo "</br>Your user name is : ".$usr;
echo "</br>Your Full Name : ".$fullname;
echo "</br>Your Email: ".$email;
echo "</br>Your phone : ".$phone;
echo "</br>Your password: ".$pass;

echo "</br>Your gender: ".$gen;

foreach ($chk as $ct) {
    echo $ct;
}






?>
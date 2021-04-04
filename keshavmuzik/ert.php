<?php

$servername="localhost";
$username="root";
$password="";
$dbname="keshavmuzik";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){echo "not connected";}


else{
$name=$_POST["nam"];
$email=$_POST["email"];
$password=$_POST["password"];
echo $name;
echo $email;
echo $password;

}
?>
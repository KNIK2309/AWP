<?php

$username=$_POST["user"];
$password=$_POST["password"];


$con=new mysqli("localhost","root","","nik");

if($con->connect_error)
{

    die("connection failed".$con->connect_error);
}

$sql="insert into customerlogin(username,password) values('$username','$password')";

echo "Inserted data Successfully! ";

$con->query($sql);
$con->close();


?>

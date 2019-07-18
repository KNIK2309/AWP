<?php
$server="localhost";
$username="root";
$password="";
$dbname="nik";

try
{
$con =new PDO("mysql:host=$server; dbname=nik",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="insert into customer(id ,name) values(10,'Nikita')";
$con->exec($sql);
echo " inserted Succesfully";
}

catch(PDOException $e)
{

echo "Connection Failed".$e->getMessage();

}

$con=null;
?>
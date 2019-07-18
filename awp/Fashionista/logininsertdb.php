<?php
$server="localhost";
$username="root";
$password="";

try
{
$con =new PDO("mysql:host=$server; dbname=ecom",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="insert into customer(id ,name) values(10,'Nikit')";
$con->exec($sql);
echo " inserted Succesfully";
}

catch(PDOException $e)
{

echo "Connection Failed".$e->getMessage();

}

$con=null;
?>
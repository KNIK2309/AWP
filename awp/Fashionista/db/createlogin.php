<?php
$server="localhost";
$username="root";
$password="";
$dbname="nik";

try
{
$con =new PDO("mysql:host=$server; dbname=$dbname",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql="create table customer(id int(3),name varchar(20))";
$con->exec($sql);
echo " TAble Created Succesfully";
}

catch(PDOException $e)
{

echo "Connection Failed".$e->getMessage();

}

$con=null;
?>





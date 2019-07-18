<?php
$servername="localhost";
$username = "root";
$password="";
$dbname="nik";

try{
    $conn= new PDO ("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="CREATE TABLE reg1
    (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR (50) NOT NULL,
lastname VARCHAR (50) NOT NULL,
email VARCHAR(50) NOT NULL,
contactno INT(20) NOT NULL,
gender TEXT (10) NOT NULL,
billingaddress VARCHAR (50) NOT NULL,
pincode INT (10) NOT NULL,
city VARCHAR (20) NOT NULL
)";
$conn->exec($sql);
echo"Table Guests create successfully in mysql";

}
catch(PDOException $e)
{
    echo"<br/>".$e->getMessage();
}

$conn=null;

?>
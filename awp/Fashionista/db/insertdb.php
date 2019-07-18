<?php
$servername="localhost";
$username = "root";
$password="";
$dbname="nik";

$firstname=$_POST['First'];
$lastname=$_POST['Last'];
$email=$_POST['Email'];
$contactno=$_POST['Contact'];
$gender=$_POST['Gender'];
$billingaddress=$_POST['billing address'];
$pincode=$_POST['pincode'];
$city=$_POST['city'];


//create connection
    $conn= new mysqli ($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}


   $sql="INSERT INTO reg1(firstname,lastname,email,contactno,gender,billingaddress,pincode,city)
   VALUES('Nikita','Khetade','nikitakhetade@gmail.com','3452789065','female','Karve Nagar','444555','Pune')";

   if($conn->query($sql)==true)
   {
       echo"New record created successfully";
   }else{
       echo"Error:".$sql."<br>".$conn->error;
   }
   $conn->close();

?>
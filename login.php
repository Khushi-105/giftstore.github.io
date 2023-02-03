<?php
$conn=mysqli_connect("localhost","root",'',"first");

$email=$_POST["email"];

$password=$_POST["password"];
//$table="create table login(email varchar(20),password varchar(50))";
//mysqli_query($conn,$table);
$query="insert into login(email,password)values('$email','$password')";
if (!mysqli_query($conn,$query))
{
    echo"Record not inserted ";
}
else
{
 
    echo"Record inserted successfully";
}
?>   

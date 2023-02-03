<?php
$conn=mysqli_connect("localhost","root",'',"first");
$name=$_POST["name"];
$email=$_POST["email"];
$number=$_POST["number"];
$message=$_POST["message"];
//$table="create table customer(name varchar(10),email varchar(20),number int(10),message varchar(50))";
//mysqli_query($conn,$table);
$query="insert into customer(name,email,number,message)values('$name','$email','$number','$message')";
if (!mysqli_query($conn,$query))
{
    echo"Record not inserted ";
}
else
{
 
    echo"Record inserted successfully";
}
?>   


<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$num = $_POST["num"];
$email = $_POST["email"];
$website = $_POST["website"];
$company = $_POST["company"];
if(isset($_POST['submit']))
{
echo '<script>alert("Hi! You are Registered Successfully.")</script>'; 

}
?>
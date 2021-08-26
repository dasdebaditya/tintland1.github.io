<?php
$name=$_POST["name"];
$mail = $_POST["mail"];
$phone=$_POST["phone"];
$course = $_POST["course"];

echo $name;
echo $mail;
echo $phone;
echo $course;

$to = ['piedpiperllp@gmail.com','admission.desk@tict.edu.in'];
$subject = 'Update from Landing Desk';
$message = 'test'; 
$from = 'admission.enquiry.tint@gmail.com';

$from_password = "TiNt@Rajarhat";


?>
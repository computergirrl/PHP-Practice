<?php
include("top_nav.html");
$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$street=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$postal=$_POST['postal'];
$spam=$_POST['spam'];
$email=$_POST['email'];
$comments=$_POST['comments'];
print "Your name is: $firstname $lastname";
?>
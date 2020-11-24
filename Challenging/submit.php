<?php
  require 'includes/common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$feedback=mysqli_real_escape_string($con,$_POST['feedback']);
$query = "INSERT INTO feedback(name, email, comments)VALUES('" . @$name . "','" . @$email . "','" . @$feedback . "')";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
echo "THANK YOU!"
?>
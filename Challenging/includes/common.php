<?php
$con = mysqli_connect("localhost:3308", "root", "", "lifestyle") or die(mysqli_error($con));
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
// session_start();
?>
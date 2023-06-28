<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect("localhost" , "root" ,"", "shaneable") ;

if (mysqli_connect_errno());
{
    echo ""  . mysqli_connect_error();
}
?>
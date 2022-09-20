<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "odonto";

$con = new mysqli ($host, $user, $password, $dbname);
if($con->connect_errno){
    echo"<script>alert('Error')</script>";
}


?>

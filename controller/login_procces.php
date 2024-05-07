<?php
session_start();
include "database.php";

$username = $_POST['username'];
$password = $_POST['password'];

$secure_password = md5($password);

$result = $connection -> query("SELECT * FROM users WHERE user_name = 'username' AND password = '$secure_password' ");
$users_count = $result->num_rows ;
if($users_count == 1){


    $user = $result->fetch_assoc();


$_SESSION["login_status"] = true ;
$_SESSION["username"] = $username;
$_SESSION["user_id"] = $user["id"]  ;
header("home.php");
}else{
    // echo "Username or password is incorrect";
    header("index.php");
}

?>
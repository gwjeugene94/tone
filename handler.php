<?php
session_start();
include "config.php";

    
    //Perform the verification of the nation

    $username = $_POST["username"];
    $email = $_POST["email"];

    $password = $_POST["password"];
    $phonenumber = $_POST["phonenumber"];


            $sql = $con->query("SELECT * FROM tone WHERE username = '$username'");
            if(mysqli_num_rows($sql) > 0){
$msg="Username exist!";
       $_SESSION['msg']=$msg;         
$redirectPage = "tone.php";
Header("Location:".$redirectPage);
exit();
            }


$con->query("INSERT INTO tone (username,email,password , phonenumber) VALUES ('$username','$email','$password','$phonenumber')") ;

$msg="Registration Successful!";
$_SESSION['msg']=$msg;

$redirectPage = "tone.php";
Header("Location:".$redirectPage);
exit();



?>
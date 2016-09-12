<?php
session_start();
include "config.php";

    
    //Perform the verification of the nation

    $username = $_POST["username"];
    $email = $_POST["email"];

    $password = $_POST["password"];
    $phonenumber = $_POST["phonenumber"];
if(isset($_POST["refid"]))
   {
    $refid= $_POST["refid"];
       
       $sql = $con->query("SELECT * FROM tone WHERE username = '$username'");
            if(mysqli_num_rows($sql) > 0){
$msg="Username existed!";
       $_SESSION['msg']=$msg;         
$redirectPage = "refform.php?id=$refid";
Header("Location:".$redirectPage);
exit();
            }


$con->query("INSERT INTO tone (username,email,password , phonenumber,refid) VALUES ('$username','$email','$password','$phonenumber','$refid')") ;

$msg="Registration Successful!";
$_SESSION['msg']=$msg;

$redirectPage = "tone.php";
Header("Location:".$redirectPage);
exit(); 
       
   }

            $sql = $con->query("SELECT * FROM tone WHERE username = '$username'");
            if(mysqli_num_rows($sql) > 0){
$msg="Username existed!";
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
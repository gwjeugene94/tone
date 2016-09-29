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

$cur_time = date('Y-m-d H:i:s');
$con->query("INSERT INTO tone (username,email,password , phonenumber,refid,timerecord) VALUES ('$username','$email','$password','$phonenumber','$refid','$cur_time')") ;

$msg="Registration Successful! Our member will contact you by Wechat shortly!";
$_SESSION['msg']=$msg;

$redirectPage = "refform.php?id=$refid";
Header("Location:".$redirectPage);
exit(); 
       
   }

            $sql = $con->query("SELECT * FROM tone WHERE username = '$username'");
            if(mysqli_num_rows($sql) > 0){
$msg="Username existed!";
       $_SESSION['msg']=$msg;         
$redirectPage = "refform.php?id=$refid";
Header("Location:".$redirectPage);
exit();
            }

$cur_time = date('Y-m-d H:i:s');
$con->query("INSERT INTO tone (username,email,password , phonenumber,refid,timerecord) VALUES ('$username','$email','$password','$phonenumber','$refid','$cur_time')") ;

$msg="Registration Successful! Our member will contact you by Wechat shortly!";
$_SESSION['msg']=$msg;

$redirectPage = "refform.php?id=$refid";
Header("Location:".$redirectPage);
exit();



?>
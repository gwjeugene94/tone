<?php  
require("config.php");
session_start();  
  
if(!isset($_SESSION["username"])){  
  
    header("Location: tone.php");//redirect to login page to secure the welcome page without login access. 
} 

?>  
  
<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
<link href = "tone_login.css" rel = "stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<title>V-ONE 智能系统</title>
</head>
<body>  

    <div class="navbar">
      <div class="container">
	    <ul class = "nav nav-pills">
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>


  
</body>  
  
</html>
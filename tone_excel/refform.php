<?php session_start(); 
$refid=$_GET['id'];
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
<form  action="handler.php" method="POST">
        <?php echo'
<input type="text" class = "form-control status-box" name="refid" value="'.$refid.'" readonly required><br><br>
<input type="text" class = "form-control status-box" name="username" placeholder="USERNAME"  required><br><br>
<input type="email" class = "form-control status-box" name="email" placeholder="EMAIL" required><br><br>
<input type="password" class = "form-control status-box" name="password" placeholder="PASSWORD" required><br><br>
<input type="text" class = "form-control status-box" name="phonenumber" placeholder="CONTACT NO." required><br><br>
<input type="submit" class = "btn btn-primary" value="Submit" name="submit">
</form>';
?>

  <?php
if(isset($_SESSION['msg']))
{

	
			echo "<script>alert('".$_SESSION['msg']."')</script>";
			unset($_SESSION['msg']);
		}
    
    ?>
</body>  
  
</html>
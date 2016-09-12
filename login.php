<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
<link href = "tone_login.css" rel = "stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<title>V-ONE 智能系统</title>
</head>
<body>
<div class="login">
<div class="container">
<div class="part">
<?php

include "config.php";
session_start();

$form = <<<EOT

<form action="login.php" method="POST">
<h4>Username : </h4>
<input type="text" class = "form-control status-box" name="username" width="20px" required>
<br>
<h4>Password : </h4>
<input type="password" class = "form-control status-box" name="password" required>
<br>
<a href="forgetpass.php">Forgot password?</a>
<br>
<br>
<input type="submit" class = "btn btn-success" name="submit" value="Log in"><br>
</form>
EOT;


if(isset($_POST['submit'])){
	$username= $_POST["username"];
	$password= $_POST["password"];
	$sql = $con->query("SELECT * FROM tone WHERE username = '$username' AND password = '$password'") or die(mysqli_error());
	if(mysqli_num_rows($sql) > 0){
	$query = $con->query("SELECT * FROM tone WHERE username = '$username'");
		while ($row = mysqli_fetch_assoc($query)) {
		$user_db = $row["username"];
		$id = $row["id"];
            
		}
			if ($user_db == $username) {
				$_SESSION['username']=$username;
				$_SESSION['id']=$id;
		        header("Location: chart.php"); 
		       exit();
			}        
	}else{
echo '<script language="javascript">';
echo 'alert("Wrong username or password!")';
echo '</script>';
echo $form;
	}


}else{
echo $form;
}

?>

</div>
</div>
</div>
</body>
</html>

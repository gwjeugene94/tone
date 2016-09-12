<?php  
include "config.php";
session_start();  
  
if(!isset($_SESSION["username"])){  
  
    header("Location: tone.php");//redirect to login page to secure the welcome page without login access. 
} 
$id=$_SESSION['id'];

?>  
  
<html>  
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
<link href = "chart.css" rel = "stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<title>V-ONE 智能系统</title>
</head>
<body>  

			<div class="navbar">
				<ul class="nav navbar-nav navbar-middle">
                    <li class="page-scroll">
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
                </div>

    <?php
  
echo  '<h3><a href="refform.php?id='.$id.'">Generate My Link & View My Form:'.$_SESSION['id'].'</a></h3>';
?>

    <div class="graph">
    	<div class="container">
    		<?php
    		$username = $_SESSION["username"];
    		$sql = $con->query("SELECT * FROM tone WHERE username = '$username'");
			$result=mysqli_fetch_array($sql);
			echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['image'] ).'"/ class="img-responsive" alt="">';
    		?>
    	</div>
    </div>



</body>  
  
</html>
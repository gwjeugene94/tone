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
<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
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
<div class="wording">
    <?php
  
echo  '<h3><a href="refform.php?id='.$id.'">Generate My Link & View My Form:'.$_SESSION['id'].'</a></h3>';
?>
</div>
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
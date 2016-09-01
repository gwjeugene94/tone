<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
<link href = "tone.css" rel = "stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<title>V-ONE 智能系统</title>
</head>
<body id="page-top" class="index">


<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-middle">
                    <li class="page-scroll">
                        <a href="#tit">主页</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#abt">关于</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#adv">我们的优点</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#prob">新人的问题</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#cd">TE 好处</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#tb">TE 复制法</a>
                    </li>
                    <li class="page-scroll">
                        <a href="login.php">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<section id = "title2">
<div class = "title">
<a name="tit"></a>
<img src="img/1st.jpg" class="img-responsive" alt="">
</div>
</section>

<section id="about2">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="about">
    <a name="abt"></a>
            <img src="img/2nd.jpg" class="img-responsive" alt="">
                </div>
    </section>    

<section id="advantage2">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="advantage">
    <a name="adv"></a>
            <img src="img/3rd.jpg" class="img-responsive" alt="">
                </div>
    </section>
<section id="problem2">
<br>
<br>
<br>
<br>
<br>
<br>
<br>    
<div class="problem">
<a name="prob"></a>
            <img src="img/4th.jpg" class="img-responsive" alt="">
    </div>
</section>
<section id="card2">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="card">
    <a name="cd"></a>
            <img src="img/5th.jpg" class="img-responsive" alt="">
    </div>
</section>
<section id="table2">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="table">
    <a name="tb"></a>
            <img src="img/6th.jpg" class="img-responsive" alt="">
    </div>
</section>

    <div class="arrow">
        <a href="#myModal" class="btn btn-primary" data-toggle="modal">Join Us</a>
<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
<img src="img/new form-02.png" class="img-responsive" alt="" width="100%">
      </div>
<div class="modal-body">
<div class="column">
<div class="col-md-6 col-xs-3">
    <form  action="handler.php" method="POST">
<input type="text" class = "form-control status-box" name="username" placeholder="USERNAME" required><br><br>
<input type="email" class = "form-control status-box" name="email" placeholder="EMAIL" required><br><br>
<input type="password" class = "form-control status-box" name="password" placeholder="PASSWORD" required><br><br>
<input type="text" class = "form-control status-box" name="phonenumber" placeholder="CONTACT NO." required><br><br>
<input type="submit" class = "btn btn-primary" value="Submit" name="submit">
</form>
    <?php
if(isset($_SESSION['msg']))
{

	
			echo "<script>alert('".$_SESSION['msg']."')</script>";
			unset($_SESSION['msg']);
		}
    
    ?>
<br>
<br>
</div>
</div>


</div>
<div class="modal-footer">
</div>
    </div>
  </div>
</div>
    </div>
 <script src="http:////ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src = "js/bootstrap.min.js"></script>
 <script src="tone.js"></script>
</body>
</html>
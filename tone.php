<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<script language=JavaScript> var message="Function Disabled!"; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href = "css/bootstrap.min.css" rel = "stylesheet">
<link href = "tone_login.css" rel = "stylesheet">
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
 <script src="http:////ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src = "js/bootstrap.min.js"></script>
 <script src="tone.js"></script>
</body>
</html>
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

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#tit">主页</a></li>
            <li><a href="#abt">关于</a></li>
            <li><a href="#adv">我们的优点</a></li>
            <li><a href="#prob">新人的问题</a></li>
            <li><a href="#cd">TE 好处</a></li>
            <li><a href="#tb">TE 复制法</a></li>
            <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </div>
</nav>
    <section id = "title2">
<div class = "title">
<a name="tit"></a>
<img src="img/new_1st-02.jpg" class="img-responsive" alt="">
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
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
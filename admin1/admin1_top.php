<html>
<head>
<meta  charset="UTF-8">
<title>用户信息头</title>
</head>
<body style = " background:url(top6.png) no-repeat  center; background-color:RGB(47,85,151);">
	<br><br>
    <p style = "color:white;font-size:14px;float:left;letter-spacing:1px;">您好！, 
    <?php
    session_start();
       echo $_SESSION["login_name"]."(". $_SESSION["login_id"].")";
    ?> 欢迎登录！</p>
    <p style = "color:white;font-size:14px;float:right;letter-spacing:1px;">当前时间: <?php echo  date('y-m-d h:i:s',time())?> </p>
</body>
</html>
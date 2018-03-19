<?php
   require_once 'include.php';
   $link = connect();
   $userid = $_POST["userid"];
   $pass =  $_POST["password"];
   $username =  $_POST["username"];
   echo "输入的用户id为：" . $userid . "<br>";  
   echo "输入的密码为：" . $pass . "<br>";  
   echo "输入的用户名为：" . $username . "<br>";  
   InsertUser($link, $userid, $pass,$username);
   close($link);
   echo "<script>window.location.href='index.php';</script>"; 
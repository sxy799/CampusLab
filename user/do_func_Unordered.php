<?php  
//1. 获取要删除留言号  
session_start();
$a = $_GET["aa"];  
$b = $_GET["bb"];  
$c = $_GET["cc"];  
$user = "";

   require_once '../include.php';
   $link = connect();
   Unorder($link,$user,$a,$b,$c);
   close($link);
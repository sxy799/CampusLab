<?php

session_start();
$a = $_GET["aa"];  
require_once '../include.php';
   $link = connect();
   DeleAdmin($link,$a);
   close($link);
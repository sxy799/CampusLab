<?php
   require_once '../include.php';
   $link = connect();
   DeleAdmin($link,$_POST["login_id"]);
   close($link);
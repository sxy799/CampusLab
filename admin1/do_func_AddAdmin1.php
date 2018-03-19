<?php
   require_once '../include.php';
   $link = connect();
   InsertAdmin($link,$_POST["login_id"],$_POST["login_pass"],$_POST["login_name"]);
   close($link);
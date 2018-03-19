<?php
   require_once '../include.php';
   $link = connect();
   DeleLab($link,$_POST["lab_date"],$_POST["lab_class"],$_POST["lab_address"]);
   close($link);
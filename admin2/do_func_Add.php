<?php
   require_once '../include.php';
   $link = connect();
   InsertLab($link,$_POST["lab_date"],$_POST["lab_class"],$_POST["lab_address"],$_POST["lab_mangager"]);
   close($link);
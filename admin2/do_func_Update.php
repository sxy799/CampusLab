<?php
   require_once '../include.php';
   $link = connect();
   UpdateLab($link,$_POST["lab_address"],$_POST["lab_mangager"]);
   close($link);
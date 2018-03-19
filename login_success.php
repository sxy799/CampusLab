<?php
  echo "success";
  session_start();
  $userid =  $_SESSION["login_id"];
  $username =  $_SESSION["login_name"];
  setcookie('login_id',$userid);
  setcookie('login_name',$username);
  $flag = substr($userid,4,2);
  //1.判断是系统管理员
  if ($flag == "01")
  {
 	 header('Location:admin1/admin1_control.php');
  }
  //2.判断是实验室管理员
  else if ($flag == "02")
  {
 	header('Location:admin2/admin2_control.php');
  }
  //3.判断是普通用户
  else
  {
   echo "<script>window.location.href='user/user_control.php';</script>";  
  }

 ?>
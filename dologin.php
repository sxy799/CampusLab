<?php
    header("Content-Type:text/html;charset=UTF-8");
    $link = mysqli_connect(
    'localhost',  /* The host to connect to 连接MySQL地址 */
    'root',      /* The user to connect as 连接MySQL用户名 */
    'root',  /* The password to use 连接MySQL密码 */
    'lab_database');    /* The default database to query 连接数据库名称*/
    $program_char = "utf8" ;
    mysqli_set_charset( $link , $program_char );

   if (!$link) {
   // printf("Can't connect to MySQL Server. Errorcode: %s ", mysqli_connect_error());
    exit;
   }
   else
   { 
    $username = $_POST["username"];
    $pass =  $_POST["password"];
    echo "输入的用户名为：" . $username . "<br>";  
    echo "输入的密码为：" . $pass . "<br>";  

    $sql_select = "select * from  login_info where login_id = $username and login_password = $pass";
    $result = mysqli_query($link, $sql_select);
     if ($row = mysqli_fetch_array($result)) {
      // echo($row['login_id'] . " " . $row['login_password'] . " " . $row['loginname']."<br>");
        session_start();
        $_SESSION["login_id"]=$username;
        $_SESSION["login_name"]=$row['loginname'];

        header("Location: login_success.php"); 
     }
     else 
     {
         header("Location: login_fail.php"); 
     }
   }
/* Close the connection 关闭连接*/
mysqli_close($link);
?>
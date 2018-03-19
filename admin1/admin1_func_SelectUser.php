<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统管理员——普通用户</title>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
      <br> 
    <br>
     <h2 style = "text-align:center;"text>普通用户信息表格</h2>
      <table class="table table-striped table-bordered table-hover table-condensed" align="center"> 
        <tr> 
            <th> 
               用户ID
            </th> 
            <th> 
               用户密码
            </th> 
            <th> 
               用户名字
            </th> 
           <th> 
               销户操作
            </th> 
        </tr>
         <?php

        require_once '../include.php';
          $link = connect();
          SelectUser($link);
           close($link);
        ?>
    </table> 
</body>
</html>
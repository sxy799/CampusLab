<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>实验室管理员——实验室信息</title>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
      <br> 
    <br>
     <h2 style = "text-align:center;"text>实验室管理员信息表格</h2>
      <table class="table table-striped table-bordered table-hover table-condensed" align="center"> 
        <tr> 
            <th> 
               日期
            </th> 
            <th> 
               课节
            </th> 
            <th> 
               教室
            </th> 
            <th> 
               实验室负责人
            </th>
            <th> 
               是否预定
            </th>
            <th> 
               预定人Id
            </th>
        </tr>
         <?php
         require_once '../include.php';
          $link = connect();
           SelectLab($link);
           close($link);
        ?>
    </table> 
</body>
</html>
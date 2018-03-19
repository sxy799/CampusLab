<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>普通用户——可选信息</title>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
      <br> 
    <br>
     <h2 style = "text-align:center;"text>可选实验室信息表格</h2>
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
               预定操作
            </th>
        </tr>
         <?php
            require_once '../include.php';
            $link = connect();
           
           $sql_select = "select * from  lab_info where ordered = '否'";
           $result = mysqli_query($link, $sql_select);
           while($row = mysqli_fetch_array($result)){
            $add = $row['lab_address'];
            echo "<script> var para=\"$add\"; </script>"; 
           echo
          "<tr> 
            <td> ".
               $row['lab_date']."
            </td> 
            <td> ".
               $row['lab_class']."
            </td> 
            <td> "
               . $row['lab_address']."
            </td> 
            <td> "
               . $row['lab_mangager']."
            </td> 
            <td> "
               . $row['ordered']."
            </td> 
            <td> 
             
              <a href='do_func_Order.php ? aa=".$row['lab_date']."&bb=".$row['lab_class']."&cc=".$row['lab_address']."'>预定</a>
            </td> 
          </tr>";
            }
           close($link);
        ?>
    </table> 
</body>
</html>
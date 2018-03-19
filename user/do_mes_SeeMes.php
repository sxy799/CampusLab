<html>  
<head>  
<title>我的留言板</title>  
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>  
  function dodel(id){  
    if(confirm("确定要删除么？"))  
    {  
       window.location ='del.php?id='+id;   
    }  
}  
</script>  
</head>  
<body>  
<center>  
 <h2>我的留言板</h2>  
<a href = "user_func_Message.php">添加留言</a>  
<a href = "do_mes_SeeMes.php" >查看留言</a> 
<hr width = "90%">   
    <h2 style = "text-align:center;" >查看留言</h2>
      <table class="table table-striped table-bordered table-hover table-condensed" align="center"> 
        <tr>  
           <th>留言标题</th>  
               <th>留言人</th>  
               <th>留言内容</th>  
           <th>IP地址</th>  
     <th>留言时间</th>  
     <th>操作</th>  
    </tr>  
<?php  
  // 获取留言信息，解析后输出到表格中  
// 1.从留言liuyan.txt中获取留言信息  
  $info = file_get_contents("liuyan.txt");  
  // 2.去除留言内容最后的三个@@@符号  
  $info = rtrim($info,"@");  
  if(strlen($info)>=8){  
  // 3.以@@@符号拆分留言信息为一条一条的（将留言信息以@@@符号拆分成留言数组）  
  $lylist = explode("@@@",$info);  
     
  // 4.遍历留言信息数组，对每条留言做再次解析；  
  foreach($lylist as $k=>$v){  
   $ly = explode("##",$v);  
   echo "<tr>";  
   echo "<td>{$ly[0]}</td>";  
   echo "<td>{$ly[1]}</td>";  
   echo "<td>{$ly[2]}</td>";  
   echo "<td>{$ly[3]}</td>";  
   echo "<td>".date("Y-m-d H:i:s",$ly[4])."</td>";  
   echo "<td><a href = 'javascript:dodel({$k})'>删除</a></td>";  
   
  }  
  }  
     
?>  
</center>  
  
</body>  
</html>  
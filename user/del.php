<html>  
<head>  
<title>我的留言板</title>  
</head>  
<body>  
<center>  
 <h2>我的留言板</h2>  
<a href = "user_func_Message.php">添加留言</a>  
<a href = "do_mes_SeeMes.php" >查看留言</a> 
<hr width = "90%">  
<h3>删除留言</h3>  
   
<?php  
//1. 获取要删除留言号  
$id = $_GET["id"];  
// 2.从留言liuyan.txt中获取留言信息  
  $info = file_get_contents("liuyan.txt");  
   
  //3.（将留言信息以@@@符号拆分成留言数组）  
  $lylist = explode("@@@",$info);  
  //4.使用unset删除指定的id留言  
  unset($lylist[$id]);  
  //还原留言信息为字串，并写回留言文件  
  $newinfo = implode("@@@",$lylist);  
  file_put_contents("liuyan.txt",$newinfo);  
  echo "删除成功！";  
  
   
     
?>  
</center>  
  
</body>  
</html>
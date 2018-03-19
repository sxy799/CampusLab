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
<h3 >添加留言</h3>  
 <?php  
    //执行留言信息添加操作  
//1.获取要添加的留言信息，并补上其他辅助信息（ip地址、添加时间）  
$title = $_POST["title"];  
$author = $_POST["author"];  
$content = $_POST["content"];  
$ip = $_SERVER["REMOTE_ADDR"];  
$addtime = time();  
//2.拼装留言信息  
$ly = "{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";  
//echo $ly;  
//3. 将留言添加到liuyan.txt文件中  
$info = file_get_contents("liuyan.txt");  
file_put_contents("liuyan.txt",$info.$ly);  
echo "</br>";  
//file_put_contents("liuyan.txt",$ly); 直接输出会覆盖上一条留言！  
//4.输出留言成功！  
echo "留言成功！";  
  
 ?>  
</center>  
  
</body>  
</html
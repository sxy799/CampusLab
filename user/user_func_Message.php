<html>  
<head>  
<title>我的留言板</title>  
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>  
<body> 
<div style="margin:0 auto;">
    <h2 style="margin-left:600px; " >我的留言板</h2>  
     <a style="margin-left:600px; " href = "user_func_Message.php">添加留言</a>  
     <a href = "do_mes_SeeMes.php" >查看留言</a>  
    <hr width = "90%">  
</div>   
<h3 style="margin-left:600px; ">添加留言</h3>  
<form action="do_mes_AddMes.php" method="post" style = "padding-left:500px;">
  <table style = "margin:0 auto;">
        <tbody>
         <tr>
          <div class="input-group" style = "width:300px;  margin-top:20px;">
           <span class="input-group-addon">标题</span>
           <input  name = "title" type="text" class="form-control" placeholder="输入留言标题" >
        </div>
        </tr>
        <tr>
            <div class="input-group" style = "width:300px; margin-top:20px;">
           <span class="input-group-addon">留言者:</span>
           <input  name = "author" type="text" class="form-control" placeholder="输入留言者id" >
         </div>
        </tr>
         <tr>
          <div class="form-group">
            <label for="name">留言内容</label>
            <textarea style="width:600px;" name = "content" class="form-control" rows="3"></textarea>
          </div>
          </tr>
        
         </tbody>
 </table>
<p>
 <button type="submit" class="btn btn-primary btn-lg" style = "margin-top:20px;"> 提 交 </button>
  <button type="reset" class="btn btn-primary btn-lg" style = "margin-left:20px; margin-top:20px;"> 重 置 </button>
</p>
</form> 
</body>  
</html>
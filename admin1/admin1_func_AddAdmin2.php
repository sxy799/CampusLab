<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统管理——开户（实验室管理员）</title>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h2 style = "text-align:center;" >开户（实验室管理员）信息登记表</h2>
  <form action="do_func_AddAdmin1.php" method="post" style = "padding-left:500px;">
  <table style = "margin:0 auto;">
  <tbody>
   <tr>
    <div class="input-group" style = "width:300px;  margin-top:20px;">
	   <span class="input-group-addon">用户ID</span>
	   <input  name="login_id" type="text" class="form-control" placeholder="输入用户ID" >
	</div>
  </tr>
  <tr>
      <div class="input-group" style = "width:300px; margin-top:20px;">
	   <span class="input-group-addon">密 码:</span>
	   <input  name="login_pass" type="password" class="form-control" placeholder="输入密码" >
	 </div>
  </tr>
  <tr>
  <div class="input-group" style = "width:300px; margin-top:20px;">
	   <span class="input-group-addon">重复密码:</span>
	   <input  type="password" class="form-control" placeholder="重复密码" >
	 </div>
  </tr>
  <tr>
     <div class="input-group" style = "width:300px; margin-top:20px;">
	   <span class="input-group-addon">用户名:</span>
	   <input  name="login_name" type="text" class="form-control" placeholder="输入用户名" >
	 </div>
  </tr>
   </tbody>
 </table>
<p >
 <button type="submit" class="btn btn-primary btn-lg" style = "margin-top:20px;"> 提 交 </button>
  <button type="reset" class="btn btn-primary btn-lg" style = "margin-left:20px; margin-top:20px;"> 重 置 </button>
</p>
</form>
</body>
</html>
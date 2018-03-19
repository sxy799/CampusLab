<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>实验管理——删除实验信息</title>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <h2 style = "text-align:center;" >删除实验信息登记表</h2>
  <form action="do_func_Dele.php" method="post" style = "padding-left:500px;">
  <table style = "margin:0 auto;">
  <tbody>
   <tr>
    <div class="input-group" style = "width:300px;  margin-top:20px;">
	   <span class="input-group-addon">日期</span>
	   <input  name="lab_date" type="text" class="form-control" placeholder="输入yyyymmdd格式日期" >
	</div>
  </tr>
  <tr>
       <div class="input-group" style = "width:300px; margin-top:20px;">
     <span class="input-group-addon">选择课节</span>
     <div class="row">
      <div class="col-lg-6">
        <div class="input-group">
          <span class="input-group-addon">
            <input type="radio" value="1" name="lab_class" checked>第1节
          </span>
          <span class="input-group-addon">
            <input type="radio" value="2" name="lab_class" >第2节
          </span>
          <span class="input-group-addon">
            <input type="radio" value="3" name="lab_class" >第3节
          </span>
          <span class="input-group-addon">
            <input type="radio" value="4" name="lab_class" >第4节
          </span>
        </div><!-- /input-group -->
      </div><!-- /.col-lg-6 --><br>
    </div><!-- /.row -->
   </div>
  </tr>
  <tr>
  <div class="input-group" style = "width:300px; margin-top:20px;">
	   <span class="input-group-addon">教室号:</span>
	   <input  name="lab_address" type="text" class="form-control" placeholder="输入J302格式的教室号" >
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
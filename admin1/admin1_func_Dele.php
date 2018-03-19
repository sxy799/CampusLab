<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>系统管理——销户</title>
<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h2 style = "text-align:center;">输入用户Id销户</h2>
<form action="do_func_Dele.php" method="post">
			<div   class="row">
              <div  class="col-lg-6">
                <p> 输入要销户用户Id:</p>
                  <div  class="input-group">
                       <input name="login_id" type="text" class="form-control">
                       <span class="input-group-btn">
                            <button class="btn btn-default"  type = "submit">
                                                                                确定
                            </button>
                       </span>
                  </div><!-- /input-group -->
              </div><!-- /.col-lg-6 -->
   </div><!-- /.row -->
</form>
</body>
</html>
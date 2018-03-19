<?php
header("Content-Type:text/html;charset=UTF-8");
   function connect() {
	   $link = mysqli_connect(
	    'localhost',  /* The host to connect to 连接MySQL地址 */
	    'root',      /* The user to connect as 连接MySQL用户名 */
	    'root',  /* The password to use 连接MySQL密码 */
	    'lab_database');    /* The default database to query 连接数据库名称*/
	    $program_char = "utf8" ;
	    mysqli_set_charset( $link , $program_char );
	    return $link;
    } 
     function SelectAdmin1($link)
    {
	     $sql_select = "select * from  login_info where login_id like '150401%'";
	     $result = mysqli_query($link, $sql_select);
	     while($row = mysqli_fetch_array($result)){
	         echo
          "<tr> 
            <td> ".
               $row['login_id']."
            </td> 
            <td> ".
               $row['login_password']."
            </td> 
            <td> "
               . $row['loginname']."
            </td> 
             <td> 
                <a href='do_func_DeleClick.php ? aa=".$row['login_id']."'>销户</a>
            </td> 
          </tr>";
	    }
    }
    function SelectAdmin2($link)
    {
	     $sql_select = "select * from  login_info where login_id like '150402%'";
	     $result = mysqli_query($link, $sql_select);
	     while($row = mysqli_fetch_array($result)){
	        echo
          "<tr> 
            <td> ".
               $row['login_id']."
            </td> 
            <td> ".
               $row['login_password']."
            </td> 
            <td> "
               . $row['loginname']."
            </td> 
             <td> 
                <a href='do_func_DeleClick.php ? aa=".$row['login_id']."'>销户</a>
            </td> 
          </tr>";
	    }
    }
    function SelectUser($link)
    {
	     $sql_select = "select * from  login_info where login_id like '150403%'";
	     $result = mysqli_query($link, $sql_select);
	     while($row = mysqli_fetch_array($result)){
	        echo
	        "<tr> 
            <td> ".
               $row['login_id']."
            </td> 
            <td> ".
               $row['login_password']."
            </td> 
            <td> "
               . $row['loginname']."
            </td> 
            <td> 
                <a href='do_func_DeleClick.php ? aa=".$row['login_id']."'>销户</a>
            </td> 
          </tr>";
	    }
    }
    //insert into login_info values('1504010508','1504010508','孙中山');
    function InsertAdmin($link,$login_id,$login_pass,$login_name)
    {
      $sql_inset = "insert into login_info values('$login_id','$login_pass','$login_name')";
      if (empty($login_id)||empty($login_pass)||empty($login_name))
      {
         echo "<script>alert('开户失败');</script>";
         exit;
      }
	    if (mysqli_query($link, $sql_inset)) {
	        echo "<script>alert('开户成功');</script>";
		  }
	 }
   function DeleAdmin($link,$login_id)
   {
      $sql_delete = "delete from login_info where login_id = '$login_id'";
      //echo $sql_delete;
      if (empty($login_id))
        {
           echo "<script>alert('您的输入为空');</script>";
           exit;
        }
      if (mysqli_query($link, $sql_delete)) {
         echo "<script>alert('销户成功！');</script>";
      } 
      else
      {
         echo "<script>alert('销户失败！');</script>";
      }
   }
   function SelectLab($link)
   {
      $sql_select = "select * from  lab_info ";
       $result = mysqli_query($link, $sql_select);
       while($row = mysqli_fetch_array($result)){
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
            <td> "
               . $row['ordered_userid']."
            </td> 
          </tr>";
      }
   }
    function InsertLab($link,$lab_date,$lab_class,$lab_address,$lab_mangager)
    {
      $sql_inset = "insert into lab_info  (lab_date,lab_class,lab_address,lab_mangager)values('$lab_date','$lab_class','$lab_address','$lab_mangager')";
      if (empty($lab_date)||empty($lab_class)||empty($lab_address)||empty($lab_mangager))
      {
         echo "<script>alert('增加信息失败');</script>";
         exit;
      }
      if (mysqli_query($link, $sql_inset)) {
          echo "<script>alert('增加信息成功');</script>";
      }
    }
     function DeleLab($link,$lab_date,$lab_class,$lab_address)
   {
      $sql_delete = "delete from lab_info where lab_date = '$lab_date' and lab_class = '$lab_class' and lab_address = '$lab_address'";
      echo $sql_delete;
       if (empty($lab_date)||empty($lab_class)||empty($lab_address))
      {
         echo "<script>alert('您的输入不合法');</script>";
         exit;
      }
      if (mysqli_query($link, $sql_delete)) {
         echo "<script>alert('删除信息成功！');</script>";
      } 
      else
      {
         echo "<script>alert('删除信息失败！');</script>";
      }
   }
   ///UPDATE lab_info SET lab_mangager ='1504020503' where lab_address = 'J302';
    function UpdateLab($link,$lab_address,$lab_mangager)
   {
      $sql_update = "UPDATE lab_info SET lab_mangager ='$lab_mangager' where lab_address = '$lab_address'";
      //echo $sql_update;
       if (empty($lab_mangager)||empty($lab_address))
      {
         echo "<script>alert('您的输入不合法');</script>";
         exit;
      }
      if (mysqli_query($link, $sql_update)) {
         echo "<script>alert('更改信息成功！');</script>";
      } 
      else
      {
         echo "<script>alert('更改信息失败！');</script>";
      }
   }
   function SelectForUserOrdered($link,$user_id)
   {
      $sql_select = "select * from  lab_info where  ordered_userid = '$user_id'";
       $result = mysqli_query($link, $sql_select);
       while($row = mysqli_fetch_array($result)){
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
            <td> "
               . $row['ordered_userid']."
            </td> 
          </tr>";
      }
   }
   function Order($link,$user_id,$lab_date,$lab_class,$lab_address)
   {
      
       $sql_update = "UPDATE lab_info SET ordered_userid ='$user_id' where lab_date = '$lab_date' and lab_class = '$lab_class' and lab_address = '$lab_address'";
      if (mysqli_query($link, $sql_update)) {
         echo "<script>alert('预定成功！');</script>";
      } 
      else
      {
         echo "<script>alert('预定失败！');</script>";
      }
   }
   function Unorder($link,$user_id,$lab_date,$lab_class,$lab_address)
   {
      
       $sql_update = "UPDATE lab_info SET ordered_userid ='$user_id' where lab_date = '$lab_date' and lab_class = '$lab_class' and lab_address = '$lab_address'";
      if (mysqli_query($link, $sql_update)) {
         echo "<script>alert('退订成功！');</script>";
      } 
      else
      {
         echo "<script>alert('退订失败！');</script>";
      }
   }
   function InsertUser($link,$user_id,$user_pass,$user_name)
   {
      $sql_inset = "insert into login_info  values('$user_id','$user_pass','$user_name')";
      //echo $sql_inset;
      if (mysqli_query($link, $sql_inset)) {
          echo "<script> alert('注册成功,为您跳转至登录页面'); </script>";
      }
      else
      {
         echo "<script>alert('注册失败！');</script>";
      }
   }
	 function close($link)
	 {
	 	mysqli_close($link);
	 }
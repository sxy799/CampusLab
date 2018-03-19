<?php
     ///1.定义数组
    $arr = array( 
    "0" => array( 
        "gameName" => "德乙", 
        "homeName" => "比勒费尔德", 
        "guestName" => "不伦瑞克", 
        "endTime" => "2015-08-21" 
       ), 
    "1" => array( 
        "gameName" => "英超", 
        "homeName" => "水晶宫", 
        "guestName" => "阿斯顿维拉", 
        "endTime" => "2015-08-22" 
      ) 
    ); 
    ///2.序列化数组
     $serialize = serialize($arr); 
     echo $serialize;

     print_r(unserialize($serialize)); 
     echo "<script>var para=\"$para\"</script>";//传递给javascript
?> 
<script type="text/javascript">
</script>
<?php
$hello=array('1','2','3');//创建一个数组，
$hellojson=json_encode($hello);并且将数组变成为json格式
echo <<<eot
<script type="text/javascript">
var josn_js=$hellojson;
</script>
eot

//这些代码就实现了将数组从php到js中。
?>
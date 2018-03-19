<?php     
session_start();     
     
if ($_POST['submit'] == "go"){     
    //check token     if ($_POST['token'] == $_SESSION['token']){     
        //strip_tags     $name = strip_tags($_POST['name']);     
        $name = substr($name,0,40);     
        //clean out any potential hexadecimal characters     $name = cleanHex($name);     
        //continue processing....         }else{     
        //stop all processing! remote form posting attempt!         }     
}     
     
$token = md5(uniqid(rand(), true));     
$_SESSION['token']= $token;     
     
 function cleanHex($input){     
    $clean = preg_replace("![\][xX]([A-Fa-f0-9]{1,3})!", "",$input);     
    return$clean;     
}     
?>     
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">     
<p><label for="name">Name</label>     
<input type="text" name="name" size="20" maxlength="40"/></p>     
<input type="hidden" name="token" value="<?php echo $token;?>"/>     
<p><input type="submit" name="submit" value="go"/></p>     
</form>
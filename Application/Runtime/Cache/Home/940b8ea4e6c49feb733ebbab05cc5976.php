<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>跳转提示</title>
    <script src="./Application/Home/View/Public/tipDialog/js/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./Application/Home/View/Public/tipDialog/css/tipDialog.css"/>
    <script type="text/javascript" src="./Application/Home/View/Public/tipDialog/js/tipDialog.js"></script>
</head>
<body>
    <?php if(isset($message)) {?>
        <script>
            $(function(){
                tipDialog('<?php echo $message ?>','ok','',1);
                setTimeout(function(){
                    window.location='<?php echo($jumpUrl); ?>';
                },1000);
            })    
        </script>
    <?php }else{ ?>
        <script>
            $(function(){
                tipDialog('<?php echo $error ?>','error','',1);
                setTimeout(function(){
                    window.location='<?php echo($jumpUrl); ?>';
                },1000);
            })    
        </script>
    <?php } ?>
</body>
</html>
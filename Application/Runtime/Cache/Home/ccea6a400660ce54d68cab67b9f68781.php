<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>用户登录</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="Public/amaze-css/assets/i/favicon.png">
  <link rel="stylesheet" href="Public/amaze-css/assets/css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
	<!-- body{background-image:url(Public/amaze-css/assets/image/login-back.jpg)} -->
	body{background-color:#e7e7e7;}
  </style>
</head>
<body>
<div class="header">
  <div class="am-g"><br>
   	<a href="/classManage/index.php"><img src="./Public/image/login.png" width="133" height="133" border="0" alt=""></a> 
   
  </div>

</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">
     <form method="post" class="am-form" action="/classManage/?s=/Home/Index/checkLogin">
      <label >用户名:</label>
      <input type="text" name="user" value="" placeholder="输入用户名" >
      <br>
      <label >密码:</label>
      <input type="password" name="pwd"  value="" placeholder="输入密码" >
         
	  <p class="top15 captcha" id="captcha-container">
			<label >验证码:</label>
            <input name="verify" size=500 class="" placeholder="输入验证码" type="text">   <br>
			<img onClick="this.src=this.src+'?'+Math.random()" width="20%" class="am-fr" height="80" alt="验证码" src="<?php echo U('Home/Index/verify',array());?>" title="点击刷新">
		 <input type="checkbox" name='auto' class='auto' id='auto' checked='1'/>
            <label for="auto">记住我，下次自动登录</label>
	</p>
       <div class="am-cf">
	  <a class="am-text-primary am-text-lg-18px am-btn am-btn-default am-btn-sm am-fr" href="/classManage/index.php?s=/Home/Index/register">无账号？点此注册</a>

        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
		
        <a href="/classManage/index.php?s=/Home/Index/resetpwd"  class="am-btn am-btn-primary am-btn-sm am-fr">忘记密码？</a>
	
		
		
      </div>
    </form>
   
   <p class="am-center">© 2015 </p>
  </div>
</div>

<script language="JavaScript">
var captcha_img = $('#captcha-container').find('img')
var verifyimg = captcha_img.attr("src");
captcha_img.attr('title', '点击刷新');
captcha_img.click(function(){
	if( verifyimg.indexOf('?')>0){
        $(this).attr("src", verifyimg+'&random='+Math.random());
    }else{
        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());
    }
});


</script>
</body>
</html>
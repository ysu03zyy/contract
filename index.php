
<!DOCTYPE>
<html>
  <head>
    <title>演示平台-用户登录</title>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<link href="libs/css/bootstrap.css" rel="stylesheet">
	<link href="libs/css/sample.css" rel="stylesheet">
	<script type="text/javascript">
		var error = "<?php $_POST['error']?>";
		if(''!=error){
			alert(error);
		}
	</script>
  </head>
  <body>
   <div class="container backwhite">
   	 <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="reg.php">注册</a></li>
            <li role="presentation" class="active"><a href="login.php">登录</a></li>            
          </ul>
        </nav>
        <h3 class="text-muted"><img src="libs/image/logo.png"></h3>
      </div>
      <form class="form-signin" action="application/login.php" id="loginform" method="post">
        <h2 class="form-signin-heading">用户登录</h2>
        <label for="email" class="sr-only">邮箱</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="邮箱" value="" required autofocus>
        <label for="userPwd" class="sr-only">密码</label>
        <input type="password" id="userPwd" name="userPwd" class="form-control" placeholder="密码" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登 录</button>
      </form>
       <footer class="footer backwhite">
      	<p>
      		© 2014-2015 法大大网络科技有限公司版权所有. 保留一切权利. 粤ICP备14100822号-1 
      	</p>
    	</footer>
    </div>
     <script src="libs/js/jquery.min.js"></script>
     <script src="libs/js/bootstrap.min.js"></script>
  </body>
</html>

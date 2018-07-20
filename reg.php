
<!DOCTYPE>
<html>
  <head>
    <title>演示平台-用户注册</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<meta http-equiv="description" content="This is my page">
	<link href="libs/css/bootstrap.css" rel="stylesheet">
	<link href="libs/css/sample.css" rel="stylesheet">
	<script src="libs/js/jquery.min.js"></script>
    <script src="libs/js/bootstrap.min.js"></script>
    <script src="libs/js/jquery.form.js"></script>
    <script type="text/javascript">
		function register(){
			 
			var email = $("#email").val();
			var customerName = $("#customerName").val();
			var idCard = $("#idCard").val();
			var mobile = $("#mobile").val();
			var userPwd = $("#userPwd").val();
			var pattern = /^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/;  
		    if (!pattern.test(email)) {  
		        alert("请输入正确的邮箱地址");  
		        return false;  
		    }  
		    if(!customerName){
				alert("姓名不能为空");
				return false;
		    }	
		    var idcardPattern = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;  
		    if(!idcardPattern.test(idCard))  
		    {  
		        alert("身份证输入不合法");  
		        return  false;  
		    }  
		    var mobilePattern = /^0?1[3|4|5|8][0-9]\d{8}$/;
		    if (!mobilePattern.test(mobile)) {
		         alert("手机号码有误");
		         return false;
		    }
		    if(!userPwd){
				alert("密码不能为空");
				return false;
		    }	
		    $("#regform").submit(); 
		}	
	</script>
  </head>
  <body>
   <div class="container backwhite">
   	 <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="reg.php">注册</a></li>
            <li role="presentation"><a href="login.php">登录</a></li>            
          </ul>
        </nav>
        <h3 class="text-muted"><img src="libs/image/logo.png"></h3>
      </div>
      <form class="form-signin" action="application/reg.php?act=reg" id="regform" method="post">
        <h2 class="form-signin-heading">用户注册</h2>
        <label for="email" class="sr-only">邮箱</label>
        <input type="email"  name="email" id="email" value="" class="form-control" placeholder="邮箱" required>
        <label for="customerName" class="sr-only">姓名</label>
        <input type="text"  name="customerName" id="customerName" value=""   class="form-control" placeholder="姓名" required>
        <label for="idCard" class="sr-only">身份证</label>
        <input type="text"  name="idCard" id="idCard" value="" class="form-control" placeholder="身份证" required autofocus>
         <label for="mobile" class="sr-only">手机</label>
        <input type="tel"  name="mobile" id="mobile" value=""  class="form-control" placeholder="手机" required>
         <label for="userPwd" class="sr-only">密码</label>
        <input type="password"  name="userPwd" id="userPwd" class="form-control" placeholder="密码" required>
         <input class="btn btn-lg btn-primary btn-block" value="提交" type="button" onclick="register()">
      </form>
       <footer class="footer backwhite">
      	<p>
      		© 2014-2015 法大大网络科技有限公司版权所有. 保留一切权利. 粤ICP备14100822号-1 
      	</p>
    	</footer>
    </div>
  </body>
</html>

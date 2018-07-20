<?php
session_start();
?>
<!DOCTYPE>
<html>
  <head>
    
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
		function loan(){
			$('#loan').submit();
		}
	</script>
  </head>
  
  <body>
   <div class="container backwhite">
   	 <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active">欢迎您：<?php echo $_SESSION ['email']?></li>            
          </ul>
        </nav>
        <h3 class="text-muted"><img src="libs/image/logo.png"></h3>
      </div>
      <div class="investors pt40">
        <img src="libs/image/in-a.jpg" usemap="#Map">
      </div>
       <footer class="footer backwhite">
      	<p>
      		© 2014-2015 法大大网络科技有限公司版权所有. 保留一切权利. 粤ICP备14100822号-1 
      	</p>
    	</footer>
    </div>
    <map name="Map" id="Map">
	  		<area shape="rect" coords="199,288,341,331" href="javascript:void(0);" onclick="return loan();" />
	</map>
    <form action="application/extsign.php" id="loan" method="post">
	</form>
     <script src="libs/js/jquery.min.js"></script>
     <script src="libs/js/bootstrap.min.js"></script>
  </body>
</html>

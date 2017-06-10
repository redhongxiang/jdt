<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录页面</title>
	<script type="text/javascript" src='js/jquery-1.11.0.min.js'></script>
	<script type="text/javascript" src='js/jquery.cookie.js'></script>
	<script type="text/javascript">
			$(function(){
				$("#sub").click(function(){
					$.ajax({
						url:"check.php",
						type:"POST",
						data:{"userName":$("#userName").val(),"pwd":$("#pwd").val(),"info":$("#info").val()},
						dataType:"json",
						success:function(data){
							if (data.status==1) {
								location.href="manager.php";
							}else{
								$("#tips").html(data.msg);
								}
						}
					});
				});
				$("#userName").focus(function(){
					$("#tips").html("");
				});
				$("#pwd").focus(function(){
					$("#tips").html("");
				});
				var userName=$.cookie("userName");
				var pwd=$.cookie("pwd");
				if (userName!="" && pwd!="") {
					$.ajax({
						url:"check.php",
						type:"POST",
						data:{"userName":userName,"pwd":pwd},
						dataType:"json",
						success:function(data){
							 if(data.status==1){
				 location.href="manage.php";
				 }
						}
					});

				}
			});

	</script>
</head>
<body>
	<span id="tips"></span>
	<label for="userName">用户名：</label>
	<input type="text" id="userName"><br>
	<label for="pwd">密&nbsp;码：</label>
	<input type="password" id="pwd"><br>
	<input type="checkbox" id="info" value="yes">十天免登录
	<br>
	<input type="button" id="sub" value="登录">
</body>
</html>
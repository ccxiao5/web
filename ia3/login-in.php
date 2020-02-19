<?php session_start();//使用session传值
error_reporting(E_ALL^E_DEPRECATED);
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="./plugins/layui/css/layui.css" rel="stylesheet" />
	<link href="./plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="./build/css/login.css" rel="stylesheet" />
	<link href="./plugins/sideshow/css/normalize.css" rel="stylesheet" />
	<link href="./plugins/sideshow/css/demo.css" rel="stylesheet" />
	<link href="./plugins/sideshow/css/component.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<title>网易云音乐评价系统</title>

	<style>
	html{
		font-family:sans-serif;
		-ms-text-size-adjust:100%;
		-webkit-text-size-adjust:100%
	}
	body{
		margin:0
	}
	article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{
		display:block
	}
	audio,canvas,progress,video{
		display:inline-block;vertical-align:baseline
	}
	audio:not([controls]){
		display:none;height:0
	}
	[hidden],template{
		display:none
	}
	a{
		background:transparent
	}
	a:active,a:hover{
		outline:0
	}
	abbr[title]{
		border-bottom:1px dotted
	}
	b,strong{
		font-weight:bold
	}
	dfn{
		font-style:italic
	}
	h1{
		font-size:2em;margin:0.67em 0
	}
	mark{
		background:#ff0;color:#000
	}
	small{
		font-size:80%
	}
	sub,sup{
		font-size:75%;
		line-height:0;
		position:relative;
		vertical-align:baseline
	}
	sup{
		top:-0.5em
	}
	sub{
		bottom:-0.25em
	}
	img{
		border:0
	}
	svg:not(:root){
		overflow:hidden
	}
	figure{
		margin:1em 40px
	}
	hr{
		-moz-box-sizing:content-box;
		box-sizing:content-box;
		height:0
	}
	pre{
		overflow:auto
	}
	code,kbd,pre,samp{
		font-family:monospace, monospace;
		font-size:1em
	}
	button,input,optgroup,select,textarea{
		color:inherit;font:inherit;margin:0
	}
	button{
		overflow:visible
	}
	button,select{
		text-transform:none
	}
	button,html input[type="button"],input[type="reset"],input[type="submit"]{
		-webkit-appearance:button;cursor:pointer
	}
	button[disabled],html input[disabled]{
		cursor:default
	}
	button::-moz-focus-inner,input::-moz-focus-inner{
		border:0;padding:0
	}
	input{
		line-height:normal
		}input[type="checkbox"],input[type="radio"]{-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}
		canvas {
			position: absolute;
			z-index: -1;
		}

		.kit-login-box header h1 {
			line-height: normal;
		}

		.kit-login-box header {
			height: auto;
		}

		.content {
			position: relative;
		}

		.codrops-demos {
			position: absolute;
			bottom: 0;
			left: 40%;
			z-index: 10;
		}

		.codrops-demos a {
			border: 2px solid rgba(242, 242, 242, 0.41);
			color: rgba(255, 255, 255, 0.51);
		}

		.kit-pull-right button,
		.kit-login-main .layui-form-item input {
			background-color: transparent;
			color: white;
		}

		.kit-login-main .layui-form-item input::-webkit-input-placeholder {
			color: white;
		}

		.kit-login-main .layui-form-item input:-moz-placeholder {
			color: white;
		}

		.kit-login-main .layui-form-item input::-moz-placeholder {
			color: white;
		}

		.kit-login-main .layui-form-item input:-ms-input-placeholder {
			color: white;
		}

		.kit-pull-right button:hover {
			border-color: #009688;
			color: #009688
		}
	</style>

	<style>
	label.radio {
		display: inline-block;
		height: 24px;
		width: 24px;
		position: relative;
		margin: 0 5px 5px 0;
		padding: 0;
		font-size: 1.1em;
		font-color: white;
		background-color: #cfcfcf;
		border-radius: 100%;
		vertical-align: top;
		box-shadow: 0 1px 15px rgba(0, 0, 0, 0.1) inset, 0 1px 4px rgba(0, 0, 0, 0.1) inset, 1px -1px 2px rgba(0, 0, 0, 0.1);
		cursor: pointer;
		transition: all 0.2s ease;
	}
	label.radio > span.pip {
		width: 16px;
		height: 16px;
		position: absolute;
		border-radius: 100%;
		background: blue;
		top: 4px;
		left: 4px;
		box-shadow: 0 2px 5px 1px rgba(0, 0, 0, 0.3), 0 0 1px rgba(255, 255, 255, 0.4) inset;
		background-image: linear-gradient(#ffffff 0, #e7e7e7 100%);
		transform: scale(0, 0);
		transition: all 0.2s ease;
	}
	label.radio.on {
		background-color: #05abe0;
	}
	label.radio.on > span.pip {
		transform: scale(1, 1);
	}
	label.radio.focus {
		outline: 0;
		box-shadow: 0 1px 15px rgba(0, 0, 0, 0.1) inset, 0 1px 4px rgba(0, 0, 0, 0.1) inset, 1px -1px 2px rgba(0, 0, 0, 0.1), 0 0 8px #52a8ec, 0 0 1px 1px rgba(0, 0, 0, 0.75) inset;
	}
	input[type=checkbox].replaced,
	input[type=radio].replaced {
		position: absolute;
		left: -9999em;
	}
	body {
		display: block;
	}
	.wrapper {
		width: 300px;
		margin: 30px auto;
	}
	label {
		display: block;
		height: 30px;
		padding-left: 5px;
		line-height: 30px;
		font-size: 14px;
		font-family: "Microsoft YaHei";
		color:#fff;
	}
	h2 {
		color: #fff;
		text-align: center;
		width: 560px;
		margin: 0 auto;
		line-height: 1.2em;
	}
	form{
		width: 100%;
		margin: 0;
	}
	.form{
		font-family: "Roboto",sans-serif;
	}
</style>

<script src="js/prefixfree.min.js"></script>
<script src="js/modernizr.js"></script>

</head>

<body class="kit-login-bg">

	<?php 
//header("Content-Type: text/html;charset=utf-8"); 
	if(!isset($_POST['submit'])){ 
//如果没有表单提交，显示一个表单 
		?> 
		<div class="container demo-1">
			<div class="container demo-1">
				<div class="content">
					<div id="large-header" class="large-header">
						<canvas id="demo-canvas"></canvas>
						<div class="kit-login-box">
							<header>
								<h1>网易云音乐评价系统</h1>
							</header>
							<div class="kit-login-main main">
								<form  class="layui-form" method="post">
									<div class="layui-form-item">  
										<label>请选择角色：&nbsp;&nbsp;					    
											<input type="radio" id="rad46" name="role"value="spe">专家&emsp;&emsp;
											<input type="radio" id="rad47" name="role"value="admin">管理员&emsp;&emsp;
										</label>                               
									</div>
									<div class="layui-form-item">
										<input  name="number" type="text"  lay-verify="required" autocomplete="off" placeholder="输入学号" class="layui-input" style="padding-left:5px;"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
									</div>
									<div class="layui-form-item">
										<div class="kit-pull-right submit">
											<a  class="layui-btn layui-btn-primary" style="display:block;background: transparent; color:White;">
												<i  class="fa fa-sign-in" aria-hidden="true"></i> <input type="submit" name="submit" value="登录" style="padding-left:0px;">
											</a>
										</div>

										<div class="kit-clear"></div>
									</div>
								</form>
							</div>
							<footer>
								<p>德尔菲法  <br><a href="#" style="color:white; font-size:18px;" target="_blank">杨焯雅_程虎威_房清华</a></p>
							</footer>
						</div>
					</div>
				</div>
			</div>
			<script src='js/jquery.js'></script>	
			<script src="js/index.js"></script>
			<script type="text/javascript" src="./plugins/layui/layui.js"></script>
			<script type="text/javascript" src="./plugins/sideshow/js/TweenLite.min.js"></script>
			<script type="text/javascript" src="./plugins/sideshow/js/EasePack.min.js"></script>
			<script type="text/javascript" src="./plugins/sideshow/js/rAF.js"></script>
			<script type="text/javascript" src="./plugins/sideshow/js/demo-1.js"></script>
		</body>
		</html>
		<?php 
	} 
	else
	{ 
//如果提交了表单 
//数据库连接参数 
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "ia_db";
		$db = new mysqli($host, $user, $pass,$db) or die("Unable to connect!");
		$db->set_charset("utf8");
		$queryString = $db->real_escape_string($_POST['role']);
		if($queryString=='admin') {
			$query = "select * from user where name = '{$_POST['number']}'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1){
				$url = "../ia_admin/index.html";
				echo "<meta http-equiv=refresh content='0; url=$url'>";
			}		
			else{
				echo '<div class="main" style="margin:7em auto 0;width:84%;"><h2 style="font-size: 1em;text-align: center;color:#fff;padding:1em 0;width: 80%;font-family:sans-serif;">您不是本系统管理员！</h2></div><br> ' ;			
			}	
		}else{
			$query = "select * from professor where number = '{$_POST['number']}'";
			$query2 = "select * from professor ";
			$result = mysqli_query($db, $query);
			$result2 = mysqli_query($db, $query2);
			$_SESSION['professor_num']=$_POST['number'];//保存学号
			if (mysqli_num_rows($result) == 1){
				echo "<div class='main' style='margin:7em auto 0;width:84%;'><div class='submit'><a style='color:white;'
				href='/test.php'<h2>进入第一轮调查</h2></a><br>" ;	
			}
			else{
				echo '<div class="main" style="margin:7em auto 0;width:84%;"><h2 style="font-size: 1em;text-align: center;color:#fff;padding:1em 0;width: 80%;font-family:sans-serif;">您不是本次调查专家！</h2></div><br> ' ;			
			}		
		}
//插入操作成功后，显示插入记录的记录号 
//echo '<div class="main"><h2>提交成功！</h2></div><br><div class="submit"><a href="http://172.23.7.95/ia3/test2.php">进入第二轮调查</a></div> ' ; 
//关闭当前数据库连接 
		$db->close();
	} 
	?>

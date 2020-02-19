<?php session_start();
error_reporting(E_ALL^E_DEPRECATED);
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/zzsc-demo.css">
	<link rel="stylesheet" href="dist/css/select-theme-dark.css" />
	
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <title>网易云音乐指标调查第三轮</title>

  <style>
html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block;vertical-align:baseline}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background:transparent}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}dfn{font-style:italic}h1{font-size:2em;margin:0.67em 0}mark{background:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}pre{overflow:auto}code,kbd,pre,samp{font-family:monospace, monospace;font-size:1em}button,input,optgroup,select,textarea{color:inherit;font:inherit;margin:0}button{overflow:visible}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer}button[disabled],html input[disabled]{cursor:default}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}input[type="checkbox"],input[type="radio"]{-moz-box-sizing:border-box;box-sizing:border-box;padding:0}input[type="number"]::-webkit-inner-spin-button,input[type="number"]::-webkit-outer-spin-button{height:auto}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:0.35em 0.625em 0.75em}legend{border:0;padding:0}textarea{overflow:auto}optgroup{font-weight:bold}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}

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
  background: radial-gradient(top, ellipse, #ffffff 0%, #bbddee 100%);
  padding: 50px 100px;
  height: 500px;
}
.wrapper {
  width: 300px;
  margin: 30px auto;
}
label {
  height: 30px;
  line-height: 30px;
  margin-right: 20px;
  font-size: 1em;
  font-weight: 700;
  font-family: "Microsoft YaHei";
  color:#FFF;
}
h2 {
  display: block;
  color: #fff;
  text-align: center;
  width: 560px;
  margin: 0 auto 10px;
  line-height: 1.8;
}
h3{
	color: #fff;
}
td {
	text-align: center;
    font-size:8px;
    width:60px;
	border-top: 1px solid #181818;
	border-left:1px solid #181818;
	border-bottom: 1px solid #181818;
	border-right:1px solid #181818;
	}
th{
	padding: 4px;
    font-size:14px;
	border-top: 1px solid #181818;
	border-left:1px solid #181818;
	border-bottom: 1px solid #181818;
	border-right:1px solid #181818;
	}
table.table1{
    background-color: #ffffff;
	}
select {
			font-size: 1em;
		}

		.scroll-parent {
			margin: 40px;
			height: 300px;
			width: 350px;
			display: inline-block;
			
			overflow: auto;
			border: 2px solid #eee;
			padding: 40px;
		}
</style>

    <script src="js/prefixfree.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/tether.js"></script>
</head>

<body>

<?php 
//header("Content-Type: text/html;charset=utf-8"); 
$host = "localhost";
$user = "root";
$pass = "";
$db = "ia_db";
$db1 = new mysqli($host, $user, $pass,$db) or die("Unable to connect!");
$db1->set_charset("utf8");

if(!isset($_POST['submit'])){ 
//如果没有表单提交，显示一个表单 
?> 
<div class="main">
				 <!-----start-main---->
				 <div class="inset">
				 	<div class="social-icons" style="background:#67adf3;">
		    			 <div class="span"><img src="images/fb.png" alt=""/><i>网易云音乐评价系统——第三轮调查 </i><div class="clear"></div></div>	
    						<div class="clear"></div>
					</div>
				 </div>	
				 <h2>对不起，您在第二轮调查中所填写的问卷内容与最终分析结果存在较大差异，需要您做进一步的论证和解答，非常感谢！</h2>
				 <form action="" method="post">
				 		<div style="width:300px;margin:0 auto;padding-left:30px;">
							<label style="display:block;position:relative;left:20px;">请选择您的学号</label>
							<div class="lable-2">		                          							
								<select data-select-like-alignement="never" class="drop-select" name="number" disabled="true">
									<?php
									echo '<option value="'.$_SESSION["professor_num"].'">'.$_SESSION["professor_num"].'</option>'
									?>		
								</select>
			                  	<div class="clear"> </div>		                   
		                   </div>
		                </div>
						<script src="dist/js/select.js"></script>
							<script>
								$('select.drop-select').each(function(){
									new Select({
										el: this,
										selectLikeAlignment: $(this).attr('data-select-like-alignement') || 'auto',
										className: 'select-theme-dark'
									});
								});
						</script>
		                   <h3 style="display:block;margin-bottom:5px;">您的第二轮选择结果：</h3>
		                  
								<table class="table1" style="line-height:1.5;">
								    <thead>
								        <tr>
								        <?php 
								        echo '<th>专家学号</th>';
											$query = $db1->query("SELECT question FROM Question2");
								        	if($query) {
									        		while($row = $query->fetch_assoc())//将result结果集中查询结果取出一条							        			
									        		{
									        			echo "<th>".$row["question"]."</th>";
									        		}
									        		$query->free();
									        		
								        		} else {
								        			echo 'ERROR: There was a problem with the query.';
								        		}
								        ?>						            
								        </tr>
								    </thead>
								    <tbody>
								        
								        	<?php 
								        	$query1 = $db1->query("SELECT * FROM round2 where number =".$_SESSION["professor_num"]);
								        	if($query1) {
									        		while($row = $query1->fetch_assoc())//将result结果集中查询结果取出一条							        			
									        		{
									        			echo "<tr><td>".$row["number"]."</td>
											            <td>".$row["CommentQuality"]."</td>
											            <td>".$row["CommentUserQuality"]."</td>
														<td>".$row["CommentQualityWithSong"]."</td>
														<td>".$row["Recommend"]."</td>
														<td>".$row["SongNumFamous"]."</td>
														<td>".$row["SongNumMinority"]."</td>
														<td>".$row["RankingList"]."</td>
														<td>".$row["SongList"]."</td>
														<td>".$row["Privacy"]."</td>
														<td>".$row["Ad"]."</td>";	
									        		}
									        		$query1->free();
									        		$db1->close();//关闭数据库		        			
								        		} else {
								        			echo 'ERROR: There was a problem with the query.';
								        		}
								            ?>
								        								       
								    </tbody>
								</table>
		                  
		                    <div class="lable" style="padding-top:20px;">
			                    <div style="width:800px;margin:0 auto;">
			                       	<label>论证结果（必填）：</label>
			                       	<input type="text" class="text" name="suggest" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">   		
			                        <div class="clear"> </div>
			                       	<label>原因解释（必填）：</label>
			                       	<input type="text" class="text" name="reason" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
			                   </div>
		                    </div>	   					
								<div class="clear"> </div>
								 <div class="submit">
									<input style="height:40px;" type="submit" name="submit" value="提交问卷" >
								</div>
								<div class="clear"> </div>
							 </form>
		<!-----//end-main---->
		</div>
   					<div class="copy-right">
						<p>@Copyright 信息分析德尔菲法—_杨焯雅_程虎威_房清华</p> 
  <script src='js/jquery.js'></script>	
	<script src="js/index.js"></script>

</body>

</html>


<?php 
} 
else
{ 
//如果提交了表单 
//数据库连接参数 
	$db2 = new mysqli($host, $user, $pass,$db) or die("Unable to connect!");
	$db2->set_charset("utf8");
	$number = mysqli_real_escape_string($db2,$_SESSION['professor_num']);

	 $suggest = empty($_POST['suggest'])? die("请填写论证结果！"): 
	 mysqli_real_escape_string($db2,$_POST['suggest']); 
	 
	 $reason = empty($_POST['reason'])? die("请填写原因解释！"): 
	 mysqli_real_escape_string($db2,$_POST['reason']); 
	 
	//打开数据库连接 hovertree.com 何问起 
	//构造一个SQL查询	
	$query = "INSERT INTO round3(number,suggest,reason) VALUE('$number','$suggest','$reason')"; 
	//执行该查询 
	$result = $db2->query($query) or die('<div class="main"><h2>该学号已接受过调查！</h2></div>'); 
	//插入操作成功后，显示插入记录的记录号 
	echo '<div class="main"><h2>提交成功!<br>感谢您的参与。</h2></div> ' ; 
	//关闭当前数据库连接 
	$db2->close();
} 
?>
 
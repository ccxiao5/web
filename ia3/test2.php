<?php session_start();
error_reporting(E_ALL^E_DEPRECATED);
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <title>网易云音乐指标调查第二轮</title>

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
  display: block;
  height: 60px;
  width: 480px;
  line-height: 30px;
  margin: 35px auto;
  font-size: 1em;
  font-family: "Microsoft YaHei";
  color:#FFF;
}
h2 {
  color: #fff;
  text-align: center;
  width: 560px;
  margin: 0 auto;
  line-height: 1.8;
}


</style>

    <script src="js/prefixfree.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery-2.1.1.min.js"></script>
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
		    			  <div class="span"><img src="images/fb.png" alt=""/><i>网易云音乐评价系统——第二轮调查 </i><div class="clear"></div></div>	
    						<div class="clear"></div>
					</div>
				 </div>	
				 <h2>评分标准：1—急需改进    2—有待改进   3—一般   4—比较好    5—非常好<br>问题共有12个，包括评论情况、个性化推荐功能、歌曲质量、排行榜功能、隐私保护、广告植入等多个方面。</h2>
					<h2>网易云音乐是使用频率很高的音乐APP，希望调查专家对网易云音乐的意见及建议，帮助网易云音乐更好地成长。希望您可以如实填写问卷，谢谢！</h2>
				 <form action="" method="post">
							<div class="lable-2">
		                       	<?php
									echo '<input type="text" class="text" name="number" disabled="true" value="'.$_SESSION["professor_num"].'">';
								?>					
		                     	   <div class="clear"> </div>
			                    <div style="width=-webkit-fill-available;">
				                    <?php 		                                      
				                    $id=1;
				                    $j=0;
				                    $query = $db1->query("SELECT * FROM Question");
									if($query) {
										while($row = $query->fetch_assoc()){
										if($row["q_num"]!=7 && $row["q_num"]!=8){							
											echo "<label>".$row["q_num"].".&nbsp;&nbsp;".$row["question"]."<br><h3>一轮平均数：".$row["average_one"]."&emsp;一轮满分频度：".$row["full_one"]."&emsp;一轮标准差：".$row["stdv_one"]."</h3>";
											$j=$j+1;
											for($i=1;$i<6;$i++){
												echo '<input type="radio" id=';echo "$id";
												$id=$id+1;
												echo ' name=';
												echo "$j";
												echo  ' value=';
												echo  "$i>$i";
												echo '&emsp;&emsp;';							
											}
											$id=($j*10)+1;
											echo "<br></label>";	
										}			  					  	
									}
										$query->free();
										$db1->close();}
									else {
											echo 'ERROR: There was a problem with the query.';
											}//将result结果集中查询结果取出一条  
										   ?>
								</div>
		                   </div>
		                    <div class="lable">
		                       	<label>13.其他意见或建议</label>
		                       	<input style="position:relative;top:-70px;" type="text" class="text" name="suggest" value="其他意见或建议" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}"></div>	   					
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
					</div>
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
	 
	$wldk = empty($_POST['1'])? die('<div class="main"><h2>请完成提问1！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['1']); 
	 
	$xhwdd = empty($_POST['2'])? die('<div class="main"><h2>请完成提问2！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['2']); 
	 
	 $fgqy = empty($_POST['3'])? die('<div class="main"><h2>请完成提问3！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['3']); 
	 
	 $wfjg = empty($_POST['4'])? die('<div class="main"><h2>请完成提问4！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['4']); 
	 
	 $lltx = empty($_POST['5'])? die('<div class="main"><h2>请完成提问5！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['5']); 
	 
	 $sylljz = empty($_POST['6'])? die('<div class="main"><h2>请完成提问6！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['6']); 
	 
	  
	 $fwwgjqd = empty($_POST['7'])? die('<div class="main"><h2>请完成提问9！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['7']); 
	 
	 $btiptx = empty($_POST['8'])? die('<div class="main"><h2>请完成提问10！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['8']); 
	 
	 $wlhz = empty($_POST['9'])? die('<div class="main"><h2>请完成提问11！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['9']); 
	 
	 $yjgxpl = empty($_POST['10'])? die('<div class="main"><h2>请完成提问12！</h2></div>'): 
	 mysqli_real_escape_string($db2,$_POST['10']); 
	 
	 $suggest = empty($_POST['suggest'])? die("请完成建议"): 
	 mysqli_real_escape_string($db2,$_POST['suggest']); 
	 
	//打开数据库连接 hovertree.com 何问起 
	//构造一个SQL查询	
	//$query = "INSERT INTO round1(number,CommentQuality,CommentUserQuality,CommentQualityWithSong,Recommend,SongNumFamous,SongNumMinority,RankingList,SongList,Privacy,Ad,suggest) VALUE('$number','$wldk','$xhwdd','$fgqy','$wfjg','$lltx','$sylljz','$fwwgjqd','$btiptx','$wlhz','$yjgxpl','$suggest')"; 
	$query = "INSERT INTO round2(number,CommentQuality,CommentUserQuality,CommentQualityWithSong,Recommend,SongNumFamous,SongNumMinority,RankingList,SongList,Privacy,Ad,suggest) VALUE('$number','$wldk','$xhwdd','$fgqy','$wfjg','$lltx','$sylljz','$fwwgjqd','$btiptx','$wlhz','$yjgxpl','$suggest')"; 
	//执行该查询 
	$result = $db2->query($query) or die('<div class="main"><h2>该学号已接受过调查！</h2></div>'); 
	//插入操作成功后，显示插入记录的记录号 
	if($_SESSION["professor_num"]=="151001111" ||$_SESSION["professor_num"]=="151001122"||$_SESSION["professor_num"]=="151001229")
		echo '<div class="main"><h2>提交成功！</h2></div><br><div class="submit"><a href="/test3.php"><h2>进入第三轮调查</h2></a></div> ' ; 
	else
		echo '<div class="main"><h2>提交成功!<br>感谢您的参与。</h2></div> ' ; 
	//关闭当前数据库连接 
	$db2->close();
} 
?>
 
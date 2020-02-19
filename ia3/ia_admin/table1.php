<?php 
error_reporting(E_ALL^E_DEPRECATED);
//header("Content-Type: text/html;charset=utf-8"); 
$host = "localhost";
$user = "root";
$pass = "";
$db = "ia_db";
$db1 = new mysqli($host, $user, $pass,$db) or die("Unable to connect!");
$db1->set_charset("utf8");
 
?> 
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>一轮结果</title>
		<link rel="stylesheet" href="assets/css/amazeui.css" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/core.css" />
		<link rel="stylesheet" href="assets/css/menu.css" />
		<link rel="stylesheet" href="assets/css/index.css" />
		<link rel="stylesheet" href="assets/css/admin.css" />
		<link rel="stylesheet" href="assets/css/page/typography.css" />
		<link rel="stylesheet" href="assets/css/page/form.css" />

	</head>
	<body>
		<div class="card-box">
		<div class="am-g">
						<div class="am-u-sm-12 am-u-md-6">
				          <div class="am-btn-toolbar">
				            <div class="am-btn-group am-btn-group-xs">
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
				              <button type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
				            </div>
				          </div>
				        </div>	
				        
						<div class="am-u-sm-12 am-u-md-3">
				          <div class="am-input-group am-input-group-sm">
				            <input type="text" class="am-form-field">
				          <span class="am-input-group-btn">
				            <button class="am-btn am-btn-default" type="button">搜索</button>
				          </span>
				          </div>
				        </div>
				      </div>
			<table class="am-table">				
				<thead>
					<tr>
						<?php 
							echo '<th>专家学号</th>';
								$query = $db1->query("SELECT question FROM Question");
								    if($query) {
									    while($row = $query->fetch_assoc())//将result结果集中查询结果取出一条							
									        {
									        	echo "<th>".$row["question"]."</th>";
									        }
									        $query->free();
									        	echo '<th>其他意见建议</th>';
								        	} else {
								        		echo 'ERROR: There was a problem with the query.';
								        	}
								        ?>						            
			        </tr>
				    </thead>
				    <tbody>		        
			        	<?php 
			        	$query1 = $db1->query("SELECT * FROM round1");
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
									<td>".$row["ToneQuality"]."</td>
									<td>".$row["LyricQuality"]."</td>
									<td>".$row["RankingList"]."</td>
									<td>".$row["SongList"]."</td>
									<td>".$row["Privacy"]."</td>
									<td>".$row["Ad"]."</td>
									<td>".$row["suggest"]."</td></tr>";
				        		}
				        		$query1->free();
				        		$db1->close();//关闭数据库		        			
			        		} else {
			        			echo 'ERROR: There was a problem with the query.';
			        		}
			            ?>								       
				    </tbody>
				</table>
			<div class="am-cf">
              <div class="am-fr">
                <ul class="am-pagination">
                  <li class="am-disabled"><a href="#">«</a></li>
                  <li class="am-active"><a href="#">1</a></li>
                  <li><a href="charts1.html">2</a></li>                
                  <li><a href="#">»</a></li>
                </ul>
              </div>
            </div>
			</div>				
		<script type="text/javascript" src="../assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="../assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js" ></script>
		<script type="text/javascript" src="../assets/js/blockUI.js" ></script>
	</body>
</html>
 
	
 
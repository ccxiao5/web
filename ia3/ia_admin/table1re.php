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
		<title>一轮分析</title>
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
					<!-- Row start -->
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
					  <!-- Row end -->
					  
					  <!-- Row start -->
					  	<div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th><th class="table-id">问题编号</th>
                <th class="table-title">问题</th><th class="table-type">最大值</th><th class="table-type">最小值</th>
                <th class="table-type">中位数</th><th class="table-type">平均值</th><
                <th class="table-type">变异系数</th><th class="table-type">标准差</th><th class="table-type">满分频率</th>
               
              </tr>
              </thead>
              <tbody>
               <?php 							        
											$query = $db1->query("SELECT * FROM Question");
								        	if($query) {
									        		while($row = $query->fetch_assoc())//将result结果集中查询结果取出一条							        			
									        		{
									        			echo '<tr><td><input type="checkbox" /></td>';
									        			echo "<td>".$row["q_num"]."</td>";
									        			echo "<td>".$row["question"]."</td>";
									        			echo "<td>".$row["max"]."</td>";
									        			echo "<td>".$row["min"]."</td>";
									        			echo "<td>".$row["mid"]."</td><td>".$row["average_one"]."</td>
														<td>".$row["differ"]."</td><td>".$row["stdv_one"]."</td><td>".$row["full_one"]."</td>";
									        			echo ' <td>
                  <div class="am-btn-toolbar">
                    <div class="am-btn-group am-btn-group-xs">
                      <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>
                      <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                    </div>
                  </div>
                </td>';
									        		}
									        		$query->free();							        		
								        		} else {
								        			echo 'ERROR: There was a problem with the query.';
								        		}
				?>	                       
               
              </tr>
                    
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
            <hr />
          </form>
        </div>

				
				
	
		
		<script type="text/javascript" src="../assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="../assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js" ></script>
		<script type="text/javascript" src="../assets/js/blockUI.js" ></script>



	</body>
	
</html>
 
	
 
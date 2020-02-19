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
		<title>三轮结果</title>
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
								<!-- col start -->
								<table class="am-table">
								
								    <thead>
								        <tr>					        
								        			<th>专家学号</th>
													<th>论证结果</th>
									        		<th>原因解释</th>							        					            
								        </tr>
								    </thead>
								    <tbody>
								        
								        	<?php 
								        	$query1 = $db1->query("SELECT * FROM round3");
								        	if($query1) {
									        		while($row = $query1->fetch_assoc())//将result结果集中查询结果取出一条							        			
									        		{
									        			echo "<tr><td>".$row["number"]."</td>
											            <td>".$row["suggest"]."</td>
											            <td>".$row["reason"]."</td>";
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
								<!-- col end -->
							</div>				

		
		<script type="text/javascript" src="../assets/js/jquery-2.1.0.js" ></script>
		<script type="text/javascript" src="../assets/js/amazeui.min.js"></script>
		<script type="text/javascript" src="../assets/js/app.js" ></script>
		<script type="text/javascript" src="../assets/js/blockUI.js" ></script>



	</body>
	
</html>
 
	
 
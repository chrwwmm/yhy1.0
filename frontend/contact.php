<?php
    require_once('backend/config.php');
    $sql = "SELECT * from contact";
    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>亿慧云</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/main.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!--header-->
	<header class="header">
        <div class="header-main clearfix">
        	<a href="index.php">
            	<img src="images/logo.png"/>
            </a>      
	        <div class="line-nav"><img src="images/line-con.png" alt=""></div>
            <ul class="nav" style="display: none;">
                <li><a href="index.php" class="cur">首页</a></li>
                <li><a href="about.php">公司介绍</a></li>
                <li><a href="product.php">产品中心</a></li>
                <li><a href="news.php">新闻动态</a></li>
                <!--<li><a href="solution.php">智慧方案</a></li>-->
                <!--<li><a href="case.php">成功案例</a></li>-->
                <!--<li><a href="skill.php">服务与支持</a></li>-->
                <!--<li><a href="">亿慧云商城</a></li>-->
                <!--<li><a href="cooperation.php">招商加盟</a></li>-->
                <li><a href="contact.php">联系我们</a></li>
                <!--<li><a href="English.php">English</a></li>-->
            </ul>
        </div>
	</header>
	
	<!--about banner-->
	<div class="banner">
		<img src="images/main2.jpg"/>
	</div>
	
	<!--about main-->
	<div class="contact-main">
		<h3>亿慧云智能科技（深圳）股份有限公司</h3>
		<p>联系电话：<?php echo $row['tel'];?></p>
		<p>客服QQ：<?php echo $row['qq'];?></p>
		<p>企业邮箱：<?php echo $row['email'];?></p>
		<p>集团总部：<?php echo $row['site'];?></p>
		<p>生产基地：<?php echo $row['produce-site'];?></p>
		<div class="contact-wechat">
			<img src="images/contact-pic01.png"/>
			<p>关注微信公众号</p>
		</div>	
	</div>
	
	

	<footer class="footer">
		<div class="footer-main">
			<p>亿慧云智能科技（深圳）股份有限公司©版权所有 粤ICP备16063712号</p>
		</div>
	</footer>	
</body>
</html>
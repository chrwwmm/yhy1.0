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
	
	<!--banner-->
	<div id="focus" class="focus">
	    <div class="hd">
	        <ul></ul>
	    </div>
	    <div class="bd">
	        <ul>
	            <li><a href=""><img _src="images/main1.jpg" src="images/main1.jpg" /></a></li>
	            <li><a href=""><img _src="images/main2.jpg" src="images/main2.jpg"/></a></li>
	            <li><a href=""><img _src="images/main3.jpg" src="images/main3.jpg"/></a></li>
	        </ul>
	    </div>
	</div>
	<script type="text/javascript" src="js/TouchSlide.1.1.js"></script>
	<script type="text/javascript">
	    TouchSlide({ 
	        slideCell:"#focus",
	        titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	        mainCell:".bd ul", 
	        effect:"left", 
	        autoPlay:true,//自动播放
	        autoPage:true, //自动分页
	        switchLoad:"_src" //切换加载，真实图片路径为"_src" 
	    });
	</script>
	
	<!--main-->
	<ul class="main-list">
		<li class="ml-item">
			<a href="">
				<img src="images/main1.jpg" alt="" />
				<h3>智慧创造未来</h3>
				<p>通过技术创新，构建智慧生态链。通过技术创新，构建智慧生态链。通过技术创新，构建智慧生态链。</p>
			</a>
		</li>
		<li class="ml-item">
			<a href="">
				<img src="images/main2.jpg" alt="" />
				<h3>亿慧云</h3>
				<p>亿慧云智能科技（深圳）股份有限公司是一家专注于打造智慧生态系统的科技创新型公司。我们集设计、研发、生产、销售、服务为一体。本公司拥有研发人员50多人，其中国际顶尖的智能化系统专家10人。公司的核心技术有智能物联技术、智能机器人技术、智能穿戴技术，领先国际水平。</p>
			</a>
		</li>
		<li class="ml-item">
			<a href="">
				<img src="images/main3.jpg" alt="" />
				<h3>智能家居</h3>
				<p>慧享生活，品智未来</p>
			</a>
		</li>
	</ul>	
	<footer class="footer">
		<div class="footer-main">
			<p>亿慧云智能科技（深圳）股份有限公司©版权所有 粤ICP备16063712号</p>
		</div>
	</footer>	
</body>
</html>
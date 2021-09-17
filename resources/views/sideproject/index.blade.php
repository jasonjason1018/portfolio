<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Document</title>
	<link rel="stylesheet" href="side_project_assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="side_project_assets/rolling/css/rolling.css">
	<link rel="stylesheet" href="side_project_assets/stylesheets/style.css">
	<script type="text/javascript" src="side_project_assets/javascripts/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="side_project_assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="side_project_assets/rolling/js/rolling.js"></script>
	<script type="text/javascript" src="side_project_assets/javascripts/Public.js"></script>
</head>
<body class="rooms">
	<div class="scrollbar-macosx">
		<div class="header">
			<div class="toptext">
				<a href="#">
					<span class="glyphicon glyphicon-home"></span>
					<b>聊天室</b>
				</a>
			</div>
			<ul class="topnavlist">
				<li class="userinfo">
					<a><span class="glyphicon glyphicon-user"></span><b>用户名</b></a>
					<div class="popover fade bottom in">
						<div class="arrow"></div>
						<h3 class="popover-title">用户信息</h3>
						<div class="popover-content">
							<p class="user_portrait">
								<img ptimg="1" portrait_id="1" src="side_project_assets/images/user/1.png" alt="user_portrait">
							</p>
							<p class="select_portrait">
								<img portrait_id="1" src="side_project_assets/images/user/1.png" alt="portrait_1" class="t">
								<img portrait_id="2" src="side_project_assets/images/user/2.png" alt="portrait_1">
								<img portrait_id="3" src="side_project_assets/images/user/3.png" alt="portrait_1">
								<img portrait_id="4" src="side_project_assets/images/user/4.png" alt="portrait_1">
								<img portrait_id="5" src="side_project_assets/images/user/5.png" alt="portrait_1">
								<img portrait_id="6" src="side_project_assets/images/user/6.png" alt="portrait_1">
								<img portrait_id="7" src="side_project_assets/images/user/7.png" alt="portrait_1">
								<img portrait_id="8" src="side_project_assets/images/user/8.png" alt="portrait_1">
								<img portrait_id="9" src="side_project_assets/images/user/9.png" alt="portrait_1">
								<img portrait_id="10" src="side_project_assets/images/user/10.png" alt="portrait_1">
								<img portrait_id="11" src="side_project_assets/images/user/11.png" alt="portrait_1">
								<img portrait_id="12" src="side_project_assets/images/user/12.png" alt="portrait_1">
							</p>
							<p class="user_name">
								<input type="text" class="form-control" placeholder="用户名">
								<button id="userinfo_sub" type="button" class="btn btn-primary btn-block">確定</button>
							</p>
						</div>
					</div>
				</li>
				<li class="theme">
					<a><span class="glyphicon glyphicon-leaf"></span><b>主题</b></a>
					<div class="popover fade bottom in">
						<div class="arrow"></div>
						<h3 class="popover-title">主题设置</h3>
						<div class="popover-content">
							<img theme_id="1" src="side_project_assets/images/theme/1_xs.jpg" alt="主题">
							<img theme_id="2"  src="side_project_assets/images/theme/2_xs.jpg" alt="主题">
							<img theme_id="3"  src="side_project_assets/images/theme/3_xs.jpg" alt="主题">
							<img theme_id="4"  src="side_project_assets/images/theme/4_xs.jpg" alt="主题">
							<img theme_id="5"  src="side_project_assets/images/theme/5_xs.jpg" alt="主题">
							<img theme_id="6"  src="side_project_assets/images/theme/6_xs.jpg" alt="主题">
							<img theme_id="7"  src="side_project_assets/images/theme/7_xs.jpg" alt="主题">
							<img theme_id="8"  src="side_project_assets/images/theme/8_xs.jpg" alt="主题">
							<img theme_id="9"  src="side_project_assets/images/theme/9_xs.jpg" alt="主题">
							<img theme_id="10"  src="side_project_assets/images/theme/10_xs.jpg" alt="主题">
							<img theme_id="11"  src="side_project_assets/images/theme/11_xs.jpg" alt="主题">
							<img theme_id="12"  src="side_project_assets/images/theme/12_xs.jpg" alt="主题">
						</div>
					</div>
				</li>
			</ul>
			<div class="clapboard hidden"></div>
		</div>
		<div class="main container">
			<div class="room_list">
				<div class="col-xs-6 col-sm-6 col-md-4">
					<a href="/mySideProject_room" class="thumbnail">
						<img src="side_project_assets/images/rooms/1.png" alt="python">
						<span><span class='glyphicon glyphicon-user'></span>18人</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4">
					<a href="/mySideProject_room" class="thumbnail">
						<img src="side_project_assets/images/rooms/2.png" alt="php">
						<span><span class='glyphicon glyphicon-user'></span>13人</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4">
					<a href="/mySideProject_room" class="thumbnail">
						<img src="side_project_assets/images/rooms/3.png" alt="javascript">
						<span><span class='glyphicon glyphicon-user'></span>825人</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4">
					<a href="/mySideProject_room" class="thumbnail">
						<img src="side_project_assets/images/rooms/4.png" alt="java">
						<span><span class='glyphicon glyphicon-user'></span>421人</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4">
					<a href="/mySideProject_room" class="thumbnail">
						<img src="side_project_assets/images/rooms/5.png" alt="html">
						<span><span class='glyphicon glyphicon-user'></span>523人</span>
					</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-4">
					<a href="/mySideProject_room" class="thumbnail">
						<img src="side_project_assets/images/rooms/6.png" alt="c++">
						<span><span class='glyphicon glyphicon-user'></span>254人</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<!DOCTYPE html>
<!-- saved from url=(0062)https://resource.vision4yes.com/manager/manager_apikey_log.php -->
<html class=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta http-equiv="Content-Language" content="zh-TW"> 
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" / -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit|ie-comp|ie-stand">

<link rel="shortcut icon" href="https://resource.vision4yes.com/logo.ico" type="image/x-icon">
<title>視野科技後台管理介面</title>
<!-- Bootstrap core CSS -->
<link href="/assets/css/manager_style.css" rel="stylesheet" type="text/css">
<link href="/assets/css/fancyBox.css" rel="stylesheet" type="text/css">
<style type="text/css">
.manager_tab_all_block{ max-width:90%; margin:0 auto;padding: 0 0 30px 0;}
.outstanding_tab .manager_title{ 
background: #ee9117; cursor:pointer;
background: -webkit-gradient(linear, 0 0, 0 bottom, from(#6ad2e7), to(#a2e3f0));
background: -webkit-linear-gradient(#a2e3f0 ,#6ad2e7);
background: -moz-linear-gradient(#a2e3f0 ,#6ad2e7);
background: -ms-linear-gradient(#a2e3f0 ,#6ad2e7);
background: -o-linear-gradient(#a2e3f0 ,#6ad2e7);
background: linear-gradient(#a2e3f0 ,#6ad2e7);
-pie-background: linear-gradient(#a2e3f0 ,#6ad2e7);
color:#000; 
}
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<!--[if IE 8]>
<link href="/css/manager_style_ie8.css" media="all" rel="stylesheet" type="text/css" />
<![endif]-->
<style type="text/css">.fancybox-margin{margin-right:15px;}</style></head>

<body style="">
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
	  	<div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		      	<span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
			</button>
	      	<a class="logo" href="/index"><img src="/assets/images/vision-logo.png"></a>
		</div>
		<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav">
<li><a href="https://resource.vision4yes.com/manager/manager_apikey_log.php#" class="dropdown-toggle" data-toggle="dropdown">後台管理<span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="/logout">登出</a></li>
</ul>
</li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div><!-- /container -->
<div class="outstanding_page">
	<div class="title_txt">
		<center> Fukushima 後台 </center>
	</div>
	<div class="center manager_tab_all_block">
		<form id="form1" method="POST" action="https://resource.vision4yes.com/manager/manager_apikey_log.php" enctype="multipart/form-data">
        
    	</form>
    	<p>&nbsp;</p>
		<table class="outstanding_tab list all_tab">
			<thead class="manager_title">
		<tr>
			<th  width="15%" align="center">編號</th>
			<th  width="15%" align="center">姓名</th>
			<th  width="15%" align="center">電話</th>
			<th  width="15%" align="center">E-mail</th>
			<th  width="15%" align="center">刪除</th>
			<th  width="15%" align="center">更新</th>
		</tr>
	</thead>
	<tbody class="contant">
	@foreach($fu_data as $v => $data)
		<tr>
			<td>{{ $v+1 }}</td>
			<td>{{ $data->name }}</td>
			<td>{{ $data->phone_number }}</td>
			<td>{{ $data->email }}</td>
			<td>
				<button><a href="/delete/{{$data->sno}}" onclick="javascript:del()">刪除</a></button>
			</td>
			<td>
				<form action="/update" method="post">
					@csrf
					<input type="hidden" name="sno" value="{{$data->sno}}">
					<input type="hidden" name="name" value="{{$data->name}}">
					<input type="hidden" name="phone_number" value="{{$data->phone_number}}">
					<input type="hidden" name="email" value="{{$data->email}}">
					<input type="submit" value="更新">
				</form>
			</td>
		</tr>
	@endforeach
	<tbody class="contant">
</table>
	
	</div>
	<div class="title_txt"><center>
		<select name="gotoPageNo" id="gotoPageNo" onchange="GotoNextPage(0)">
<option value="1" selected="">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
<option value="35">35</option>
<option value="36">36</option>
<option value="37">37</option>
<option value="38">38</option>
<option value="39">39</option>
<option value="40">40</option>
<option value="41">41</option>
<option value="42">42</option>
<option value="43">43</option>
<option value="44">44</option>
<option value="45">45</option>
<option value="46">46</option>
<option value="47">47</option>
<option value="48">48</option>
<option value="49">49</option>
<option value="50">50</option>
<option value="51">51</option>
<option value="52">...</option>
</select>
　<a href="javascript:GotoNextPage(2)">下一頁</a>
		<br>
		<a href="https://resource.vision4yes.com/manager/manager_apikey_log.php#">TOP</a>
		</center>
	</div>
</div>

<div class="footer clearfix">
	<p class="copyright">Copyright ©2017~2020 Vision Technology Co., Ltd. All rights reserved.</p>
</div>
    
<link rel="stylesheet" type="text/css" href="js/jquery-ui-1.10.4.custom.css">
<script type="text/javascript" src="/assets/script/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/assets/script/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="/assets/script/jquery-ui-timepicker-addon.js"></script>
<!-- script type='text/javascript' src="/js/jquery.min.js"></script -->
<script type="text/javascript" src="/assets/script/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/script/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/assets/script/cityarea.js"></script>
<script src="/assets/script/btn.js"></script>




<script type="text/javascript">
function showMsg(msg){
	if(msg==0||msg=="0"||msg=="&nbsp;")
		return;
	alert(msg);
	if(location.href.match(/(msg=)/)){
		link = location.href.replace(/([\&\?])msg=[^&]*(&?)/,'$1');
		var state = { href: link };
		if(link!='')history.replaceState(state, document.title, state.href);
	}
}
showMsg('')
</script>
<script type="text/javascript">
$(document).ready(function(){
	
});

function GotoNextPage(pageNo)
{
	if(pageNo==0)
		pageNo=document.getElementById("gotoPageNo").value;
	document.getElementById("pageNo").value=pageNo;
	$("#form1").submit();
}

function GotoSearch(){
	$("#form1").submit();
}
</script>
</body></html>
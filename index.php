<!DOCTYPE HTML>
<!--
	超空间 by PixWeb
	pixweb.cn 
	Free for personal and commercial use under the CCA 3.0 license (pixweb.cn/#/help)
-->
<?php
session_start();
//在页首先要开启session,
//error_reporting(2047);
session_destroy();
//将session去掉，以每次都能取新的session值;
//用seesion 效果不错，也很方便
?>
<html>
	<head>
		<title>蓝草吉他教室</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shotcut icon" href="images/icon.png" />

		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	</head>
	<body>
		<!-- Sidebar -->
		<section id="sidebar">
			<div class="inner">
				<nav>
					<ul>
						<li><a href="#intro">主页</a></li>
						<li><a href="#one">我们是谁</a></li>
						<li><a href="#two">我们在做什么</a></li>
						<li><a href="#three">联系我们</a></li>
					</ul>
				</nav>
			</div>
		</section>

		<!-- Wrapper -->
		<div id="wrapper">

			<!-- 介绍 -->
			<section id="intro" class="wrapper style1 fullscreen fade-up">
				<div class="inner">
					<h1>蓝草吉他教室</h1>
					<div>吉他教学</div>

					<p>蓝草是一片河北工大学生创立的吉他爱好者圣地</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">更多</a></li>
					</ul>
				</div>
			</section>

			<!-- One -->
			<section id="one" class="wrapper style2 spotlights">
				<section>
					<a href="#" class="image"><img src="images/jjy.jpg" alt="" data-position="center center" /></a>
					<div class="content">
						<div class="inner">
							<h2>蓝草的开创人</h2>
							<p>熟练掌握民谣、指弹演奏方式，多年教学经验</p>
							<ul class="actions">
								<li><a href="#a" class="button scrolly">更多</a></li>
							</ul>
						</div>
					</div>
				</section>
				<section id="a">
					<a href="#" class="image"><img src="images/ylx.jpg" alt="" data-position="top center" /></a>
					<div class="content">
						<div class="inner">
							<h2>另一位合作者</h2>
							<p>蓝草的另一位成员</p>
							<ul class="actions">
								<li><a href="#b" class="button scrolly">更多</a></li>
							</ul>
						</div>
					</div>
				</section>
				<section id="b">
					<a href="#" class="image"><img src="images/two-guitars.jpg" alt="" data-position="center center" /></a>
					<div class="content">
						<div class="inner">
							<h2>教室一览</h2>
							<p>每一个热爱音乐的小伙伴心里都是善良的</p>
							<ul class="actions">
								<li><a href="#c" class="button scrolly">更多</a></li>
							</ul>
						</div>
					</div>
				</section>
				<section id="c">
					<a href="#" class="image"><img src="images/guitar-and-posts.jpg" alt="" data-position="bottom center" /></a>
					<div class="content">
						<div class="inner">
							<h2>教室一览</h2>
							<p>琴包与吉他与不要喝酒，一起享受音乐带来的快乐</p>
							<ul class="actions">
								<li><a href="#d" class="button scrolly">更多</a></li>
							</ul>
						</div>
					</div>
				</section>
				<section id="d">
					<a href="#" class="image"><img src="images/three-posts.jpg" alt="" data-position="25% 25%" /></a>
					<div class="content">
						<div class="inner">
							<h2>教室一览</h2>
							<p>墙上的音乐海报，良好的音乐氛围，专注于吉他</p>
							<ul class="actions">
								<li><a href="#two" class="button scrolly">更多</a></li>
							</ul>
						</div>
					</div>
				</section>
			</section>

			<!-- Two -->
			<section id="two" class="wrapper style3 fade-up">
				<div class="inner">
					<h2>我们在做什么</h2>
					<div class="features">
						<section>
							<span class="icon major fa-paper-plane"></span>
							<h3>专业的吉他教学</h3>
							<p>专注一门乐器，提供循序渐进的课程，从零基础入门到熟练驾驭</p>
						</section>
						<section>
							<span class="icon major fa-cny"></span>
							<h3>低价的费用</h3>
							<p>每学期 20 节课仅需 600 元</p>
						</section>
						<section>
							<span class="icon major fa-music"></span>
							<h3>民谣吉他</h3>
							<p>熟练离不开夯实的基础，本课程带你走进吉他的大门，开始学习之路。节奏，旋律，分解伴奏，扫弦伴奏，弹唱一般难度的曲目，进阶提升</p>
						</section>
						<section>
							<span class="icon major fa-rocket"></span>
							<h3>指弹吉他</h3>
							<p>独奏一首乐曲，广泛应用许多的调弦法，拍击，打板，吉他加花的演奏法，驾驭从此开始</p>
						</section>
					</div>
					<!--
		 <ul class="actions">
		 <li><a href="#" class="button">更多</a></li>
		 </ul>
					-->
				</div>
			</section>

			<!-- Three -->
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">
					<h2>联系我们</h2>
					<div class="split style1">
						<section>
							<form method="get" action="response.php" id="sheet">
								<div class="field half first">
									<label id="name_err" for="name">姓名</label>
									<input type="text" name="name" id="name" />
								</div>
								<div class="field half">
									<label id="email_err" for="email">邮箱</label>
									<input type="text" name="email" id="email" />
								</div>
								<div class="field">
									<label id="message_err" for="message">内容</label>
									<textarea name="message" id="message" rows="5"></textarea>
								</div>
								<ul class="actions">
									<li><a id="send" href="javascript:;" class="button submit">提交反馈</a></li>
									<li><input name="captcha" id="captcha" size="10" placeholder="请输入验证码" type="text"></li>
									<li><img  title="点击刷新" src="./captcha.php" align="absbottom" onclick="this.src='captcha.php?'+Math.random();"></img></li>
								</ul>
							</form>
						</section>
						<section>
							<ul class="contact">
								<li>
									<h3>地址</h3>
									<span>天津市北辰区双口镇中心北街<br />
										蓝草吉他教室
									</span>
									<br>
									<a id="map" href="map.html" target="_blank"><span class="fa fa-map"></span> 打开地图</a>


								</li>
								<li>
									<h3>邮箱</h3>
									<span>wertyuiopsdfghjkl@163.com</span>
								</li>
								<!--
			<li>
			<h3>手机</h3>
			<span>(000) 000-0000</span>
			</li>
								-->
								<li>
									<h3>社交媒体

									</h3>
									<ul class="icons">
										<li><a id="weixin" class="fa-wechat"><span class="label">微信</span></a></li>
										<li><a id="qq" class="fa-qq"><span class="label">QQ</span></a></li>
									</ul>
									<img id="qgrp" src="images/qgrp.jpg" >
									<img width="150px" id="weixinpic" src="images/weixin.jpg" >
								</li>
									<li>
										<h3>友情链接</h3>
										<a href="https://www.umview.com">嗯View</a>
									</li>
							</ul>
						</section>
					</div>
				</div>
			</section>

		</div>

		<!-- Footer -->
		<footer id="footer" class="wrapper style1-alt">
			<div class="inner">
				<ul class="menu">
					<li>&copy; Bluegrass. All rights reserved.</li><li>Design: <a href="http://pixweb.cn">PixWeb</a></li>
				</ul>
			</div>
		</footer>

		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>
		<script src="assets/js/plugins.js"></script>

	</body>
</html>

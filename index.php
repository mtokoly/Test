<?php

$loggedin = true;

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Site</title>
    <meta name="viewport" content="width=1024">
    <!-- <link rel="shortcut icon" href="./assets/images/favicon.ico"> -->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body class="menu-regular menu-regular-active menu-regular-min-inactive">

<div id="topbar-wrap"><div id="topbar">
	<a href="javascript:void(0)" id="menulink"><span class="bars"></span><span class="arrow"></span></a>
	<a href="/" class="logo">RIPPIN'</a>
	<p class="slogan">The BMX, SKATE, SNOW &amp; SURF Marketplace</p>
	<form class="search">
		<input type="text" name="q" placeholder="Search" value="">
		<input type="submit" value="Search">
	</form>
	<ul class="nav nav-cart">
		<li class="cart"><a href="#">Cart <span class="count">1</span></a></li>
	</ul>
	<ul class="nav">
		<li><a href="#">Home</a></li>
		<li><a href="#">Explore</a></li>
		<li><a href="#">Sell</a></li>
	</ul>-
	<ul class="nav-account">
		<li class="messages"><a href="#">Messages</a></li>
		<li class="profile"><a href="javascript:void(0)"><img src="./assets/images/dev/matt.jpg"></a></li>
	</ul>
</div></div>
<!-- [END] Topbar -->

<div id="menu-wrap"><div id="menu">
	<?php include('menu.php'); ?>
</div></div>
<!-- [END] Menu -->

<div id="container">
	<div id="content-wrap"><div id="content">
		<?php include('content.php'); ?>
	</div></div>
	<!-- [END] Content -->
</div>
<!-- [END] Container -->

<div id="footer-wrap"><div id="footer">
	<p>&copy; <?php echo date('Y'); ?> Example</p>
	<ul>
		<li><a href="#" class="accent">Accented</a></li>
		<li><a href="#">Blog</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Terms</a></li>
		<li><a href="#">Privacy</a></li>
		<li><a href="#">Copyright</a></li>
	</ul>
</div></div>
<!-- [END] Footer -->

<script src="./assets/js/scripts.js"></script>
</body>
</html>

<?php

$loggedin = true;

?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Site</title>
    <meta name="viewport" content="width=1024">
    <link rel="shortcut icon" href="./assets/images/favicon.ico">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/rippin-icons.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body class="menu-regular menu-regular-active menu-regular-min-inactive">

<?php include('sprites.php'); ?>



<div id="topbar-wrap"><div id="topbar">
	<a href="javascript:void(0)" id="menulink"><span class="bars"></span><span class="arrow"></span></a>
	<a href="/" class="logo">RIPPIN'</a>
	<p class="slogan">The BMX, SKATE, SNOW &amp; SURF Marketplace</p>
	<form class="search">
		<input type="text" name="q" placeholder="Search" value="">
		<button type="submit">
            <svg viewBox="0 0 32 32" class="icon icon-search"><use xlink:href="#icon-search"></use></svg>
        </button>
	</form>
	<ul class="nav nav-cart">
		<li class="cart"><a href="#"><svg viewBox="0 0 32 32" class="icon-cart"><use xlink:href="#icon-cart"></use></svg><span class="count">1</span></a></li>
	</ul>
	<ul class="nav">
		<li><a href="#">Home</a></li>
		<li><a href="#">Explore</a></li>
		<li><a href="#">Sell</a></li>
	</ul>-
	<ul class="nav-account">
		<li class="messages"><a href="#"><svg viewBox="0 0 32 32" class="icon-mail"><use xlink:href="#icon-mail"></use></svg><span class="count">1</span></a></li>
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
		<style>
		.icon-home {
			font-size: 14px;
			color: #fff;
			padding: 20px;
			background: #5f5f5f;
		}
		</style>
		<span class="icon-home"></span>
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

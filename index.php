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

<div id="topbar-wrap"><div id="topbar">
	<a href="javascript:void(0)" id="menulink"><span class="bars"></span><span class="arrow"></span></a>
	<a href="/" class="logo">RIPPIN'</a>
	<p class="slogan">The BMX, SKATE, SNOW &amp; SURF Marketplace</p>
	<form class="search">
		<input type="text" name="q" placeholder="Search" value="">
		<button type="submit">
            <span class="icon icon-search"></span>
        </button>
	</form>
	<ul class="nav nav-cart">
		<li class="cart"><a href="#"><span class="icon icon-cart-alt"></span><span class="count">1</span></a></li>
	</ul>
	<ul class="subnav">
		<li><a href="#">Home</a></li>
		<li><a href="#">Explore</a></li>
		<li><a href="#">Sell</a></li>
	</ul>-
	<ul class="nav nav-account">
		<li class="messages"><a href="#"><span class="icon icon-mail"></span><span class="count">1</span></a></li>
		<li class="profile">
			<a href="javascript:void(0)"><img src="./assets/images/dev/matt.jpg"></a>
			<div id="nav-profile">
				<span class="arrow"></span>
				<div class="chunk noborder">
					<div class="profile">
						<a href="#" class="avatar"><img src="./assets/images/dev/matt.jpg"></a>
						<div class="info">
							<a href="#" class="name">Matt Tokoly</a>
							<div class="meta">@matt-tokoly</div>
						</div>
					</div>
				</div>
				<div class="chunk">
					<ul>
						<li><a href="#">View Your Shop</a></li>
						<li><a href="#">Add New Item</a></li>
						<li><a href="#">Shop Settings</a></li>
					</ul>
				</div>
				<div class="chunk">
					<ul>
						<li><a href="#">Your Profile</a></li>
						<li><a href="#">Messages</a></li>
						<li><a href="#">Purchases</a></li>
						<li><a href="#">Profile Settings</a></li>
					</ul>
				</div>
				<div class="chunk">
					<ul>
						<li><a href="#">Sign Out</a></li>
					</ul>
				</div>
			</div>
		</li>
	</ul>
</div></div>
<!-- [END] Topbar -->

<div id="menu-wrap"><div id="menu" class="clearfix">
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

<script src="./assets/js/jquery.menu-aim.js"></script>
<script src="./assets/js/scripts.js"></script>
</body>
</html>

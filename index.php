<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Test Site</title>
    <meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="./assets/css/normalize.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<div id="topbar">
</div>

<a href="javascript:void(0)" id="menulink">
	<span></span>
</a>

<div id="menu">
</div>

<div id="main">
	<div id="content"></div>
	<div id="footer">
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
	</div>
</div>

<script src="./assets/js/scripts.js"></script>
</body>
</html>
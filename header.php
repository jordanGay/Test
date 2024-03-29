<?php
    //Start session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="template/css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="template/css/grid.css" type="text/css" media="all">
	<link rel="stylesheet" href="template/css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="template/js/jquery-1.4.2.min.js" ></script>
	<script type="text/javascript" src="template/js/cufon-yui.js"></script>
	<script type="text/javascript" src="template/js/Myriad_Pro_italic_400-Myriad_Pro_italic_600.font.js"></script>
	<script type="text/javascript" src="template/js/cufon-replace.js"></script>	
	<script type="text/javascript" src="template/js/jquery.faded.js"></script>
	<script type="text/javascript" src="template/js/script.js"></script>
	<!--[if lt IE 7]>
		<link rel="stylesheet" href="template/css/ie/ie6.css" type="text/css" media="screen">
		<script type="text/javascript" src="template/js/ie_png.js"></script>
		<script type="text/javascript">
				ie_png.fix('.png, .logo, .extra-banner');
		</script>
	<![endif]-->
	<!--[if lt IE 9]>
		<script type="text/javascript" src="template/js/html5.js"></script>
	<![endif]-->
</head>

<body>
	<!-- header -->
	<header>
		<div class="container_16">
			<div class="logo">
				<h1><a href="index.html"><strong>Real</strong> Estate</a></h1>
			</div>
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="index-1.html" class="current">Selling</a></li>
					<li><a href="index-2.html">Buying</a></li>
					<li><a href="index-3.html">Renting</a></li>
					<li><a href="index-4.html">Moving</a></li>
					<li><a href="index-5.html">Finance</a></li>
					<li><a href="index-6.html">Contacts</a></li>
				</ul>
			</nav>
            
            <!-- From Jack: You will have change the listing here...-->
			<!-- faded slider begin -->
			<div id="faded">
				<div class="rap">
					<a href="#"><img src="images/big-img1.jpg" alt="" width="571" height="398"></a>
					<a href="#"><img src="images/big-img2.jpg" alt="" width="571" height="398"></a>
					<a href="#"><img src="images/big-img3.jpg" alt="" width="571" height="398"></a>
				</div>
				<ul class="pagination" style="right: auto; left: 600px;">
                                    <?php
                                    define("modify.php", True);
                                    include_once 'modify.php';
                                    ?>
				</ul>
				<img src="images/extra-banner.png" alt="" class="extra-banner">
			</div>
			<!-- faded slider end -->
		</div>
	</header>
<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\programs\yanger\MyBlog\public/../application/index\view\index\detail.html";i:1546938633;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Post detail</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<!-- Fonts-->
		<link rel="stylesheet" type="text/css" href="/assets/fonts/fontawesome/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/fonts/pe-icon/pe-icon.css">
		<!-- Vendors-->
		<link rel="stylesheet" type="text/css" href="/assets/vendors/bootstrap/grid.css">
		<link rel="stylesheet" type="text/css" href="/assets/vendors/magnific-popup/magnific-popup.min.css">
		<link rel="stylesheet" type="text/css" href="/assets/vendors/swiper/swiper.css">
		<!-- App & fonts-->
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Open+Sans:400,700">
		<link rel="stylesheet" type="text/css" id="app-stylesheet" href="/assets/css/main.css">
			
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<![endif]-->
	</head>
	
	<body>
		<div class="page-wrap" id="root">
			
			<!-- header -->
			<header class="header header--fixed">
				<div class="header__inner">
					<div class="header__logo"><a href="index"><img src="assets/img/logo.png" alt="" style="width: 122px;"/></a></div>
					<div class="navbar-toggle" id="fs-button">
						<div class="navbar-icon"><span></span></div>
					</div>
				</div>
				
				<!-- fullscreenmenu__module -->
				<div class="fullscreenmenu__module" trigger="#fs-button">
					
					<!-- overlay-menu -->
					<nav class="overlay-menu">
						
						<!--  -->
						<ul class="wil-menu-list">
							<li class="current-menu-item"><a href="/index">HOME</a>
							</li>
							<li class="current-menu-item"><a href="/notes">NOTES</a>
							</li>
							<li><a href="/materials">MATERIALS</a>
							</li>
							<li><a href="/summary">SUMMARY</a>
							</li>
							<li><a href="/personage">PERSONAGE</a>
							</li>
							<!-- <li><a href="contact.html">Contact</a>
							</li> -->
						</ul><!--  -->
						
					</nav><!-- End / overlay-menu -->
					
				</div><!-- End / fullscreenmenu__module -->
				
			</header><!-- End / header -->
			
			<!-- Content-->
			<div class="wil-content">
				
				<!-- Section -->
				<section class="awe-section">
					<div class="container">
						
						<!-- page-title -->
						<div class="page-title pb-40">
							<span class="post-detail__cat"><?php echo $data['category']; ?></span>
							<h2 class="page-title__title"><?php echo $data['title']; ?></h2>
							<div class="post-detail__meta"><span class="date"><?php echo $data['createtime']; ?></span><span class="author"><a href="#">by Yanger</a></span></div>
							<div class="page-title__divider"></div>
						</div><!-- End / page-title -->
						
					</div>
				</section>
				<!-- End / Section -->
				
				
				<!-- Section -->
				<section class="awe-section bg-gray">
					<div class="container">
						
						<!--  -->
						<div>
							<div class="post-detail__media"><img src="<?php echo $data['image']; ?>" alt=""/></div>
							<div class="post-detail__entry row">
								<div class="col-md-8">
									<h5><?php echo $data['introduce']; ?></h5>
									<?php echo $data['content']; ?>
								</div>
							</div>
						</div><!-- End /  -->
						
						<div class="awe-text-center mt-50">
							<a class="md-btn md-btn--outline-primary " href="blog.html">All block content
							</a>
						</div>
					</div>
				</section>
				<!-- End / Section -->
				
			</div>
			<!-- End / Content-->
			
		</div>
		<!-- Vendors-->
		<script type="text/javascript" src="/assets/vendors/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/imagesloaded/imagesloaded.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/isotope-layout/isotope.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery-one-page/jquery.nav.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.easing/jquery.easing.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.matchHeight/jquery.matchHeight.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/masonry-layout/masonry.pkgd.js"></script>
		<script type="text/javascript" src="/assets/vendors/jquery.waypoints/jquery.waypoints.min.js"></script>
		<script type="text/javascript" src="/assets/vendors/swiper/swiper.jquery.js"></script>
		<script type="text/javascript" src="/assets/vendors/menu/menu.js"></script>
		<script type="text/javascript" src="/assets/vendors/typed/typed.min.js"></script>
		<!-- App-->
		<script type="text/javascript" src="/assets/js/main.js"></script>
	</body>
</html>
<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">

	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo( 'template_url' ); ?>/img/favicon.ico" type="image/x-icon">
	<!-- responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- master stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/bootstrap-margin-padding.css">
	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css">

	<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/style.css"/>
	<?php wp_head(); ?>
</head>
<body>

<div class="preloader"></div>

<!--<section class="top-bar">
	<div class="container">
		<div class="left-text pull-left">
			<p><span>Opening Hours :</span> Monday to Saturday - 8am to 5pm</p>
		</div>

		<div class="social-icons pull-right">
			<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
		</div>

	</div>
</section>-->

<header class="header">
	<div class="container">
		<div class="logo pull-left">
			<a href="">

				<img style="margin-bottom: 16px;" src="<?php bloginfo( 'template_url' ); ?>/img/resources/arrow.png" alt="Awesome Image" /><span class="logo-txt">METALO SIA</span>
			</a>
		</div>
		<div class="header-right-info pull-right clearfix">
			<div class="single-header-info">
				<div class="icon-box">
					<div class="inner-box">
						<i class="flaticon-interface"></i>
					</div>
				</div>
				<div class="content">
					<h3>EMAIL</h3>
					<p>companyname@mail.com</p>
				</div>
			</div>
			<div class="single-header-info">
				<div class="icon-box">
					<div class="inner-box">
						<i class="flaticon-telephone"></i>
					</div>
				</div>
				<div class="content">
					<h3>Call Now</h3>
					<p><b>(732) 803-010-03</b></p>
				</div>
			</div>
			<!--<div class="single-header-info">
				<a href="appointment.html" class="thm-btn">Appointment</a>
			</div>-->
		</div>
	</div>
</header>
<!-- /.header -->
<nav class="mainmenu-area stricky">
	<div class="container">
		<div class="navigation pull-left">
			<div class="nav-header">
				<ul>
					<li><a href="<?php echo site_url(); ?>">Sākums</a></li>
					<li><a href="<?php echo site_url(); ?>/produkti/">Produkti</a></li>
					<li><a href="<?php echo site_url(); ?>/pakalpojumi">Pakalpojumi</a></li>
					<li><a href="<?php echo site_url(); ?>/galerija">Galerija</a></li>
					<li><a href="<?php echo site_url(); ?>/kontakti">Kontakti</a></li>
					<li><a href="<?php echo site_url(); ?>/izpardosana">Izpārdošana</a></li>
				</ul>
			</div>
			<div class="nav-footer">
				<button><i class="fa fa-bars"></i></button>
			</div>
		</div>
		<!--<div class="search-box pull-right">
			<form action="#">
				<input type="text" placeholder="Search...">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
		</div>-->
	</div>
</nav>
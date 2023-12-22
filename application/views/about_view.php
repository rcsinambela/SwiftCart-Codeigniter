<!-- application/views/about_view.php -->

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.118.2">
	<title>About - Quick and Easy Shopping Experience.</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

	<meta name="theme-color" content="#712cf9">
	<!-- CSS -->
	<?php if (ENVIRONMENT === 'production' || ENVIRONMENT === 'development') : ?>
		<link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
	<?php endif; ?>
	<link href="<?= base_url('/assets/libs/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('/assets/css/style.css') ?>">
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
		<a class="navbar-brand js-scroll-trigger" href="#page-top">
			<span class="d-block d-lg-none">Swift Cart</span>
			<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url('/assets/image/swift-cart.jpeg') ?>" /></span>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('about') ?>">About</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('') ?>">Home</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid p-0">
		<section class="resume-section" id="about">
			<div class="resume-section-content">
				<h1 class="mb-0">
					SWIFT
					<span class="text-primary">CART</span>
				</h1>
				<div class="subheading mb-5">
					FINAL PROJECT WEB PROGRAMMING C
				</div>
				<p class="lead mb-5">Dosen: Imam Kuswardayan, S.Kom, M.T.
					<br>
					Riyanda Cavin Sinambela - 5025221100
				</p>
				<div class="social-icons">
					<a class="social-icon" target="_blank" href="https://www.linkedin.com/in/riyanda-cavin-sinambela/"><i class="fab fa-linkedin-in"></i></a>
					<a class="social-icon" target="_blank" href="https://github.com/Rycs123"><i class="fab fa-github"></i></a>
					<a class="social-icon" target="_blank" href="https://twitter.com/ph0rce_here"><i class="fab fa-twitter"></i></a>
					<a class="social-icon" target="_blank" href="https://www.facebook.com/riyandacavin.sinambela"><i class="fab fa-facebook-f"></i></a>
				</div>
			</div>
		</section>
	</div>
	<!-- Bootstrap core JS-->
	<?php if (ENVIRONMENT === 'production' || ENVIRONMENT === 'development') : ?>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js"></script>
	<?php endif; ?>
	<!-- Core theme JS-->
	<script src="<?= base_url('/assets/js/script.js') ?>"></script>
</body>

</html>
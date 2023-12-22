<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Hugo 0.118.2">
	<title><?= isset($title) ? $title : 'Swift Cart' ?> - Quick and Easy Shopping Experience.</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

	<meta name="theme-color" content="#712cf9">
	<!-- CSS -->
	<link href="<?= base_url('/assets/libs/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('/assets/libs/fontawesome/css/all.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/assets/css/app.css') ?>">
</head>

<style>
	a {
		text-decoration: none;
	}
</style>

<body>

	<?php $this->load->view('layouts/_navbar') ?>

	<?php $this->load->view($page) ?>
	<script src="<?= base_url('/assets/js/app.js') ?>"></script>
	<script src="<?= base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('/assets/libs/jquery/jquery-3.4.1.min.js') ?>"></script>
</body>

</html>
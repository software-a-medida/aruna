<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="codemonkey.com.mx" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.0" type="text/css" media="all" />
		{$dependencies.css}
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WVX66WW');</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVX66WW"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header class="desktop_header p-t-40 p-b-40" style="width:100%;position:fixed;transition: 400ms;z-index:99;">
			<div class="container">
				<div class="row d-flex align-items-center no-gutters">
					<div class="col-md-2">
						<figure>
							<img src="{$path.images}aruna.png">
						</figure>
					</div>
					<div class="col-md-8">
						<nav>
							<ul class="d-flex align-items-center list-unstyled">
								<li class="m-r-15"><a href="?lang=es"><img src="{$path.images}es.png" style="height:15px;"></a></li>
								<li class="m-r-15"><a href="?lang=en"><img src="{$path.images}en.png" style="height:15px;"></a></li>
								<li class="m-r-15"><a href="#home" class="text-light">{$lang.home}</a></li>
								<li class="m-r-15"><a href="#about" class="text-light">{$lang.about_development}</a></li>
								<li><a href="#brochure" class="text-light">{$lang.brochure}</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-2">
						<figure>
							<img src="{$path.images}neoterre_desktop.png" style="width:100%;">
						</figure>
					</div>
				</div>
			</div>
		</header>
		<!-- <header class="mobile_header">

		</header> -->

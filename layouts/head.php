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
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.5" type="text/css" media="all" />
		{$dependencies.css}
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-WVX66WW');</script>
		<!-- End Google Tag Manager -->
		<!-- Facebook auth -->
		<meta name="facebook-domain-verification" content="sekq8qxdnfvfptnsnp20gatgb3o6dl" />
		<!-- End Facebook auth -->
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WVX66WW"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<header class="desktop_header p-t-10 p-t-md-40 p-b-10 p-b-md-40" style="width:100%;position:fixed;transition:400ms;z-index:98;">
			<div class="container">
				<div class="row d-flex align-items-center no-gutters">
					<div class="col-4 p-l-10" data-mobile-block>
						<nav>
							<ul class="d-flex align-items-center list-unstyled">
								<li><a class="btn btn-light btn-link" data-action="open_mobile_menu"><i class="fas fa-bars"></i></a></li>
							</ul>
						</nav>
					</div>
					<div class="col-4 col-md-2">
						<figure>
							<img class="img-fluid" src="{$path.images}aruna.png">
						</figure>
					</div>
					<div class="col-8 p-l-20" data-desktop>
						<nav>
							<ul class="d-flex align-items-center list-unstyled">
								<li class="m-r-15"><a href="/" class="text-light">{$lang.home}</a></li>
								<li class="m-r-15"><a href="#about" class="text-light">{$lang.about_development}</a></li>
								<li class="m-r-15"><a href="#brochure" class="text-light">{$lang.brochure}</a></li>
								<li class="m-r-15"><a href="#contact" class="text-light">{$lang.contact_us}</a></li>
								<li class="m-r-15"><a href="?lang=es" class="text-light"><strong>ES</strong></a></li>
								<li><a href="?lang=en" class="text-light"><strong>EN</strong></a></li>
							</ul>
						</nav>
					</div>
					<div class="col-4 col-md-2">
						<figure data-desktop>
							<img class="img-fluid" src="{$path.images}neoterre_desktop.png">
						</figure>
						<figure class="d-flex align-items-center justify-content-end p-r-10" data-mobile-flex>
							<img class="img-fluid" src="{$path.images}neoterre_mobile.png" style="width:40px;">
						</figure>
					</div>
				</div>
			</div>
		</header>
		<header class="mobile_header pos-relative d-flex align-items-center justify-content-center" data-mobile-flex style="width:300px;height:100vh;position:fixed;left:-300px;background-color:#000;transition:400ms;z-index:99;">
			<nav class="pos-absolute" style="top:20px;left:20px;">
				<ul>
					<li><a class="btn btn-light btn-link " data-action="close_mobile_menu"><i class="fas fa-times"></i></a></li>
				</ul>
			</nav>
			<nav>
				<ul class="d-flex align-items-center flex-column list-unstyled">
					<li class="m-b-20"><a href="#about" class="text-light" style="font-size:18px;">{$lang.about_development}</a></li>
					<li class="m-b-20"><a href="#brochure" class="text-light" style="font-size:18px;">{$lang.brochure}</a></li>
					<li class="m-b-20"><a href="#contact" class="text-light" style="font-size:18px;">{$lang.contact_us}</a></li>
					<li><a href="?lang=es" class="m-r-20 text-light" style="font-size:18px;"><strong>ES</strong></a><a href="?lang=en" class="text-light" style="font-size:18px;"><strong>EN</strong></a></li>
				</ul>
			</nav>
		</header>

<!DOCTYPE html><!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html>
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html>
<![endif]-->
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Single Product e-Commerce HTML Template">
		<meta name="author" content="createIT">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
		<meta name="format-detection" content="telephone=no">
		<link rel="shortcut icon" href="<?php echo PATH_IMAGES; ?>content/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo PATH_IMAGES; ?>content/favicon.png">
		<title>KSI Engineering - Découvrez le complément ultime pour votre véhicule</title>
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>style_blue.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>unslider.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>custom.css">
		<link rel="stylesheet" href="<?php echo PATH_JS; ?>jquery.jqplot.min.css">
		<!--[if lt IE 9]>
		<script src="<?php echo PATH_JS; ?>html5shiv.min.js"></script>
		<script src="<?php echo PATH_JS; ?>respond.min.js"></script>
		<script src="<?php echo PATH_JS; ?>es5-shim.min.js"></script><![endif]-->
	</head>
	<body class="cssAnimate smartphone">
		<?php include(PATH_VIEWS . "loader.php"); ?>
		<div class="ct-cart">
			<div class="ct-cart__inner">
				<div class="ct-cart__button ct-js-cart__button"><i class="fa fa-shopping-cart"></i></div>
				<div class="ct-cart__message"><i class="fa fa-thumbs-o-up"></i></div>
				<div class="ct-cart__product"></div>
			</div>
		</div>
		<div id="ct-js-wrapper" class="ct-js-wrapper ct-pageWrapper">
			<?php include(PATH_VIEWS . "navbar.php"); ?>
			<header data-background="<?php echo PATH_PICS; ?>rs6_gray.jpg" data-height="50%" class="ct-header darken">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<img src="<?php echo PATH_PICS; ?>logo_500px.png" class="logoHeaderPedalBox" style="height:100px; display:block; padding-bottom: 20px;" alt="">
								<h3 class="ct-header-title">Questions fréquentes</h3>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section>
			<div class="container">
				<div class="col-md-8 col-md-offset-2 ct-u-padding-top-60 ct-u-padding-bottom-100">
					<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
						<h3 class="h1 ct-sectionHeader-title text-center ct-u-padding-bottom-50"><small>Nous répondons à vos <span class="ct-u-colorMotive ct-u-color--accent">questions</span></small></h3>
						<?php include(PATH_VIEWS . 'listQuestions.php'); ?>
					</div>
				</div>
			</div>
			<section>
		<?php include(PATH_VIEWS . "footer.php"); ?>
		</div>
		<?php include(PATH_VIEWS . "mobileMenu.php"); ?>
		
		<!-- JavaScripts-->
		<script src="<?php echo PATH_JS; ?>disrupt.min.js"></script>
		<script src="<?php echo PATH_JS; ?>main.js"></script>
		<script src="assets/form/js/contact-form.js"></script>
		<!-- Plugins-->
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/lightgallery-all.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/init.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/imagesloaded.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/init.js"></script>
		<script src="<?php echo PATH_JS; ?>unslider-min.js"></script> 
		<script src="<?php echo PATH_JS; ?>jquery.jqplot.min.js"></script>
		
		<script>
			$('document').ready(function(e) {
			  $('.collapse').collapse({toggle: false});
			});
		</script>
		
	</body>
</html>
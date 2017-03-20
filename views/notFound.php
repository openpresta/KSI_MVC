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
		<div id="ct-js-wrapper" class="ct-js-wrapper ct-pageWrapper">
			<?php include(PATH_VIEWS . "navbar.php"); ?>
			<header data-background="<?php echo PATH_PICS; ?>rs6_gray.jpg" data-height="50%" class="ct-header darken">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<img src="<?php echo PATH_PICS; ?>logo_500px.png" class="logoHeaderPedalBox" style="height:100px; display:block; padding-bottom: 20px;" alt="">
								<h3 class="ct-header-title">Page introuvable</h3>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section class="ct-u-padding-top-70 ct-u-background--motive not_found">
	        <div id="product" class="container">
	          <div id="features" class="row">
	            <div class="col-sm-8 col-sm-offset-2">
	              <div class="ct-sectionHeader ct-sectionHeader--typeDarken ct-sectionHeader--subtitleItalic text-center ct-u-color--white">
	                <h3 class="ct-sectionHeader-title">Erreur <span>404</span></h3>
	                <h4 class="ct-sectionHeader-subtitle ct-u-color--white">La page demandée est introuvable</h4>
	                <p>Quelques pages qui pourraient vous intéresser...</p>
	                <a href="index.html" class="btn-group btn-group--separated">
		                <span class="btn btn-dark btn-lg btn-separated">Boîtier additionnel</span>
		                <span class="btn btn-dark btn-lg btn-separated"><i class="fa fa-home"></i></span>
		            </a>
		            <a href="index.html" class="btn-group btn-group--separated">
		                <span class="btn btn-dark btn-lg btn-separated">Module accélérateur</span>
		                <span class="btn btn-dark btn-lg btn-separated"><i class="fa fa-home"></i></span>
		            </a>

		            <span class="ct-sectionHeader-subtitle ct-u-color--white">ou sélectionnez votre véhicule</span>
	                
	              </div>
	            </div>
	          </div>
	        </div>
	      	</section>
	     	
	     	<div class="selectVehicle404noPaddingTop">   	
	      	<?php include(PATH_VIEWS . "vehicleSelect.php"); ?>
	     	</div>
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
		<script src="<?php echo PATH_JS; ?>vehicleSelect.js"></script>
		
	</body>
</html>
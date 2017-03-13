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
		<link rel="shortcut icon" href="assets/images/content/favicon.png">
		<link rel="apple-touch-icon" href="assets/images/content/favicon.png">
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
		<div class="ct-preloader">
			<div class="ct-preloader-inner">
				<div class="ct-preloader-logo">
					<img src="assets/images/content/drone/distrupt-logo-dark.png" alt="">
					<h6 class="ct-preloader-title">Please wait, loading...</h6>
					<div class="loading">
						<div class="loading-line"></div>
						<div class="loading-break loading-dot-1"></div>
						<div class="loading-break loading-dot-2"></div>
						<div class="loading-break loading-dot-3"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="ct-cart">
			<div class="ct-cart__inner">
				<div class="ct-cart__button ct-js-cart__button"><i class="fa fa-shopping-cart"></i></div>
				<div class="ct-cart__message"><i class="fa fa-thumbs-o-up"></i></div>
				<div class="ct-cart__product"></div>
			</div>
		</div>
		<div id="ct-js-wrapper" class="ct-js-wrapper ct-pageWrapper">
			<!-- Navigation-->
			<nav data-height="80" class="navbar navbar-default navbar-light navbar-desktop navbar--animated navbar-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="<?php echo PATH_PICS; ?>logo_500px.png" alt="" style="height: 40px; padding: 5px;"></a></div>
							<ul class="navbar-buttons list-unstyled list-inline pull-right">
								<li><a href="#order" data-scroll="#order" class="btn-group btn-group--separated"><span class="btn btn-xs btn-transparent btn--white btn-separated">mon véhicule</span><span class="btn btn-xs btn-transparent btn--white btn-separated"><i class="fa fa-search"></i></span></a></li>
							</ul>
							<ul role="menu" class="nav navbar-nav ct-navbar--fadeIn">
								<li class="nav-item"><a href="#features" data-scroll="#features">Accueil</a></li>
								<li class="nav-item"><a href="#features" data-scroll="#features">Boîtier additionnel</a></li>
								<li class="nav-item"><a href="#product" data-scroll="#product">Module accélerateur</a></li>
								<li class="nav-item"><a href="about-us.html">FAQ</a></li>
								<li class="nav-item"><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
			<header data-background="<?php echo PATH_MAKES_COVER . $make_url . ".jpg" ?>" data-height="50%" class="ct-header darken">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="ct-header-title"><?php echo $description; ?></h3>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section data-height="50%" id="progressHpNm">
			<div class="container ct-u-padding-both-50 ct-u-padding-bottom-20">
				<div class="col-md-6">
					<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
						<h3 class="h1 ct-sectionHeader-title text-center ct-u-padding-bottom-30"><small> <span>Courbe </span>de puissance</small></h3>
					</div>
					<div id="dynoDiv" style="height:300px;width:100%"></div>
				</div>
				<div class="col-md-6">
					<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
						<h3 class="h1 ct-sectionHeader-title text-center"><small> <span>+</span><?php echo $hpDiff; ?>ch<span> et +</span><?php echo $nmDiff; ?>Nm</small></h3>
						<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Un gain de <?php echo $hpDiff; ?> chevaux qui améliore le comportement sportif du véhicule et <?php echo $nmDiff; ?> Nm de couple en plus qui ajoute un véritable agrément de conduite au véhicule, moins de rétro-gradages, meilleures reprises et consommation en baisse.</h4>
						<div class="row">
							<div class="col-sm-6">
								<div class="ct-progressBar">
									<div class="ct-progressBar-title">Puissance d'origine</div>
									<div class="progress">
										<div role="progressbar" aria-valuenow="<?php echo $hpProcentOri; ?>" aria-valuemin="0" aria-valuemax="100" class="progress-bar">
											<div class="ct-progressBar-content"></div>
											<span class="ct-progressBar-text progressBarTextPuissance" aria-x-value="<?php echo $hpOri; ?>"></span>
										</div>
									</div>
								</div>
								<div class="ct-progressBar">
									<div class="ct-progressBar-title">Puissance avec KSI</div>
									<div class="progress">
										<div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar">
											<div class="ct-progressBar-content"></div>
											<span class="ct-progressBar-text  progressBarTextPuissance" aria-x-value="<?php echo $hpTun; ?>"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="ct-progressBar">
									<div class="ct-progressBar-title">Couple d'origine</div>
									<div class="progress">
										<div role="progressbar" aria-valuenow="<?php echo $nmProcentOri; ?>" aria-valuemin="0" aria-valuemax="100" class="progress-bar">
											<div class="ct-progressBar-content"></div>
											<span class="ct-progressBar-text progressBarTextCouple" aria-x-value="<?php echo $nmOri; ?>"></span>
										</div>
									</div>
								</div>
								<div class="ct-progressBar">
									<div class="ct-progressBar-title">Couple avec KSI</div>
									<div class="progress">
										<div role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar">
											<div class="ct-progressBar-content"></div>
											<span class="ct-progressBar-text progressBarTextCouple" aria-x-value="<?php echo $nmTun; ?>"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</section>
			<section data-background="#333" data-height="" class="ct-header">
				<div class="container">
					<div class="row">
						<div class="col-md-6 ct-u-padding-both-100">
							<div class="ct-sectionHeader ct-sectionHeader--typeLight text-center">
								<h3 class="ct-sectionHeader-title">Votre boîtier</h3>
								<h4 class="ct-sectionHeader-subtitle ct-u-padding-bottom-30">Les caractéristiques du boîtier adapté à votre voiture</h4>
								<table class="specsBoitier">
									<tr>
										<td>Marque</td>
										<td><?php echo $make; ?></td>
									</tr>
									<tr>
										<td>Modèle</td>
										<td><?php echo $modelDetailed; ?></td>
									</tr>
									<tr>
										<td>Cylindrée</td>
										<td><?php echo $volume; ?> cm<sup>3</sup></td>
									</tr>
									<?php if ($motorCode != "") { ?>
									<tr>
										<td>Code moteur</td>
										<td><?php echo $motorCode; ?></td>
									</tr>
									<?php } ?>
									<tr>
										<td>Câblage moteur</td>
										<td><?php echo $cableSet; ?></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col-md-6 ct-u-padding-both-100">
							<div class="ct-sectionHeader ct-sectionHeader--typeLight text-center">
								<h3 class="ct-sectionHeader-title">Vous changez de voiture ?</h3>
								<h4 class="ct-sectionHeader-subtitle ct-u-padding-bottom-30">Aucun problème ! Le boîtier comprend tout le matériel nécessaire pour pouvoir fonctionner sur n'importe quel véhicule, plus ancien ou plus récent. Une reprogrammation de ceux-ci suffit à les rendre compatible avec votre véhicule.</h4>
								<img src="<?php echo PATH_PICS; ?>box_indicator.png" style="height: 120px;" class="movingBoxIndicator left" />
								<img src="<?php echo PATH_PICS; ?>carsSelectedLeft.png" class="imageVoitures" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ct-u-margin-top-20--minus ct-u-padding-both-100">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
								<h3 class="ct-sectionHeader-title">Installation en 15 minutes. Top chrono !</h3>
								<h4 class="ct-sectionHeader-subtitle"></h4>
							</div>
						</div>
					</div>
					<div class="row text-center">
						<div class="col-md-4 text-center"><img src="<?php echo PATH_PICS; ?>cables.png" alt="" class="" style="height:300px; padding-top: 20px;"></div>
						<div class="col-md-8">
							<h4 class="ct-sectionHeader-subtitle" style="padding-top: 30px; color: #5f5f5f; font-size: medium;">A l'aide du guide d'installation et des vidéos explicatives, installez votre boîtier facilement, sans aucune connaissance technique. Notre support technique est disponible 7j/7 pour répondre à vos questions concernant l'installation. Montage également possible directement en nos ateliers.</h4>
							<div class="row ct-u-padding-top-30">
							<div class="col-md-6">
								<ul class="ct-list-decorated">
									<li><span>Installation rapide</span>
									</li>
									<li><span>Support technique 7j/7</span>
									</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="ct-list-decorated">
									<li><span>Guide d'installation détaillé</span>
									</li>
									<li><span>Vidéos d'installation</span>
									</li>
								</ul>
							</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section data-background="<?php echo PATH_PICS; ?>gaspedal.jpg" data-height="40%" class="ct-header">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="ct-sectionHeader ct-sectionHeader--typeLight ct-sectionHeader--subtitleItalic text-center" style="padding-top: 200px;">						
								<a href="#order" data-scroll="#order" class="btn-group btn-group--separated"><span class="btn btn-transparent btn--withIcon btn--motiveColor btn-separated" style="margin-right: -1px !important;">Découvrez le KSI PedalBox<i class="fa fa-caret-right"></i></span><span class="btn btn-transparent btn--motiveColor btn-separated">€ 139</span></a>
								<h3 class="ct-sectionHeader-title">Le complément ultime au boîtier additionnel !</h3>
								<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 40px;">Le PowerBox pour le gain de puissance, le PedalBox pour encore un meilleur feeling !</h4>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ct-u-margin-top-20--minus ct-u-padding-both-100">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
								<h3 class="ct-sectionHeader-title">Certification EMC, la garantie de sécurité.</h3>
							</div>
						</div>
					</div>
					<div class="row ct-u-padding-top-40">
						<div class="col-md-3 col-md-offset-2 text-center ct-u-padding-top-20"><img src="<?php echo PATH_PICS; ?>tuv_emc.png" alt="" class=""></div>
						<div class="col-md-5">
							<h4 class="ct-sectionHeader-subtitle" style="padding-top: 30px; color: #5f5f5f; font-size: medium; vertical-align: middle;">Nos technologies sont homologuées pour pouvoir être installées sur des véhicules de tous types sans danger.</h4>
						</div>
					</div>
				</div>
			</section>
			<?php require_once(PATH_VIEWS . "vehicleSelect.php"); ?>
			
			<?php require_once(PATH_VIEWS . "footer.php"); ?>
			
		</div>
		<!-- Mobile Menu //-->
		<div class="ct-menu-mobile">
			<nav class="navbar navbar-dark">
				<div class="container">
					<div class="row">
						<div class="col-xs-4 col-sm-4 hidden-xs">
							<ul class="list-unstyled list-inline ct-socials--rounded">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
						<div class="col-xs-7 col-sm-4">
							<div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="assets/images/content/beacon/distrupt-logo-light.png" alt=""></a></div>
						</div>
						<div class="col-xs-5 col-sm-4">
							<ul role="menu" class="nav navbar-nav">
								<li class="ct-productCart-link"><a><i class="fa fa-shopping-cart"></i></a>
								</li>
								<li class="nav-item-toggle"><a><i class="fa fa-bars"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="navbar-beacon">
			<ul class="list-unstyled">
				<li class="nav-item dropdown">
					<a href="#">Home<i class="fa fa-angle-double-down"></i></a>
					<ul role="menu" class="dropdown-menu">
						<li class="nav-item"><a href="index3.html">Smartwatch</a></li>
						<li class="nav-item"><a href="index.html">Drone</a></li>
						<li class="nav-item"><a href="index5.html">Smartphone</a></li>
						<li class="nav-item"><a href="index2.html">Beacon</a></li>
						<li class="nav-item"><a href="index4.html">VR</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="#features" data-scroll="#features">Features</a></li>
				<li class="nav-item"><a href="#product" data-scroll="#product">Product</a></li>
				<li class="nav-item dropdown">
					<a href="services.html">Pages<i class="fa fa-angle-double-down"></i></a>
					<ul role="menu" class="dropdown-menu">
						<li class="nav-item"><a href="services.html">Services</a></li>
						<li class="nav-item"><a href="404.html">404 page</a></li>
						<li class="nav-item"><a href="press-kit.html">Press kit</a></li>
						<li class="nav-item"><a href="shop-locator.html">Shop locator</a></li>
						<li class="nav-item"><a href="faq.html">FAQ</a></li>
						<li class="nav-item"><a href="investors.html">Investors</a></li>
						<li class="nav-item"><a href="privacy-policy.html">Privacy Policy</a></li>
						<li class="nav-item"><a href="terms-conditions.html">Terms & conditions</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="about-us.html">About us</a></li>
				<li class="nav-item"><a href="contact-us.html">Contact</a></li>
			</ul>
			<ul class="list-unstyled list-inline ct-socials--rounded">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
		<!-- Variables generated by PHP and used by external JS files -->
		<script>
			var PATH_PICS = "<?php echo PATH_PICS; ?>";
			
			var hpTun = "<?php echo $hpTun; ?>";
			var nmTun = "<?php echo $nmTun; ?>";
			
			var hpOriTab = [
			    [0, 0],
			    [1000, <?php echo $hpOri * 0.1	;?>],
			    [2000, <?php echo $hpOri * 0.23	;?>],
			    [3000, <?php echo $hpOri * 0.42	;?>],
			    [4000, <?php echo $hpOri * 0.57	;?>],
			    [5000, <?php echo $hpOri * 0.72	;?>],
			    [6000, <?php echo $hpOri * 0.90	;?>],
			    [7000, <?php echo $hpOri * 1	;?>],
			    [8000, 0]
			];
			var nmOriTab = [
			    [0, 0],
			    [1000, <?php echo $nmOri * 0.40	;?>],
			    [2000, <?php echo $nmOri * 0.85	;?>],
			    [3000, <?php echo $nmOri * 0.86	;?>],
			    [4000, <?php echo $nmOri * 0.85	;?>],
			    [5000, <?php echo $nmOri * 0.90	;?>],
			    [6000, <?php echo $nmOri * 1	;?>],
			    [7000, <?php echo $nmOri * 0.4	;?>],
			    [8000, 0]
			];
			var hpTunTab = [
			    [0, 0],
			    [1000, <?php echo $hpTun * 0.15	;?>],
			    [2000, <?php echo $hpTun * 0.30	;?>],
			    [3000, <?php echo $hpTun * 0.48	;?>],
			    [4000, <?php echo $hpTun * 0.65	;?>],
			    [5000, <?php echo $hpTun * 0.78	;?>],
			    [6000, <?php echo $hpTun * 0.83	;?>],
			    [7000, <?php echo $hpTun * 1	;?>],
			    [8000, <?php echo $hpTun * 0	;?>]
			];
			var nmTunTab = [
			    [0, 0],
			    [1000, <?php echo $nmTun * 0.45	;?>],
			    [2000, <?php echo $nmTun * 0.90	;?>],
			    [3000, <?php echo $nmTun * 0.91	;?>],
			    [4000, <?php echo $nmTun * 0.90	;?>],
			    [5000, <?php echo $nmTun * 0.95	;?>],
			    [6000, <?php echo $nmTun * 1	;?>],
			    [7000, <?php echo $nmTun * 0.5	;?>],
			    [8000, 0]
			];
		</script>
		
		
		<!-- JavaScripts-->
		<script src="<?php echo PATH_JS; ?>disrupt.min.js"></script>
		<script src="<?php echo PATH_JS; ?>main.js"></script>
		<!-- Plugins-->
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/lightgallery-all.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/init.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/imagesloaded.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/init.js"></script>
		<script src="<?php echo PATH_JS; ?>unslider-min.js"></script> 
		<script src="<?php echo PATH_JS; ?>jquery.jqplot.min.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/progressBar/progress-bar.js"></script> 
		<script src="<?php echo PATH_JS; ?>vehicleSelect.js"></script> 
		<script src="<?php echo PATH_JS; ?>dynoPlotter.js"></script> 
		<script src="<?php echo PATH_JS; ?>changeCarSlider.js"></script> 
	</body>
</html>
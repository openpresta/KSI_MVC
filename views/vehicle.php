<!DOCTYPE html><!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html>
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html>
<![endif]-->
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Boîtier additionnel KSI pour <?php echo $description; ?>">
		<meta name="author" content="<?php echo AUTHOR; ?>">
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
		<?php include(PATH_VIEWS . "loader.php") ?>
		<div id="ct-js-wrapper" class="ct-js-wrapper ct-pageWrapper">
			<?php include(PATH_VIEWS . 'navbar.php'); ?>
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
					<div class="row">
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
					<div class="row ct-u-padding-both-30" id="orderButton" style="text-align: center;">
						<a href="<?php echo ORDER_URL . $productID . ".html"; ?>" class="btn-group btn-group--separated">
							<span class="btn btn-dark btn-lg btn-separated btnBlueCustom">Commander votre boîtier KSI</span>
							<span class="btn btn-dark btn-lg btn-separated btnBlueCustom">
							€ <?php echo $powerBoxPrice; ?>
							</span>
						</a>
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
								<h4 class="ct-sectionHeader-subtitle ct-u-padding-bottom-30">Aucun problème ! Le boîtier additionnel comprend tout le matériel nécessaire pour pouvoir fonctionner sur n'importe quel véhicule, plus ancien ou plus récent. Une reprogrammation de ceux-ci suffit à les rendre compatible avec votre véhicule.</h4>
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
							<h4 class="ct-sectionHeader-subtitle" style="padding-top: 30px; color: #5f5f5f; font-size: medium;">A l'aide du guide d'installation et des vidéos explicatives, installez votre boîtier additionnel facilement, sans aucune connaissance technique. Notre support technique est disponible 7j/7 pour répondre à vos questions concernant l'installation. Montage également possible directement en nos ateliers.</h4>
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
								<a href="<?php echo PEDALBOX_URL; ?>" class="btn-group btn-group--separated"><span class="btn btn-transparent btn--withIcon btn--motiveColor btn-separated" style="margin-right: -1px !important;">Découvrez le KSI PedalBox<i class="fa fa-caret-right"></i></span><span class="btn btn-transparent btn--motiveColor btn-separated">€ <?php echo $pedalBoxPrice; ?></span></a>
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
			<?php include(PATH_VIEWS . "vehicleSelect.php"); ?>
			<?php include(PATH_VIEWS . "footer.php"); ?>
		</div>
		<?php include(PATH_VIEWS . "mobileMenu.php"); ?>
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
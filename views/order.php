<!DOCTYPE html><!--[if IE 8 ]>
<html lang="en" class="no-js ie8"></html>
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="no-js ie9"></html>
<![endif]-->
<html class="no-js" lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Commandez votre boîtier additionnel ou pedalbox KSI et boostez votre voiture">
		<meta name="author" content="<?php echo AUTHOR; ?>">
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
	<body class="cssAnimate smartphone" id="order">
		<?php include(PATH_VIEWS . "loader.php"); ?>
		<div id="ct-js-wrapper" class="ct-js-wrapper ct-pageWrapper">
			<?php include(PATH_VIEWS . "navbar.php"); ?>
			<header data-background="<?php echo PATH_PICS; ?>bmw_x6m_x5m_rear.jpg" data-height="50%" class="ct-header darken bottomLineBlue">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<img src="<?php echo PATH_PICS; ?>logo_500px.png" class="logoHeaderPedalBox" style="height:100px; display:block; padding-bottom: 20px;" alt="">
								<h3 class="ct-header-title">Commande</h3>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section data-background="#1a1a1a">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<div class="ct-address ct-address--col3 ct-address--ascendingMotive">
								<div class="inner">
									<div class="ct-address-item">
										<div class="ct-widget">
											<div class="ct-widget-icon"><i class="fa fa-shopping-cart"></i></div>
											<div class="ct-widget-content">
												<h4 class="ct-widget-title">Votre commande</h4>
												<p class="ct-widget-description">Faites-vous plaisir</p>
											</div>
										</div>
									</div>
									<div class="ct-address-item">
										<div class="ct-widget">
											<div class="ct-widget-icon"><i class="fa fa-drivers-license-o"></i></div>
											<div class="ct-widget-content">
												<h4 class="ct-widget-title">Coordonnées</h4>
												<p class="ct-widget-description">Petits détails techniques</p>
											</div>
										</div>
									</div>
									<div class="ct-address-item">
										<div class="ct-widget">
											<div class="ct-widget-icon"><i class="fa fa-credit-card"></i></div>
											<div class="ct-widget-content">
												<h4 class="ct-widget-title">Paiement</h4>
												<p class="ct-widget-description">Commande 100% sécurisée</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row ct-u-padding-both-40">
						<div class="col-md-3 col-sm-12">
							<div class="ct-iconBox ct-iconBox--type4 media ct-iconBox--white colorful">
								<div class="media-left">
									<div class="ct-iconBox-icon"><i class="fa fa-car"></i></div>
								</div>
								<div class="media-body" style="margin-top: 0px;">
									<h6 class="ct-iconBox-title">Votre véhicule</h6>
									<p class="ct-iconBox-description">Vérifiez les informations</p>
								</div>
							</div>
						</div>
						<div class="col-md-9 col-sm-12 ct-u-padding-both-40">

								<div class="row">
									<div class="col-md-7">
										<p class="value border-top-bottom-color"><?php echo $description; ?></p>
									</div>
									<div class="col-md-2">
										<p class="value border-top-bottom-color"><?php echo $volume; ?>cm<sup>3</sup></p>
									</div>
									<div class="col-md-3">
										<p class="value border-top-bottom-color"><?php echo $year; ?></p>
									</div>
								</div>
							</p>
						</div>
					</div>
				</div>
			</section>
			<section data-background="#f3f3f3" id="product" class="ct-u-padding-bottom-20">
				<div class="container">
					<h4 class="ct-u-padding-both-40" style="text-align: center; font-weight: 500; padding-top:0px;">Choisissez un PowerBox, un PedalBox ou les deux pour encore plus de sensations.</h4>
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="ct-iconBox ct-iconBox--type5 ct-u-margin-bottom-20 ct-iconBox--variant product selected" id="both">
								<div class="ct-iconBox-icon"><i class="fa fa-tachometer"></i> + <i class="fa fa-flash"></i></div>
								<p class="productLabel">PowerBox et PedalBox</p>
								<p class="productprice">€ <?php echo $bothPrice; ?></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="ct-iconBox ct-iconBox--type5 ct-u-margin-bottom-20 ct-iconBox--variant product" id="powerbox">
								<div class="ct-iconBox-icon"><i class="fa fa-tachometer"></i></div>
								<p class="productLabel">PowerBox</p>
								<p class="productprice">€ <?php echo $powerBoxPrice; ?></p>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="ct-iconBox ct-iconBox--type5 ct-u-margin-bottom-20 ct-iconBox--variant product" id="pedalbox">
								<div class="ct-iconBox-icon"><i class="fa fa-flash"></i></div>
								<p class="productLabel">PedalBox</p>
								<p class="productprice">€ <?php echo $pedalBoxPrice; ?></p>
							</div>
						</div>
						<input type="text" id="selectedProduct" name="selectedProduct" value="both" hidden/>
					</div>
				</div>
			</section>
			<section data-background="#1a1a1a" id="details" class="">
				<div class="container">
					<div class="row ct-u-padding-top-50 ct-u-padding-bottom-30">
						<div class="col-md-3 col-sm-12">
							<div class="ct-iconBox ct-iconBox--type4 media ct-iconBox--white">
								<div class="media-left">
									<div class="ct-iconBox-icon"><i class="fa fa-envelope-o"></i></div>
								</div>
								<div class="media-body">
									<h6 class="ct-iconBox-title">Informations</h6>
									<p class="ct-iconBox-description"></p>
								</div>
							</div>
						</div>
						<div class="col-md-9 col-sm-12">
							<div role="alert" style="display:none" class="successMessage alert alert-success alert-dismissible">Thank you. Your message has been sent correctly.
								<button type="button" data-dismiss="alert" aria-hidden="true" aria-label="Close" class="close">x</button>
							</div>
							<div role="alert" style="display:none" class="successError alert alert-danger alert-dismissible">Ups! An error occured. Please try again later.
								<button type="button" data-dismiss="alert" aria-hidden="true" aria-label="Close" class="close">x      </button>
							</div>
							<form action="assets/form/send.php" method="POST" data-email-subject="Disrupt" class="ct-contactForm validateIt">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" placeholder="Prénom*" id="inputFirstName" name="firstName" required="required" class="form-control"/>
											<label for="inputFirstName" class="sr-only">Nom*</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" placeholder="Nom*" id="inputLastName" name="lastName" required="required" class="form-control"/>
											<label for="inputLastName" class="sr-only">Prenom*</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<input type="email" placeholder="Adresse mail" id="inputEmail" name="email" class="form-control"/>
											<label for="inputEmail" class="sr-only">Adresse email</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-8">
										<div class="form-group">
											<input type="text" placeholder="Adresse" id="inputAddressStreet" name="addressStreet" class="form-control"/>
											<label for="inputAddressStreet" class="sr-only">Adresse / Rue / Avenue</label>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<input type="text" placeholder="N°" id="inputAddressNumber" name="addressNumber" required="required" class="form-control"/>
											<label for="inputAddressNumber" class="sr-only">N°</label>
										</div>
									</div>
									<div class="col-sm-2">
										<div class="form-group">
											<input type="text" placeholder="Bte" id="inputAddressBox" name="addressBox" required="required" class="form-control"/>
											<label for="inputAddressBox" class="sr-only">Boite</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" placeholder="Ville / commune" id="inputAddressCity" name="addressCity" class="form-control"/>
											<label for="inputAddressCity" class="sr-only">Ville / Commune</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" placeholder="Code postal" id="inputAddressPostal" name="addressPostal" required="required" class="form-control"/>
											<label for="inputAddressPostal" class="sr-only">Code postal</label>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<input type="text" placeholder="Pays" id="inputAddressCountry" name="addressCountry" required="required" class="form-control"/>
											<label for="inputAddressCountry" class="sr-only">Pays</label>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			<section data-background="#f3f3f3" id="payment" class="ct-u-padding-bottom-20">
				<div class="container">
					<h4 class="ct-u-padding-both-40" style="text-align: center; font-weight: 500; padding-top:0px;">Voici le récapitulatif de votre commande</h4>
					<div class="row">
						<div class="col-md-4 col-sm-12">
							<div class="ct-iconBox ct-iconBox--type1 ct-iconBox--variant">
								<div class="ct-iconBox-icon"><i class="fa fa-car"></i></div>
								<h6 class="ct-iconBox-title">Votre voiture</h6>
								<p class="ct-iconBox-description">Audi A6 C7 3.0 TFSI<br>2997cm<sup>3</sup><br>2011 -> 2014</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-12">
							<table id="total">
								<tr id="powerBoxLine">
									<td>KSI PowerBox</td>
									<td>€ <?php echo $powerBoxPrice; ?></td>
								</tr>
								<tr id="pedalBoxLine">
									<td>KSI PedalBox</td>
									<td>€ <?php echo $pedalBoxPrice; ?></td>
								</tr>
								<tr class="topBorder">
									<td>Sous-total</td>
									<td>€ 549</td>
								</tr>
								<tr class="topBorder">
									<td>TVA 17%</td>
									<td>€ 53,43</td>
								</tr>
								<tr class="topBorder">
									<td>Montant total</td>
									<td>€ 549</td>
								</tr>
							</table>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="ct-iconBox ct-iconBox--type1 ct-iconBox--variant">
								<div class="ct-iconBox-icon"><i class="fa fa-credit-card"></i></div>
								<h6 class="ct-iconBox-title">Payer</h6>
								<p class="ct-iconBox-description">Cliquez sur l'icône pour procéder au paiement, les moyens de paiement acceptés sont : Paypal, Visa, Mastercard, ...</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include(PATH_VIEWS . "footer.php"); ?>
		</div>
		<?php include(PATH_VIEWS . "mobileMenu.php"); ?>
		
		<script>
			
			var bothPrice = <?php echo $bothPrice; ?>;
			var powerBoxPrice = <?php echo $powerBoxPrice; ?>;
			var pedalBoxPrice = <?php echo $pedalBoxPrice; ?>;
			
		</script>
		
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
		<script src="<?php echo PATH_JS; ?>order.js"></script>
	</body>
</html>
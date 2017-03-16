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
			<header data-background="<?php echo PATH_PICS; ?>bmw_x6m_x5m_rear.jpg" data-height="50%" class="ct-header darken bottomLineBlue">
				<div class="inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<img src="<?php echo PATH_PICS; ?>logo_500px.png" class="logoHeaderPedalBox" style="height:100px; display:block; padding-bottom: 20px;" alt="">
								<h3 class="ct-header-title">Contactez-nous !</h3>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section data-background="#262626">
		        <div class="container">
		          <div class="row">
		            <div class="col-sm-12">
		              <div class="ct-address ct-address--col3 ct-address--descendingMotive">
		                <div class="inner"><a href="tel:01234567890" class="ct-address-item">
		                    <div class="ct-widget">
		                      <div class="ct-widget-icon"><i class="fa fa-phone"></i></div>
		                      <div class="ct-widget-content">
		                        <h4 class="ct-widget-title">0474017382</h4>
		                        <p class="ct-widget-description">Appelez-nous !</p>
		                      </div>
		                    </div></a><a href="mailto:info@example.com" class="ct-address-item">
		                    <div class="ct-widget">
		                      <div class="ct-widget-icon"><i class="fa fa-envelope-o"></i></div>
		                      <div class="ct-widget-content">
		                        <h4 class="ct-widget-title">info@ksi.com</h4>
		                        <p class="ct-widget-description">Par email</p>
		                      </div>
		                    </div></a>
		                  <div class="ct-address-item">
		                    <div class="ct-widget">
		                      <div class="ct-widget-icon"><i class="fa fa-clock-o"></i></div>
		                      <div class="ct-widget-content">
		                        <h4 class="ct-widget-title">LUN - SAM, 8-18h</h4>
		                        <p class="ct-widget-description">Heures d'ouvertures</p>
		                      </div>
		                    </div>
		                  </div>
		                </div>
		                <div class="ct-address--footer"><i class="fa fa-home"></i><span>Nacherwee 12, 9644 Dahl, Luxembourg</span></div>
		              </div>
		            </div>
		          </div>
		          <div class="row ct-u-padding-top-80 ct-u-padding-bottom-75">
		            <div class="col-md-3 col-sm-12">
		              <div class="ct-iconBox ct-iconBox--type4 media ct-iconBox--white">
		                <div class="media-left">
		                  <div class="ct-iconBox-icon"><i class="fa fa-envelope-o"></i></div>
		                </div>
		                <div class="media-body">
		                  <h6 class="ct-iconBox-title">Contactez-nous</h6>
		                  <p class="ct-iconBox-description"></p>
		                </div>
		              </div>
		            </div>
		            <div class="col-md-9 col-sm-12 ct-u-padding-top-25">
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
		                      <input type="text" placeholder="Nom*" id="cf-name" name="field[]" required="required" class="form-control"/>
		                      <label for="cf-name" class="sr-only">Nom*</label>
		                    </div>
		                  </div>
		                  <div class="col-sm-4">
		                    <div class="form-group">
		                      <input type="email" placeholder="Adresse e-mail*" id="cf-email" name="field[]" required="required" class="form-control"/>
		                      <label for="cf-email" class="sr-only">Adresse e-mail*</label>
		                    </div>
		                  </div>
		                  <div class="col-sm-4">
		                    <div class="form-group">
		                      <input type="text" placeholder="N° de téléphone" id="cf-website" name="field[]" class="form-control"/>
		                      <label for="cf-website" class="sr-only">N° de téléphone</label>
		                    </div>
		                  </div>
		                </div>
		                <div class="row">
		                  <div class="col-sm-6">
		                    <div class="form-group">
		                      <input type="tel" placeholder="Marque du véhicule" id="cf-phone" name="field[]" class="form-control"/>
		                      <label for="cf-phone" class="sr-only">Marque du véhicule</label>
		                    </div>
		                  </div>
		                  <div class="col-sm-6">
		                    <div class="form-group">
		                      <input type="text" placeholder="Modèle / Motorisation / Année" id="cf-subject" name="field[]" required="required" class="form-control"/>
		                      <label for="cf-subject" class="sr-only">Modèle / Motorisation / Année</label>
		                    </div>
		                  </div>
		                </div>
		                <div class="row">
		                  <div class="col-sm-12">
		                    <div class="form-group">
		                      <textarea placeholder="Questions / Demande d'informations / Autre*" id="cf-message" rows="1" required="required" class="form-control"></textarea>
		                      <div class="ct-contactForm-requiredMessage">* Les champs marqués d'une étoile sont obligatoires</div>
		                      <button type="submit" class="btn btn--withIcon">Envoyer<i class="fa fa-caret-right"></i></button>
		                      <label for="cf-message" class="sr-only">Questions / Demande d'informations / Autre*</label>
		                    </div>
		                  </div>
		                </div>
		              </form>
		            </div>
		          </div>
		        </div>
		      </section>
		      <section data-background="#f3f3f3" id="product" class="ct-u-padding-top-100 ct-u-padding-bottom-80">
		        <div class="container">
		          <div class="row">
		            <div class="col-md-3 col-sm-6">
		              <div class="ct-iconBox ct-iconBox--type5 ct-u-margin-bottom-20 ct-iconBox--variant">
		                <div class="ct-iconBox-icon"><i class="fa fa-university"></i></div><a href="investors.html" class="btn btn-transparent btn--motiveColor btn--withIcon">For investors<i class="fa fa-caret-right"></i></a>
		              </div>
		            </div>
		            <div class="col-md-3 col-sm-6">
		              <div class="ct-iconBox ct-iconBox--type5 ct-u-margin-bottom-20 ct-iconBox--variant">
		                <div class="ct-iconBox-icon"><i class="fa fa-newspaper-o"></i></div><a href="press-kit.html" class="btn btn-transparent btn--motiveColor btn--withIcon">Press &amp; Media<i class="fa fa-caret-right"></i></a>
		              </div>
		            </div>
		            <div class="col-md-3 col-sm-6">
		              <div class="ct-iconBox ct-iconBox--type5 ct-u-margin-bottom-20 ct-iconBox--variant">
		                <div class="ct-iconBox-icon"><i class="fa fa-map-marker"></i></div><a href="shop-locator.html" class="btn btn-transparent btn--motiveColor btn--withIcon">Shop locator<i class="fa fa-caret-right"></i></a>
		              </div>
		            </div>
		            <div class="col-md-3 col-sm-6">
		              <div class="ct-iconBox ct-iconBox--type5 ct-u-margin-bottom-20 ct-iconBox--variant">
		                <div class="ct-iconBox-icon"><i class="fa fa-envelope-o"></i></div><a href="contact-us.html" class="btn btn-transparent btn--motiveColor btn--withIcon">Contact us<i class="fa fa-caret-right"></i></a>
		              </div>
		            </div>
		          </div>
		        </div>
		      </section>
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
		
	</body>
</html>
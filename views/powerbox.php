<!DOCTYPE html><!--[if IE 8 ]>
<html lang="fr" class="no-js ie8"></html>
<![endif]-->
<!--[if IE 9 ]>
<html lang="fr" class="no-js ie9"></html>
<![endif]-->
<html class="no-js" lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Single Product e-Commerce HTML Template">
		<meta name="author" content="createIT">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1, shrink-to-fit=no">
		<meta name="format-detection" content="telephone=no">
		<link rel="shortcut icon" href="<?php echo PATH_IMAGES; ?>content/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo PATH_IMAGES; ?>content/favicon.png">
		<title>KSI Engineering - Découvrez le meilleur boîtier additionnel du marché</title>
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>style_blue.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>unslider.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>custom.css">
		<link rel="stylesheet" href="<?php echo PATH_CSS; ?>jquery.jqplot.min.css">
		<!--[if lt IE 9]>
		<script src="<?php echo PATH_JS; ?>html5shiv.min.js"></script>
		<script src="<?php echo PATH_JS; ?>respond.min.js"></script>
		<script src="<?php echo PATH_JS; ?>es5-shim.min.js"></script><![endif]-->
	</head>
	<body class="cssAnimate smartphone">
		<div class="ct-preloader">
			<div class="ct-preloader-inner">
				<div class="ct-preloader-logo">
					<img src="<?php echo PATH_PICS; ?>logo-light.png" alt="">
					<h4 class="ct-preloader-title">Découvrez le meilleur boîtier additionnel du marché.</h4>
					<div class="loading">
						<div class="loading-line"></div>
						<div class="loading-break loading-dot-1"></div>
						<div class="loading-break loading-dot-1"></div>
						<div class="loading-break loading-dot-2"></div>
						<div class="loading-break loading-dot-2"></div>
						<div class="loading-break loading-dot-3"></div>
						<div class="loading-break loading-dot-3"></div>
						<div class="loading-break loading-dot-4"></div>
						<div class="loading-break loading-dot-5"></div>
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
			<div data-items="1" data-dots="true" data-height="100%" data-draggable="true" data-arrows="false" class="ct-js-slick ct-u-displayTable ct-dots--type1 ct-dots--positionBottom">
				<div data-background="<?php echo PATH_PICS; ?>bmw_x6m_x5m.jpg" class="item text-center">
					<div class="item-inner">
						<div class="ct-pageHeader ct-pageHeader--type1">
							<img src="<?php echo PATH_PICS; ?>logo_500px.png" style="margin-left: auto; margin-right: auto;" height="100" alt="">
							<h1 class="ct-pageHeader-title ct-u-color--white">Découvrez le meilleur <span class="ct-u-colorMotive">boîtier additionnel</span> du marché</h1>
							<div class="btn-group ct-u-margin-top-30">
								<a href="#next-section-1" data-scroll="#next-section-1" class="btn btn-transparent btn--withIcon btn--motiveColor">Découvrez le KSI PowerBox<i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div data-background="<?php echo PATH_PICS; ?>vw_golf_gti_performance.jpg" class="item text-center">
					<div class="item-inner">
						<div class="ct-pageHeader ct-pageHeader--type1">
							<h1 class="ct-pageHeader-title ct-u-color--white">Découvrez le meilleur des<span class="ct-u-colorMotive">boîtiers additionnels</span> du marché</h1>
							<div class="btn-group ct-u-margin-top-30">
								<a href="#next-section-1" data-scroll="#next-section-1" class="btn btn-transparent btn--withIcon btn--motiveColor">Découvrez le KSI PowerBox<i class="fa fa-caret-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include(PATH_VIEWS . "vehicleSelect.php"); ?>
			<section id="moreinfo">
				<div class="ct-gallery--col2">
					<div class="ct-gallery-item">
						<figure class="ct-imageBox ct-imageBox--inline ct-imageBox--left">
							<img src="<?php echo PATH_PICS; ?>more-col.jpg" alt="">
							<figcaption>
								<div class="inner">
									<div class="inner-cell">
										<div class="ct-imageBox-icon"><i class="fa fa-adn"></i></div>
									</div>
									<div class="inner-cell">
										<div class="ct-imageBox-content">
											<p>Boîtiers additionnels intelligents et adaptatifs</p>
											<a href="faq.html" class="btn btn-transparent btn--withIcon btn--motiveColor">KSI PowerBox<i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
					<div class="ct-gallery-item">
						<figure class="ct-imageBox ct-imageBox--inline">
							<img src="<?php echo PATH_IMAGES; ?>content/smartphone/more-col2.jpg" alt="">
							<figcaption>
								<div class="inner">
									<div class="inner-cell">
										<div class="ct-imageBox-icon"><i class="fa fa-map-o"></i></div>
									</div>
									<div class="inner-cell">
										<div class="ct-imageBox-content">
											<p>Optimisation de l'accélérateur</p>
											<a href="shop-locator.html" class="btn btn-transparent btn--withIcon btn--motiveColor">KSI PedalBox<i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</figcaption>
						</figure>
					</div>
				</div>
			</section>
			<section id="features" class="ct-u-padding-top-70 ct-u-padding-bottom-80">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 ct-u-padding-bottom-30">
							<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
								<h3 class="h1 ct-sectionHeader-title text-center"><small>Les atouts du boîtier<span class="ct-u-colorMotive ct-u-color--accent"> KSI</span></small></h3>
								<h4 class="ct-sectionHeader-subtitle">Cliquez sur les icônes pour en apprendre plus sur ce qui fait la force du KSI PowerBox.</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="container" style="padding-top: 50px;">
					<div class="row" id="slider_atouts_icones">
						<div class="col-md-2 col-sm-4 col-xs-6" onclick="slideTo(0);">
							<div class="ct-iconBox ct-iconBox--type1 selected">
								<div class="ct-iconBox-icon"><i class="fa fa-shield"></i></div>
								<h6 class="ct-iconBox-title">Robuste</h6>
								<p class="ct-iconBox-description">Conçu pour durer</p>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6" onclick="slideTo(1);">
							<div class="ct-iconBox ct-iconBox--type1">
								<div class="ct-iconBox-icon"><i class="fa fa-tachometer"></i></div>
								<h6 class="ct-iconBox-title">Performances</h6>
								<p class="ct-iconBox-description">Testées au banc de puissance</p>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6" onclick="slideTo(2);">
							<div class="ct-iconBox ct-iconBox--type1">
								<div class="ct-iconBox-icon"><i class="fa fa-microchip"></i></div>
								<h6 class="ct-iconBox-title">Intelligent</h6>
								<p class="ct-iconBox-description">S'adapte à la situation</p>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6" onclick="slideTo(3);">
							<div class="ct-iconBox ct-iconBox--type1">
								<div class="ct-iconBox-icon"><i class="fa fa-leaf"> </i></div>
								<h6 class="ct-iconBox-title">Econome</h6>
								<p class="ct-iconBox-description">-15% consommation</p>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6" onclick="slideTo(4);">
							<div class="ct-iconBox ct-iconBox--type1">
								<div class="ct-iconBox-icon"><i class="fa fa-check-circle-o"></i></div>
								<h6 class="ct-iconBox-title">Garantie</h6>
								<p class="ct-iconBox-description">constructeur préservée</p>
							</div>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6" onclick="slideTo(5);">
							<div class="ct-iconBox ct-iconBox--type1">
								<div class="ct-iconBox-icon"><i class="fa fa-clock-o"></i></div>
								<h6 class="ct-iconBox-title">Facile à installer</h6>
								<p class="ct-iconBox-description">15 minutes chrono</p>
							</div>
						</div>
					</div>
					<div id="slider_atouts">
						<ul class="unslider_element">
							<li class="unslider_element">
								<div class="col-md-5 text-center ct-u-padding-top-50"><img src="<?php echo PATH_PICS; ?>boitier.png" alt="" class="ct-animationFloating--horizontal"></div>
								<div class="col-md-7">
									<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
										<h3 class="h1 ct-sectionHeader-title text-center"><small> <span>Un boîtier </span>robuste</small></h3>
										<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Un boîtier solide et des connectiques résistantes à l'eau, la poussière et aux différences de températures.</h4>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>ISO/TS 16959</span>
												</li>
												<li><span>Indice protection IP67</span>
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Connectiques d'origine</span>
												</li>
												<li><span>Technologie ShockProof™</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="unslider_element">
								<div class="col-md-7">
									<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
										<h3 class="h1 ct-sectionHeader-title text-center"><small> <span>Des performances </span>vérifiées.</small></h3>
										<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Nos logiciels sont testés sur banc de puissance à de multiples reprises afin de vérifier l'authenticité des chiffres annoncés. Aucune mauvaise surprise.</h4>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Banc de puissance MSR 1000</span>
												</li>
												<li><span>Precision de mesure : 2%</span>
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Jusqu'à +30% de puissance</span>
												</li>
												<li><span>Sécurités moteur conservées</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-5 text-center ct-u-padding-top-50">
									<div id="chartdiv" style="height:300px;width:100%"></div>
								</div>
							</li>
							<li class="unslider_element">
								<div class="col-md-7">
									<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
										<h3 class="h1 ct-sectionHeader-title text-center"><small> <span>Jusqu'à </span>5 canaux de données.</small></h3>
										<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Notre boîtier prend en compte des dizaines de paramètres pour optimiser le moteur au maximum sans risquer de le fragiliser. La puissance est disponible instantanément quand vous en avez besoin et est réduite aussitôt que vous ne l'utilisez plus.</h4>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Banc de puissance MSR 1000</span>
												</li>
												<li><span>Precision de mesure : 2%</span>
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Jusqu'à +30% de puissance</span>
												</li>
												<li><span>Sécurités moteur conservées</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-5 text-center ct-u-padding-top-50"><img src="<?php echo PATH_PICS; ?>regulation.png" alt="" class=""></div>
							</li>
							<li class="unslider_element">
								<div class="col-md-7">
									<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
										<h3 class="h1 ct-sectionHeader-title text-center"><small><span>Consommez </span>moins<span>.</small><br><small><span>Profitez </span>plus<span>.</span></small></h3>
										<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Grâce à une augmentation de couple considérable, votre moteur devient plus performant et consomme moins à conduite équivalente.</h4>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Jusqu'à -15% de consommation</span></li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Véhicule plus souple et plus réactif</span></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-5 text-center ct-u-padding-top-50"><img src="<?php echo PATH_PICS; ?>pompe.png" alt="" class="ct-animationFloating--horizontal"></div>
								<!-- Schéma cables qui se rejoignent avec signe Validé et 15 minutes-->
							</li>
							<li class="unslider_element">
								<div class="col-md-5 text-center ct-u-padding-top-0"><img src="<?php echo PATH_PICS; ?>contrat.png" alt="" class=""></div>
								<div class="col-md-7">
									<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
										<h3 class="h1 ct-sectionHeader-title text-center"><small><span>Garantie </span>préservée<span>.</small></small></h3>
										<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Le boîtier additionnel ne modifiant en rien les caractéristiques de votre véhicule, son installation est entièrement indétectable.<br><br>Le démontage se fait en seulement quelques minutes et laisse le véhicule dans un état 100% d'origine</h4>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Aucune soudure ou modification requise</span></li>
												<li><span>Système "Plug & Play"</span></li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Le logiciel du véhicule reste d'origine</span></li>
												<li><span>Détection informatique impossible.</span></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
							<li class="unslider_element">
								<div class="col-md-5 text-center ct-u-padding-top-0"><img src="<?php echo PATH_PICS; ?>cables.png" style="height: 350px; padding-top: 0px;" alt="" class=""></div>
								<div class="col-md-7">
									<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
										<h3 class="h1 ct-sectionHeader-title text-center"><small><span>1, 2, 3 ... </span>et la magie opère.<span></small></small></h3>
										<h4 class="ct-sectionHeader-subtitle" style="padding-bottom: 20px;">Installation en seulement quelques minutes avec les connecteurs d'origine grâce à un guide papier et des vidéos détaillées.</h4>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Aucune soudure ou modification requise</span></li>
												<li><span>Système "Plug & Play"</span></li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="ct-list-decorated">
												<li><span>Le logiciel du véhicule reste d'origine</span></li>
												<li><span>Détection informatique impossible.</span></li>
											</ul>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section data-parallax="50" data-background="<?php echo PATH_PICS; ?>rs6_inside.jpg" id="product" class="ct-u-padding-both-100 ct-u-display-table">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="ct-sectionHeader ct-sectionHeader--typeLight ct-sectionHeader text-center">
								<h3 class="ct-sectionHeader-title">Une technologie certifiée.</h3>
								<h4 class="ct-sectionHeader-subtitle">Toutes nos solutions sont certifiées et témoignent ainsi de la qualité et de la sécurité de nos appareils.</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="container-full">
					<div class="row">
						<div class="col-sm-12 ct-u-padding-both-0 text-center-sm ct-u-padding-both-30-sm">
							<div class="container">
								<div class="row">
									<div class="col-md-3">
										<div class="ct-iconBox ct-iconBox--type1">
											<img class="grayscale" src="<?php echo PATH_PICS; ?>tuv.png" />
										</div>
									</div>
									<div class="col-md-3">
										<div class="ct-iconBox ct-iconBox--type1">
											<img class="grayscale" src="<?php echo PATH_PICS; ?>vdat.png" />
										</div>
									</div>
									<div class="col-md-3">
										<div class="ct-iconBox ct-iconBox--type1">
											<img class="grayscale" src="<?php echo PATH_PICS; ?>garantie.png" />
										</div>
									</div>
									<div class="col-md-3">
										<div class="ct-iconBox ct-iconBox--type1">
											<img class="grayscale" src="<?php echo PATH_PICS; ?>tuv.png" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="ct-u-margin-top-20--minus ct-u-padding-both-100">
				<div class="container">
					<div class="row">
						<div class="ct-sectionHeader ct-sectionHeader--typeDarken text-center">
							<h3 class="ct-sectionHeader-title">Un concentré d'innovations</h3>
							<h4 class="ct-sectionHeader-subtitle">Alliant sécurité et confort d'utilisation, les technologies KSI sont probablement<br>le meilleur choix que vous puissiez faire pour votre voiture.</h4>
						</div>
					</div>
					<div class="row ct-u-padding-top-20">
						<div class="ct-productPreview">
							<div class="col-md-5">
								<div class="ct-productPreview-image text-center"><img src="<?php echo PATH_PICS; ?>tuning_box.jpg" alt=""></div>
							</div>
							<div class="col-md-7 ct-u-padding-top-40">
								<div data-padding-position="left" class="ct-iconBox--stepped ct-u-padding-top-20">
									<div class="ct-iconBox ct-iconBox--type2 ct-iconBox--dark" data-padding="110" data-left-position="-140px" data-width="230px">
										<div class="media-left">
											<div class="ct-iconBox-icon"><i class="fa fa-thermometer-half"></i></div>
										</div>
										<div class="media-body">
											<h6 class="ct-iconBox-title">Respecte le temps de chauffe</h6>
											<p class="ct-iconBox-description">Le respect de la mécanique, secret de la longévité.</p>
										</div>
										<span class="ct-iconBox-decorativeLine ct-u-indentInvisible" style="-webkit-transform: rotate(-6deg); margin-top:30px;">Decorative line</span>
									</div>
									<div class="ct-iconBox ct-iconBox--type2 ct-iconBox--dark ct-u-padding-both-20" data-padding="260" data-left-position="-230px" data-width="0px">
										<div class="media-left">
											<div class="ct-iconBox-icon"><i class="fa fa-connectdevelop"></i></div>
										</div>
										<div class="media-body">
											<h6 class="ct-iconBox-title">Un réglage fin</h6>
											<p class="ct-iconBox-description">Le boîtier BullPower optimise les paramètres moteurs sur base de pas moins de 7 sources de données, égalant ainsi une reprogrammation.</p>
										</div>
									</div>
									<div class="ct-iconBox ct-iconBox--type2 ct-iconBox--dark" data-padding="190" data-left-position="-100px" data-width="260px">
										<div class="media-left">
											<div class="ct-iconBox-icon"><i class="fa fa-wifi"></i></div>
										</div>
										<div class="media-body">
											<h6 class="ct-iconBox-title">MultiProfile™</h6>
											<p class="ct-iconBox-description">Application mobile permettant de choisir la programmation moteur.</p>
										</div>
										<span class="ct-iconBox-decorativeLine ct-u-indentInvisible" style="-webkit-transform: rotate(15deg); margin-top: -50px;">Decorative line</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<?php include(PATH_VIEWS . "vehicleSelect.php"); ?>
						
			<!-- Footer-->
			<footer class="ct-footer">
				<div class="ct-footer-top">
					<div class="container">			
						<div class="row">
							<div class="col-sm-12">
								<div class="ct-preFooter ct-u-padding-top-60">
									<div class="row">
										<div class="col-sm-12 col-md-6 text-center-md">
											<div class="widget">
												<div class="widget-inner">
													<ul class="list-unstyled list-inline ct-socials text-center-sm ct-u-padding-top-15">
														<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a></li>
														<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a></li>
														<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a></li>
														<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
														<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Vkontakte"><i class="fa fa-vk"></i></a></li>
														<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
														<li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Rss"><i class="fa fa-rss"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6 text-right text-center-md">
											<div class="widget">
												<div class="widget-inner">
													<div role="alert" style="display:none" class="successMessage alert alert-success alert-dismissible">Thank you. Your message has been sent correctly.
														<button type="button" data-dismiss="alert" aria-hidden="true" aria-label="Close" class="close">x</button>
													</div>
													<div role="alert" style="display:none" class="successError alert alert-danger alert-dismissible">Ups! An error occured. Please try again later.
														<button type="button" data-dismiss="alert" aria-hidden="true" aria-label="Close" class="close">x  </button>
													</div>
													<form action="assets/form/send.php" method="POST" data-email-subject="Newsletter" class="ct-newsletter form-inline validateIt">
														<div class="form-group">
															<label for="ct-newsletter">Abonnez-vous à la newsletter</label><span class="inner">
															<input type="email" id="ct-newsletter" placeholder="Adresse e-mail" name="field[]" required="required" class="form-control"/>
															<button type="submit"><i class="fa fa-plus-circle"></i></button></span>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<nav class="ct-footer-nav">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<div class="widget">
										<div class="widget-inner"><img src="<?php echo PATH_PICS; ?>logo_500px.png" style="height:50px; display: block; margin-left: auto; margin-right: auto;" alt="" class="ct-footer-brand"></div>
									</div>
								</div>
								<div class="col-sm-8">
									<div class="row">
										<div class="col-sm-4 col-xs-6">
											<div class="widget">
												<div class="widget-inner">
													<ul class="list-unstyled ct-menu-footer">
														<li><a href="index.html">Accueil</a></li>
														<li><a href="services.html">Selection véhicule</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-xs-6">
											<div class="widget">
												<div class="widget-inner">
													<ul class="list-unstyled ct-menu-footer">
														<li><a href="faq.html">Boitier additionnel</a></li>
														<li><a href="privacy-policy.html">Module accélerateur</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-xs-6">
											<div class="widget">
												<div class="widget-inner">
													<ul class="list-unstyled ct-menu-footer">
														<li><a href="about-us.html">FAQ</a></li>
														<li><a href="contact-us.html">Contact</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
				<div class="ct-footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="ct-payments">
									<div class="row">
										<div class="col-sm-3">
											<div class="widget">
												<div class="widget-inner"><a href="shop-locator.html" class="ct-link ct-link--arrowMotive text-uppercase">Où sommes-nous ?</a></div>
											</div>
										</div>
										<div class="col-sm-9">
											<div class="widget">
												<div class="widget-inner">
													<div class="ct-payments-icons"><span class="ct-payment-title">Nous acceptons la plupart des modes de paiement:</span><img src="<?php echo PATH_PICS; ?>payment-icons.png" alt=""></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="ct-footer-copyright">
									<div class="row">
										<div class="col-sm-7"><span class="ct-copyright-text">© 2016 Tous droits réservés.</span></div>
										<div class="col-sm-5">
											<ul class="list-inline list-unstyled ct-list-terms">
												<li><a href="terms-conditions.html">CGV</a></li>
												<li><a href="privacy-policy.html">Politique de confidentialité</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
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
							<div class="navbar-header"><a href="index.html" class="navbar-brand"><img src="<?php echo PATH_IMAGES; ?>content/beacon/distrupt-logo-light.png" alt=""></a></div>
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
		<!-- JavaScripts-->
		<script src="<?php echo PATH_JS; ?>disrupt.min.js"></script>
		<script src="<?php echo PATH_JS; ?>main.js"></script>
		<script src="<?php echo PATH_FORM; ?>js/contact-form.js"></script>
		<!-- Plugins-->
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/lightgallery-all.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/lightgallery/init.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/jquery.isotope.min.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/imagesloaded.js"></script>
		<script src="<?php echo PATH_JS; ?>plugins/isotope/init.js"></script>
		<script src="<?php echo PATH_JS; ?>unslider-min.js"></script> 
		<script src="<?php echo PATH_JS; ?>jquery.jqplot.min.js"></script>
		<script src="<?php echo PATH_JS; ?>vehicleSelect.js"></script>
		<script>
			jQuery(document).ready(function($) {
				$('#slider_atouts').unslider({
					arrows: false
				});
			});
			
			var autoSlide = true;
			var debut = 0;
			
			setTimeout(console.log('hello'), 2000);
				
						
			
			function slideTo(n) {
				$('#slider_atouts').unslider('animate:' + n);
				$('#slider_atouts_icones > div > div').removeClass('selected');
				$('#slider_atouts_icones > div:nth-child(' + (n+1) + ') > div').addClass('selected');
				debut++;
			}
			
			
			var oemHpValues = [[0,0],[1000,23],[2000,78],[3000,129],[4000,174],[5000,219],[6000,270],[7000,300],[8000,0]];
			var oemNmValues  = [[0,0],[1000,175],[2000,300],[3000,346],[4000,346],[5000,361],[6000,380],[7000,342],[8000,0]];
			var stageHpValues  = [[0,0],[1000,27],[2000,94],[3000,155],[4000,209],[5000,263],[6000,324],[7000,360],[8000,0]];
			var stageNmValues  = [[0,0],[1000,221],[2000,379],[3000,437],[4000,437],[5000,456],[6000,480],[7000,432],[8000,0]];
			
			var chart;
			
			setTimeout(function() {
			var $ = jQuery;
			chart = $.jqplot('chartdiv',  [ oemHpValues, oemNmValues, stageHpValues, stageNmValues  ], {
				animate: true,
				animateReplot: false,
				seriesDefaults: {
					showMarker: false,
				},
				axesDefaults: {
					showTicks: true,
					showTickMarks: false
				},
				grid:{
					borderColor:'transparent',
					background: 'transparent',
					shadow:false,
					drawBorder:false,
					shadowColor:'transparent'
				},
				axes : {
					xaxis: {
						tickInterval: 0,
						drawMajorGridlines: false,
						drawMinorGridlines: false,
						drawMajorTickMarks: false,
						rendererOptions: {
							tickInset: 0,
							minorTicks: 0
						},
						tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
						tickOptions: {
							fontSize: '10pt',
							textColor: "#999"
						},
						pad: 0,
						label: 'tr/min',
						labelOptions: {
							fontFamily: 'Open Sans',
							fontSize: '9pt',
							textColor: "#999"
						}
			
					},
					yaxis: {
						tickOptions: {
							formatString: "%'d",
							fontSize: '10pt',
							textColor: "gray"
						},
						rendererOptions: {
							forceTickAt0: false,
							alignTicks: true,
						},
						min:0,
						max:462,
						pad: 0,
						label: 'Puissance (CV)',
						labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
						labelOptions: {
							fontFamily: 'Open Sans',
							fontSize: '9pt',
							textColor: "#00bcdf"
						}
					},
					y2axis: {
						tickOptions: {
							formatString: "%'d",
							fontSize: '10pt',
							textColor: "gray"
						},
						rendererOptions: {
							// align the ticks on the y2 axis with the y axis.
							alignTicks: true,
							forceTickAt0: false
						},
						min:0,
						max:502,
						pad: 0,
						label: 'Couple (Nm)',
						labelRenderer: $.jqplot.CanvasAxisLabelRenderer,
						labelOptions: {
							fontFamily: 'Open Sans',
							fontSize: '9pt',
							textColor: "#00bcdf"
						}
					}
				},
				series: [
					{
						color: "gray",
						yaxis: 'yaxis',
						rendererOptions: {
							smooth: true,
						}
					},
					{
						color:'gray',
						yaxis: 'y2axis',
						rendererOptions: {
							smooth: true
						}
					},
					{
						color: "#00bcdf",
						yaxis: 'yaxis',
						rendererOptions: {
							smooth: true
						}
					},
					{
						color:"#00bcdf",
						yaxis: 'y2axis',
						rendererOptions: {
							smooth: true
						}
					}
				]
			});
			
			
			},1000);
			
			function charthover(i) {
				chart.activateTheme('hover_'+i);
			}
			function chartdown() {
				chart.activateTheme('Default');
			}
			

	        
			
			
		</script>
	</body>
</html>
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
							<div class="widget-inner"><img src="<?php echo PATH_PICS; ?>logo_500px.png" style="height:60px; display: block; margin-left: auto; margin-right: auto;" alt="" class="ct-footer-brand"></div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-4 col-xs-6">
								<div class="widget">
									<div class="widget-inner">
										<ul class="list-unstyled ct-menu-footer">
											<li><a href="<?php echo POWERBOX_URL; ?>">Accueil</a></li>
											<li><a href="<?php echo POWERBOX_URL; ?>">Selection véhicule</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="widget">
									<div class="widget-inner">
										<ul class="list-unstyled ct-menu-footer">
											<li><a href="<?php echo POWERBOX_URL; ?>">Boitier additionnel</a></li>
											<li><a href="<?php echo PEDALBOX_URL; ?>">Module accélerateur</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="widget">
									<div class="widget-inner">
										<ul class="list-unstyled ct-menu-footer">
											<li><a href="<?php echo FAQ_URL; ?>">FAQ</a></li>
											<li><a href="<?php echo CONTACT_URL; ?>">Contact</a></li>
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
									<div class="widget-inner"><a href="#" class="ct-link ct-link--arrowMotive text-uppercase">Où sommes-nous ?</a></div>
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
									<li><a href="<?php echo CGV_URL; ?>">Conditions générales de vente</a></li>
									<li><a href="<?php echo CONFID_URL; ?>">Politique de confidentialité</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
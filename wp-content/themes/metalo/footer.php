<footer class="footer bg-style">
	<div class="footer-upper">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="footer-widget about-widget">

						<a href="<?php echo site_url(); ?>"><img style="margin-top: -17px;" src="<?php bloginfo( 'template_url' ); ?>/img/resources/logo_white.png"/></a>
						<p>Lorem ipsum dolor sit amet, eu me evert laboramus, iudico </p>
						<ul class="contact">
							<li><i class="fa fa-map-marker"></i> <span>60 Grant Ave. Carteret NJ 0708</span></li>
							<li><i class="fa fa-phone"></i> <span>(880) 1723801729</span></li>
							<li><i class="fa fa-envelope-o"></i> <span>example@gmail.com</span></li>
						</ul>
						<ul class="social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-6">
					<div class="footer-widget quick-links">
						<h3 class="title">Pakalpojumi</h3>
						<ul>
							<li><a class="disabled" href="service-details.html">Virpošana </a></li>
							<li><a class="disabled" href="service-details.html">Frēzēšana</a></li>
							<li><a class="disabled" href="service-details.html">Urbšana</a></li>
							<li><a class="disabled" href="service-details.html">Griešana</a></li>
							<li><a class="disabled" href="service-details.html">Metināšana</a></li>

						</ul>
					</div>
				</div>
				<div class="col-md-3 latest-post col-sm-6">
					<div class="footer-widget latest-post news-post">
						<h3 class="title">Pedējās ziņas</h3>
						<ul>
							<li>
								<span class="border"><img src="<?php bloginfo( 'template_url' ); ?>/img/blog/s1.jpg" alt=""></span>
								<div class="content">
									Metālapstrādes pakalpojumi Rēzeknē ...
									<span>31 Dec, 2016</span>
								</div>
							</li>
							<li>
								<span class="border"><img src="<?php bloginfo( 'template_url' ); ?>/img/blog/s2.jpg" alt=""></span>
								<div class="content">
									SIA "Peslaka metālapstrāde" kalēju...
									<span>31 Dec, 2016</span>
								</div>
							</li>
							<li>
								<span class="border"><img src="<?php bloginfo( 'template_url' ); ?>/img/blog/s3.jpg" alt=""></span>
								<div class="content">
									Visus izstrādājumus raksturo augsta kvalitāte...
									<span>31 Dec, 2016</span>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="footer-widget contact-widget">
<!--						<h3 class="title">Kontaktu forma</h3>-->
<!--						<form action="inc/sendemail.php" class="contact-form" id="footer-cf">-->
<!--							<input type="text" name="name" placeholder="Vārds Uzvārds">-->
<!--							<input type="text" name="email" placeholder="Epasta adrese">-->
<!--							<textarea name="message" placeholder="Jūsu ziņa"></textarea>-->
<!--							<button type="submit">Sūtīt</button>-->
<!--						</form>-->
						<?php echo do_shortcode( '[contact-form-7 id="103" title="Footer kontaktu forma"]' ); ?>
					</div>


				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container text-center">
			<p> <a href="<?php echo site_url(); ?>">Metalo SIA</a> &copy; 2016 | Visas tiesības aizsargātas.</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

<script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyC65qTskUjsL4_7f9gWsNfkGbUJ5p5bXv0"></script>

<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.js"></script>
<!-- bootstrap -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.bxslider.min.js"></script>
<!-- appear js -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/jquery.appear.js"></script>-->
<!--<!-- count to -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/jquery.countTo.js"></script>-->
<!--<!-- owl carousel -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/owl.carousel.min.js"></script>-->
<!--<!-- validate -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/validate.js"></script>-->
<!--<!-- mixit up -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/jquery.mixitup.min.js"></script>-->
<!--<!-- fancybox -->
<script src="<?php bloginfo( 'template_url' ); ?>/js/jquery.fancybox.pack.js"></script>
<!--<!-- easing -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/jquery.easing.min.js"></script>-->
<!--<!-- isotope script -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/isotope.pkgd.min.js"></script>-->
<!--<!-- jQuery ui js -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/js/jquery-ui-1.11.4/jquery-ui.js"></script>-->
<!--<!-- revolution scripts -->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/jquery.themepunch.tools.min.js"></script>-->
<!--<script src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/jquery.themepunch.revolution.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.actions.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.carousel.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.migration.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.navigation.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.parallax.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>-->
<!--<script type="text/javascript" src="--><?php //bloginfo( 'template_url' ); ?><!--/revolution/js/extensions/revolution.extension.video.min.js"></script>-->
<!-- thm custom script -->
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/tosrus/src/js/jquery.tosrus.min.all.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/gmap.js"></script>
<script src="<?php bloginfo( 'template_url' ); ?>/js/custom.js"></script>

</body>
</html>
<?php
/*
 * Template Name: Kontakti
 */
?>
<?php get_header(); ?>
<?php $page = get_page_by_title( 'Kontakti' );
$content = apply_filters('the_content', $page->post_content); ?>

<section class="contact-content sec-padding">
	<div class="container">
		<div class="sec-title text-center">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
				<br> the industry's standard dummy text ever since the 1500s, when an unknownto </p>
		</div>
		<div class="google-map" id="contact-page-google-map"
		     data-icon-path="<?php bloginfo( 'template_url' ); ?>/img/resources/map-marker.png"
		     data-map-lat="56.589266"
		     data-map-lng="27.251053"
		     data-map-zoom="10"
		     data-map-title="Envato HQ">

		</div>
		<div class="row">
			<div class="col-md-8">
				<h2>Kontaktu forma</h2>
				<!--<form action="<?php bloginfo( 'template_url' ); ?>/inc/sendemail.php" class="contact-form row" id="contact-page-contact-form">
					<div class="col-md-6">
						<input type="text" name="name" placeholder="Vārds">
						<input type="text" name="email" placeholder="Epasts">
						<input type="text" name="phone" placeholder="Telefons">
					</div>
					<div class="col-md-6">
						<textarea name="message" placeholder="Jūsu ziņa" cols="30" rows="10"></textarea>
					</div>
					<div class="col-md-12">
						<button type="submit">Send</button>
					</div>
				</form>-->

				<?php echo $content; ?>
			</div>
			<div class="col-md-4">
				<h2>Adrese</h2>
				<ul class="contact-info">
					<li>
						<div class="icon-box">
							<div class="inner">
								<i class="fa fa-map-marker"></i>
							</div>
						</div>
						<div class="content-box">
							<h4>Adrese</h4>
							<p>Rēzeknes nov., Audriņu pag., Audriņi,
								<br>"Kurzemnieki", LV-4611</p>
						</div>
					</li>
					<li>
						<div class="icon-box">
							<div class="inner">
								<i class="fa fa-phone"></i>
							</div>
						</div>
						<div class="content-box">
							<h4>Telefons</h4>
							<p>+371 292 631 05</p>
						</div>
					</li>
					<li>
						<div class="icon-box">
							<div class="inner">
								<i class="fa fa-envelope-o"></i>
							</div>
						</div>
						<div class="content-box">
							<h4>Epasts</h4>
							<p>info@somecompanyname.com, otheremail@gmail.com</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!--<section class="sponsors-section" data-bg-color="#fbca00">-->
<!--	<div class="container">-->
<!--		<ul class="slider">-->
<!--			<li>-->
<!--				<a href="#"><img src="--><?php //bloginfo( 'template_url' ); ?><!--/img/clients/brand-1.png" alt="" title=""></a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="#"><img src="--><?php //bloginfo( 'template_url' ); ?><!--/img/clients/brand-2.png" alt="" title=""></a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="#"><img src="--><?php //bloginfo( 'template_url' ); ?><!--/img/clients/brand-3.png" alt="" title=""></a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="#"><img src="--><?php //bloginfo( 'template_url' ); ?><!--/img/clients/brand-4.png" alt="" title=""></a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="#"><img src="--><?php //bloginfo( 'template_url' ); ?><!--/img/clients/brand-5.png" alt="" title=""></a>-->
<!--			</li>-->
<!--			<li>-->
<!--				<a href="#"><img src="--><?php //bloginfo( 'template_url' ); ?><!--/img/clients/brand-1.png" alt="" title=""></a>-->
<!--			</li>-->
<!--		</ul>-->
<!--	</div>-->
<!--</section>-->
<script>
	jQuery(document).on('ready', function() {
		var form = $('.contact-content').find('form');
		$( form ).attr( 'id', 'contact-page-contact-form');
		$( form ).addClass('contact-form');
		$( form ).addClass('row');
	});
</script>
<?php get_footer(); ?>
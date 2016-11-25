<?php
/*
 * Template Name: Galerija
 */
?>
<?php get_header();


$args = array(
	'posts_per_page'    => -1,
	'order'             => 'DESC',
	'post_type'         => 'gallery',
	'post_status'       => 'publish',
);
$query = new WP_Query( $args );
?>


<section class="inner-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sec-title colored text-center">
				<h2>Galerija</h2>
				<ul class="breadcumb">
					<li><a href="<?php echo site_url(); ?>">Sākums</a></li>
					<li><i class="fa fa-angle-right"></i></li>
					<li><span>Galerija</span></li>
				</ul>
				<span class="decor"><span class="inner"></span></span>
			</div>
		</div>
	</div>
</section>



	<section id="gallery_area" class="gallery-section sec-padding">
		<div class="container">

			<?php if ( $query->have_posts() ) : ?>

				<div class="">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<div class="col-md-3 clear-pads">
							<article class="slide-item">
								<figure class="image-box">
									<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
									<?php if($image){; ?>
										<a href="<?php echo $image; ?>" class="lightbox-image">
											<div class="col-md-12 clear-pads image" style="background: url(<?php echo $image; ?>) center center no-repeat;
												-webkit-background-size: cover;
												-moz-background-size: cover;
												-o-background-size: cover;
												background-size: cover;"></div>
										</a>
									<?php } ?>
								</figure>
								<a href="<?php echo $image; ?>" class="overlay lightbox-image"></a>
								<div class="item-caption">
									<h4><strong><?php the_title() ?></strong></h4>
									<!--<p>Mercedes Benz Company Car</p>-->
								</div>
							</article>
						</div>
					<?php endwhile; ?>
				</div>

			<?php endif;?>
		</div>
	</section>


<?php get_footer(); ?>
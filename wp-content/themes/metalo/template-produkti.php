<?php
/*
 * Template Name: Produkti
 */
?>
<?php get_header();

$args = array(
	'posts_per_page'    => -1,
	'order'             => 'DESC',
	'post_type'         => 'products',
	'post_status'       => 'publish',
);
$query = new WP_Query( $args );
?>


	<section class="services-section sec-padding" data-bg-color="#f7f7f7">
		<div class="container">
			<div class="row">
				<div class="services-content style2">

					<?php if ( $query->have_posts() ) : ?>
						<?php while ($query->have_posts()) : $query->the_post(); ?>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="service-box">
									<div class="img-thumb">
										<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
										<div class="col-md-12 clear-pads image" style="background: url(<?php echo $image; ?>) center center no-repeat;
											-webkit-background-size: cover;
											-moz-background-size: cover;
											-o-background-size: cover;
											background-size: cover;"></div>
									</div>
									<div class="content">
										<h4 class="title"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h4>
									</div>
									<div class="overlay">
										<div class="excerpt"><?php the_excerpt() ?></div>

										<?php if( get_field( 'price' )){ ?>
											<a class="value" href="<?php the_permalink();?>">
												Sākot no <span class="service-price"><?php echo get_field( 'price' ); ?></span>
											</a>
										<?php } ?>
										<a class="btn-link" href="<?php the_permalink();?>">lasīt vairāk <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>


						<?php endwhile; ?>
					<?php endif;?>

				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
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

	<section id="gallery_area" class="gallery-section sec-padding">
		<div class="container">

			<?php if ( $query->have_posts() ) : ?>

				<div id="gallery-images">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
						<?php if($image){; ?>
							<a href="<?php echo $image; ?>">
								<div class="col-md-3 clear-pads image" style="background: url(<?php echo $image; ?>) center center no-repeat;
									-webkit-background-size: cover;
									-moz-background-size: cover;
									-o-background-size: cover;
									background-size: cover;">
									<div class="item-caption">
										<h4><strong><?php the_title() ?></strong></h4>

									</div>
								</div>
							</a>
						<?php } ?>
					<?php endwhile; ?>
				</div>

			<?php endif;?>
		</div>
	</section>

	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("#gallery-images a").tosrus({
				wrapper    : {
					onClick    : "close"
				}
			});
		});
	</script>
<?php get_footer(); ?>
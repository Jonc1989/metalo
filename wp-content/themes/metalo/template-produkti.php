<?php
/*
 * Template Name: Produkti
 */
?>
<?php get_header();

$query = getProducts(); ?>

	<section class="services-section sec-padding" data-bg-color="#f7f7f7">
		<div class="container">
			<div class="row">
				<div class="services-content style2" id="products">

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
				<?php wp_reset_postdata(); ?>

				<script type="text/javascript">
					var action = 'load_products';
					var currpage = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
					var maxpages = '<?php echo $query->max_num_pages; ?>';
					var container = 'products';
				</script>

				<div id="ajax-pages" class="more-wrap col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads center" >
					<button id="first"    class="paginate-control nonactive" disabled="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></button>
					<button id="previous" class="paginate-control nonactive" disabled="true"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
					<div class="current-page-text"> <span class="hidden-xs current-page">Lapa</span><input autocomplete="off" id="current"  class="" value="<?php echo $query->query_vars['paged'];?>"/><span class="current-page"> no <?php echo ' '.$query->max_num_pages; ?></span></div>
					<button id="next"     class="paginate-control <?php if($query->max_num_pages > 1){echo ' active';}?>" <?php if($query->max_num_pages == 1){echo 'disabled="true"';}?>><i class="fa fa-angle-right" aria-hidden="true"></i></button>
					<button id="last"     class="paginate-control <?php if($query->max_num_pages > 1){echo ' active';}?>" <?php if($query->max_num_pages == 1){echo 'disabled="true"';}?>><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</section>


<?php get_footer(); ?>
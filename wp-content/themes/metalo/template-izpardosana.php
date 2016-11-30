<?php
/*
 * Template Name: Produkti
 */
?>
<?php get_header();


$category_slug = $_GET[ 'category' ];

$args = array(
	'posts_per_page'    => -1,
	'order'             => 'DESC',
	'post_type'         => 'sale',
	'category_name'     => $category_slug,
	'post_status'       => 'publish',
);
//$query = new WP_Query( $args );
$query = get_sales( 1, $category_slug );
?>


	<section class="services-section sec-padding" data-bg-color="#f7f7f7">
		<div class="container">
			<div class="row">

				<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 category-wrap">
					<a href="<?php echo site_url(); ?>/izpardosana"><div class="category all col-lg-3 col-md-3 col-sm-6">Viss </div></a>
					<a href="<?php echo site_url(); ?>/izpardosana?category=metal"><div class="category metal col-lg-3 col-md-3 col-sm-6">Metālapstrāde </div></a>
					<a href="<?php echo site_url(); ?>/izpardosana?category=wood"><div class="category wood col-lg-3 col-md-3 col-sm-6">Kokapstrāde</div></a>
					<a href="<?php echo site_url(); ?>/izpardosana?category=other"><div class="category other col-lg-3 col-md-3 col-sm-6">Dažādi</div></a>
				</div>
				<div class="services-content style2">
					<div class="col-lg-12 col-md-12 col-sm-12" id="sale">
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

										<a class="value" href="#"> Sākot no <span class="service-price">$45</span></a>
										<a class="btn-link" href="<?php the_permalink();?>">lasīt vairāk <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif;?>
					</div>
					<?php wp_reset_postdata(); ?>
					
					<script type="text/javascript">
						var currpage = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
						var maxpages = '<?php echo $query->max_num_pages; ?>';
					</script>

					<div id="sale-pages" class="more-wrap col-lg-12 col-md-12 col-sm-12 col-xs-12 clear-pads center" >
						<button id="first"    class="paginate-control nonactive" disabled="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></button>
						<button id="previous" class="paginate-control nonactive" disabled="true"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
						<div class="current-page-text"> <span class="hidden-xs current-page">Lapa</span><input autocomplete="off" id="current"  class="" value="<?php echo $query->query_vars['paged'];?>"/><span class="current-page"> no <?php echo ' '.$query->max_num_pages; ?></span></div>
						<button id="next"     class="paginate-control <?php if($query->max_num_pages > 1){echo ' active';}?>" <?php if($query->max_num_pages == 1){echo 'disabled="true"';}?>><i class="fa fa-angle-right" aria-hidden="true"></i></button>
						<button id="last"     class="paginate-control <?php if($query->max_num_pages > 1){echo ' active';}?>" <?php if($query->max_num_pages == 1){echo 'disabled="true"';}?>><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
					</div>
						
					
					

				</div>
			</div>
		</div>
	</section>
<script>
	jQuery(document).on('ready', function() {
		var params = getQueryParams( window.location.search );
		console.log( );
		$('.category-wrap').removeClass('active');
		if( jQuery.isEmptyObject(params) ){
			$('.category-wrap').find( '.all' ).addClass('active');
		}else{
			$('.category-wrap').find( '.' + params.category ).addClass('active');
		}
	});
</script>

<?php get_footer(); ?>
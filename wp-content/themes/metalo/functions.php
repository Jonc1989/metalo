<?php
require 'post_types/products_post_type.php';
require 'post_types/services_post_type.php';
require 'post_types/gallery_post_type.php';
require 'post_types/sale_post_type.php';

add_theme_support( 'post-thumbnails' );

function get_sales( $paged = 1, $category ){

	$args = [
		'post_type' => 'sale',
		'posts_per_page' => '4',
		'paged'             => $paged,
		'category_name'     => $category,
		'post_status' => 'publish',
		'orderby' => 'post_date',
		'order' => 'DESC'
	];
	return new WP_Query( $args );

}

function load_sales(){

	$paged = ( $_POST['currpage'] ) ? $_POST['currpage'] : 1;
	$category = ( $_POST['category'] ) ? $_POST['category'] : '';
	$sales = get_sales( $paged, $category );
	if ( $sales->have_posts() ) : ?>
	<?php while ($sales->have_posts()) : $sales->the_post(); ?>
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
	<?php endif;
	die();
}
add_action('wp_ajax_load_sales', 'load_sales');
add_action('wp_ajax_nopriv_load_sales', 'load_sales');
<?php
/*
 * Template Name: Sākums
 */
?>
<?php get_header(); ?>

<?php $page = get_page_by_title( 'Sākums' );
$content = apply_filters('the_content', $page->post_content);
?>

<section class="call-to-action home-one">
	<div class="container-fluid">
		<div class="clearfix">
			<div class="call-to-action-corner col-md-6" style="background-image: url(img/call-to-action/left-box-bg.jpg);">
				<div class="single-call-to-action open-hours">
					<div class="icon-box">
						<div class="inner-box">
							<i class="flaticon-flask-outline"></i>
						</div>
					</div>
					<div class="content-box" style="    padding-left: 80px;">
					<?php if ( get_field( 'name_a' ) ) { ?>
						<h3 class="title"><?php echo get_field( 'name_a' ); ?> </h3>
					<?php } ?>

						<ul>
						<?php if ( get_field( 'list_a' ) ) { ?>
							<?php foreach ( get_field( 'list_a' ) as $list_a ) { ?>
								<li style="display: list-item;list-style-type: circle;"><?php echo $list_a[ 'list_a_text' ];?> </li>
							<?php } ?>
						<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="call-to-action-center col-md-6" style="background-image: url(img/call-to-action/center-box-bg.jpg);">
				<div class="single-call-to-action">
					<div class="icon-box">
						<div class="inner-box" >
							<i class="flaticon-technology-1"></i>
						</div>
					</div>
					<div class="content-box" style="    padding-left: 80px;">
						<?php if ( get_field( 'name_b' ) ) { ?>
							<h3 class="title"><?php echo get_field( 'name_b' )?></h3>
						<?php } ?>

						<ul>
							<?php if ( get_field( 'list_b' ) ) { ?>
								<?php foreach ( get_field( 'list_b' ) as $list_b ) { ?>
									<li style="display: list-item;list-style-type: circle;"><?php echo $list_b[  'list_b_text' ]; ?></li>
								<?php } ?>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>


<!--	<section class="sec-padding">-->
<!--		<div class="container">-->
<!--			<div class="row">-->
<!--				<div class="col-md-12 col-lg-6">-->
<!--					<div class="row mb-10">-->
<!--						<div class="col-md-12">-->
<!--							<img class="full-width" src="img/about/1.jpg" alt="">-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="col-md-12 col-lg-6">-->
<!--					<div class="full-sec-content md-text-center mt-md-30">-->
<!--						<div class="sec-title style-two mb-20">-->
<!--							<h4 class="text-uppercase color-gray mt-20">Who we are</h4>-->
<!--							<h2 class="text-uppercase color-theme">Welcome to Factory<span class="color-black">Doctor</span></h2>-->
<!--                            <span class="decor">-->
<!--								<span class="inner"></span>-->
<!--                            </span>-->
<!--						</div>-->
<!--						--><?php //echo $content; ?>
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</section>-->

<?php get_footer(); ?>
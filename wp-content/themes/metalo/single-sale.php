<?php get_header(); ?>
<?php // theloop

if ( have_posts() ) :?>
	<?php while ( have_posts() ) : the_post(); ?>

<section class="sec-padding doctor-profile">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>
				<div class="service-img col-md-12 clear-pads"style="background: url(<?php echo $image; ?>)no-repeat center center;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;">
			</div>
				</div>
			<div class="col-md-7 single-team-member">
				<h3><?php the_title() ?></h3>
				<span>Tēze...</span>
				<div class="awards-wrapper clearfix">
					<div class="single-award">
						<div class="inner">
							<i class="flaticon-quality"></i>
							<p><span class="block">Best</span> Engineer Awards</p>
                                <span class="number">
									05
								</span>
						</div>
					</div>
					<div class="single-award">
						<div class="inner">
							<i class="fa fa-empire"></i>
							<p><span class="block">Best</span> Engineer Awards</p>
                                <span class="number">
									05
								</span>
						</div>
					</div>
					<div class="single-award">
						<div class="inner">
							<i class="fa fa-map-marker"></i>
							<p><span class="block">Best</span> Engineer Awards</p>
                                <span class="number">
									05
								</span>
						</div>
					</div>
					<div class="single-award">
						<div class="inner">
							<i class="fa fa-graduation-cap"></i>
							<p><span class="block">Best</span> Engineer Awards</p>
                                <span class="number">
									05
								</span>
						</div>
					</div>
				</div>
				<?php the_content(); ?>
				<ul class="infos">
					<li><span>Detaļas 1</span> <span>Apraksts 1</span></li>
					<li><span>Detaļas 2</span> <span>Apraksts 2</span></li>
					<li><span>Detaļas 3</span> <span>Apraksts 3</span></li>

				</ul>
				<ul class="social">
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</section>


<?php endwhile; ?>
<?php else: ?>

	<?php get_404_template(); ?>

<?php endif; ?>
<?php get_footer(); ?>
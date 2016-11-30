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
				<span><?php echo get_field( 'price' ); ?></span>

				<?php the_content(); ?>
				<span></span>

				<div class="box_list">
					<?php if ( get_field( 'details_1' ) ) { ?>
						<ul>
							<?php foreach ( get_field( 'details_1' ) as $details_1 ) { ?>
								<?php if ( $details_1['description'] != "" ) { ?>
									<li><?php echo $details_1['description']; ?></li>
								<?php } ?>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="service_table">
							<?php if ( get_field( 'details_2' ) ) { ?>
								<table class="table">
									<thead class="thead-inverse">
									<tr>
										<th>Detaļas</th>
										<th>Apraksts</th>
									</tr>
									</thead>
									<tbody>
									<?php foreach ( get_field( 'details_2' ) as $details_2 ) { ?>
										<tr>
											<td><i class="fa fa-angle-right"></i><?php echo $details_2['name']; ?></td>
											<td><?php echo $details_2['text']; ?></td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							<?php } ?>
						</div>
					</div>
				</div>

				<ul class="social">
					<li><a href="https://www.facebook.com/sharer/sharer.php?sdk=joey&u=<?php the_permalink(); ?>%2F&display=popup&ref=plugin&src=share_button">
							<i class="fa fa-facebook"></i>
						</a>
					</li>
					<li><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>">
						<i class="fa fa-twitter"></i>
						</a>
					</li>
				</ul>
			</div>

			<div class="row" style="margin-top: 50px;">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<?php if ( get_field( 'pictures' ) ) { ?>
						<?php foreach ( get_field( 'pictures' ) as $pictures ) { ?>
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 single-producr-image" style="background: url(<?php echo $pictures[ 'pic' ];?>) center center no-repeat;
								-webkit-background-size: cover;
								-moz-background-size: cover;
								-o-background-size: cover;
								background-size: cover;"> </div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>


<?php endwhile; ?>
<?php else: ?>

	<?php get_404_template(); ?>

<?php endif; ?>
<?php get_footer(); ?>
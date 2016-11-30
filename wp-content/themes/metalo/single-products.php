<?php get_header(); ?>

<?php // theloop

if ( have_posts() ) :?>
<?php while ( have_posts() ) : the_post(); ?>
		
<section id="single_Service" class="sec-padding">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12">
				<div class="">
					<div class="service_mainconetent" id="invisalign">
						<div class="about_promo_box">
							<h2><?php the_title() ?></h2>
							<h4><?php echo get_field( 'price' ); ?></h4>
							<div class="row">
								<div class="col-lg-5 col-md-5">
									<div class="pormo_box_img">
										<?php $image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

										<div class="product-img col-md-12 clear-pads" style="background: url(<?php echo $image; ?>)no-repeat center center;
											-webkit-background-size: cover;
											-moz-background-size: cover;
											-o-background-size: cover;
											background-size: cover;">

										</div>

									</div>
								</div>
								<div class="col-lg-7 col-md-7">
									<div class="col-lg-12 col-md-12">
										<div class="pormo_box_details">
											<?php the_content(); ?>
											<div class="box_list">
												<?php if ( get_field( 'details_1' ) ) { ?>
													<ul>
														<?php foreach ( get_field( 'details_1' ) as $details_1 ) { ?>
															<?php if ( $details_1['description'] != "" ) { ?>
																<li><i class="fa fa-angle-right"></i><?php echo $details_1['description']; ?></li>
															<?php } ?>
														<?php } ?>
													</ul>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
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
						</div>
					</div>
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

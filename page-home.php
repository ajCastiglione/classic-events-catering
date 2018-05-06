<?php
/*
 Template Name: Home Page Template
*/
?>

	<?php get_header(); ?>

	<div id="content">

		<main id="main" class="cf col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<section class="banner-section cf">
				<?php
		$images = get_field('slider_images');
		
		if($images) : ?>
					<div id="slider" class="slick-slider-container">
						<ul class="slider-container">
							<?php foreach( $images as $image ): ?>
							<li>
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
							</li>
							<?php endforeach; ?>
						</ul>
					</div>
					<?php endif; ?>
			</section>

			<section class="about-us-section">
				<div class="inner-about-us wrap cf">
					<h1 class="about-us-title">Your title goes here</h1>
					<p class="about-us-content">
						<strong>Classic Events</strong> boast WNY's premier banquet properties
						<br> known for the picturesque ambience, fine food and first class service.
						<br> Each property is unique and offers an array of catering options - the perfect setting for any occasion.
					</p>
				</div>
			</section>

			<section class="video-section">
				{Video will go here once its uploaded}
			</section>

			<section class="venue-section">
				<div class="inner-venue large-wrapper">
					<h1 class="venue-title">
						<span>Venues</span>
					</h1>

					<div class="venue-boxes">
						<?php while( have_rows('venues') ) : the_row() ?>
						<div class="venue-item">
							<a href="<?php echo get_sub_field('target_url'); ?>">
								<div class="venue-image">
									<?php $img = get_sub_field('image');
								if(!empty($img)) : ?>
									<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
									<?php endif; ?>
								</div>
								<div class="venue-single-title">
									<h2>
										<?php echo get_sub_field('title'); ?>
									</h2>
								</div>
							</a>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
			</section>

			<section class="pop-up-restaurants">
				<div class="large-wrapper">
					<h2 class="pop-up-title">pop-up restaurants</h2>
				</div>

				<div class="inner-pop-up wrap cf">
					<img src="http://localhost/classic-events/wp-content/uploads/2018/05/pop-up-logo.png">
					<a href="#" class="sign-up-btn">Sign up to be notified <br> when events pop up!</a>
				</div>
			</section>

		</main>

	</div>
	<!--#content-->

	</div>


	<?php get_footer(); ?>
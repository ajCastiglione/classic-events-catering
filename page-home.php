<?php
/*
 Template Name: Home Page Template
*/
?>
<?php get_header(); ?>

<div id="content">

	<main id="main" class="cf col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
		<?php
		if (get_field( 'show_popup', 'options' )) : $title = get_field( 'title', 'options' );
			$content                                       = get_field( 'content', 'options' );
			$logo                            = get_field( 'logo', 'options' );
			$link_type                       = get_field( 'link_type', 'options' );
			$cta_text                        = get_field( 'button_text', 'options' );
			$link_type === 'internal' ? $url = get_field( 'internal_button_link', 'options' ) : $url = get_field( 'external_button_link', 'options' );
		?>

			<div class="popup-modal">
				<div class="popup-inner">
					<i class="far fa-times-circle close"></i>
					<?php if ( ! empty( $logo )) echo '<img src="' . $logo['url'] . '" alt="Classic Events Buffalo" class="popup-logo">'; ?>

					<h2 class="popup-title">
						<?php echo $title; ?>
					</h2>
					<div class="popup-content">
						<?php echo $content; ?>
						<a href="<?php echo $url; ?>" class="popup-cta" <?php echo $link_type === 'external' ? 'target="_blank"' : ''; ?>><?php echo $cta_text; ?></a>
					</div>
				</div>
			</div>

		<? endif; ?>

		<section class="banner-section cf">
			<?php
			$images = get_field( 'slider_images' );
			if ( $images ) :
				?>
				<div id="slider" class="slick-slider-container">
					<ul class="slider-container">
						<?php foreach ( $images as $image ) : ?>
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
				<h1 class="about-us-title"><?php echo get_field( 'title' ); ?></h1>
				<p class="about-us-content"><?php echo get_field( 'content' ); ?></p>
			</div>
		</section>

		<section class="video-section wrap">
			<div class="videoContainer"><iframe width="560" height="315" src="https://www.youtube.com/embed/RLOum6QkECs?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
		</section>

		<section class="venue-section">
			<div class="inner-venue large-wrapper">
				<h1 class="venue-title">
					<span>Venues</span>
				</h1>

				<div class="venue-boxes">
					<?php
					while ( have_rows( 'venues' ) ) :
						the_row();
						?>
						<div class="venue-item">
							<a href="<?php echo get_sub_field( 'target_url' ); ?>">
								<div class="venue-image">
									<?php
									$img = get_sub_field( 'image' );
									if ( ! empty( $img ) ) :
										?>
										<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>" />
									<?php endif; ?>
								</div>
								<div class="venue-single-title">
									<h2>
										<?php echo get_sub_field( 'title' ); ?>
									</h2>
								</div>
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
		</section>

	</main>

</div>
<!--#content-->

</div>

<?php get_footer(); ?>

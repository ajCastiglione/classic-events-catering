<?php
/*
 Template Name: Home Page Template
*/
?>

	<?php get_header(); ?>

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
			<p class="about-us-content"><strong>Classic Events</strong> boast WNY's premier banquet properties known for the picturesque ambience, fine food and first class service. Each property is unique and offers an array of catering options - the perfect setting for any occasion.</p>
		</div>
	</section>

	<div id="content">

		<div id="inner-content" class="wrap cf">

			<main id="main" class="cf col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">

						<h1 class="page-title">
							<?php the_title(); ?>
						</h1>

					</header>

					<section class="entry-content cf" itemprop="articleBody">
						<?php the_content(); ?>
					</section>

				</article>

				<?php endwhile; endif; ?>

			</main>
		</div>

	</div>


	<?php get_footer(); ?>
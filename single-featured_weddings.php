<?php

/*
 * Template for Featured Wedding Single Views
 * This is the custom post type post template. If you edit the post type name, you've got
 * to change the name of this template to reflect that name change.
 *
 * For Example, if your custom post type is "register_post_type( 'bookmarks')",
 * then your single template should be single-bookmarks.php
 * Be aware that you should rename 'custom_cat' and 'custom_tag' to the appropiate custom
 * category and taxonomy slugs, or this template will not finish to load properly.
 * For more info: http://codex.wordpress.org/Post_Type_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="cf col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">
									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>
									<a href="<?php echo site_url(); ?>/featured-weddings"><i class="far fa-arrow-alt-circle-left"></i> Back To Weddings</a>
								 <p><?php if(get_field('credit')) : ?>Credit: <?php echo get_field('credit'); ?><?php endif; ?></p>
								</header>

								<section class="entry-content cf">

									<?php 
									$images = get_field('gallery');
									if($images) :
									?>
									<ul class="featured-wedding-single-gallery-container">
										<?php foreach($images as $image) : ?>
										<li class="featured-wedding-single-img">
											<a href="<?php echo $image['url']; ?>" class="foobox" rel="gallery">
												<img src="<?php echo $image['url']; ?>">
											</a>
										</li>
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>

								</section> <!-- end article section -->

								<footer class="article-footer">

									<p class="tags"><?php echo get_the_term_list( get_the_ID(), 'custom_tag', '<span class="tags-title">' . __( 'Custom Tags:', 'bonestheme' ) . '</span> ', ', ' ) ?></p>

								</footer>

							</article>

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">

										<header class="article-header">

											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>

										</header>

										<section class="entry-content">

											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>

										</section>

										<footer class="article-footer">

											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>

										</footer>

									</article>

							<?php endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
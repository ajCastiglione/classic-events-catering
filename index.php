<?php get_header(); ?>

			<div id="content" class="cf">

				<div id="inner-content" class="wrap cf">

					<?php get_sidebar(); ?>

						<main id="main" class="cf col-xs-12 col-sm-8 col-lg-8" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<?php echo get_the_date(); ?>
								</header>

								<section class="entry-content cf">
										<?php if(catch_that_image() !== null) : ?>
											<div class="blog-index-photo">
											<img src="<?php  echo catch_that_image(); ?>" alt="Blog Photo" class="blog-photo">
											</div>
										<?php endif; ?>
										<?php the_excerpt(); ?>
								</section>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

				</div>

				<div class="mobile-sidebar cf wrap">
						<?php if(is_active_sidebar('sidebar2')) : dynamic_sidebar('sidebar2'); endif; ?>
					</div>

			</div>


<?php get_footer(); ?>

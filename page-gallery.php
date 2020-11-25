<?php
/*
 Template Name: Gallery Page
*/
?>


<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="cf col-xs-12 col-sm-12 col-lg-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

								    <h1 class="page-title"><?php
									$msh_h1tag_data = get_option('msh_h1tag_data');
									if ($msh_h1tag_data[$post->ID] != NULL){
									echo $msh_h1tag_data[$post->ID];
									}else{
									the_title(); 
									}
									?></h1> 
									
								</header> <?php // end article header ?>

								<section class="entry-content cf" itemprop="articleBody">
								<?php the_content(); ?>
									<div class="gallery-single-container">
									<?php 
										$images = get_field('gallery');
										if($images) : ?>
										<ul class="gallery-content">
											<?php foreach($images as $img) : ?>
											<li>
												<a href="<?php echo $img['url'];?>" class="foobox" rel="gallery">
													<?php 
													$img_html = "<img src='" . $img['url'] . "' class='gallery-image' />"; 
													$img_html = apply_filters( 'bj_lazy_load_html', $img_html );
													echo $img_html;
													?>
												</a>
											</li>
											<?php endforeach; ?>
										</ul>
										<?php endif; ?>
									</div>
								</section> <?php // end article section ?>

								<footer class="article-footer cf">

								</footer>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>

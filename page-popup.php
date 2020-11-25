<?php
/*
 Template Name: Popup Events Template
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

                  <div class="primary-signup">
                    <h2>Sign up to keep in the loop!</h2>
                    <?php echo do_shortcode('[mc4wp_form id="652"]'); ?>
                  </div>
                  
                  <div class="popup-content-container">
                    <img src="../wp-content/themes/classic-events-catering/library/images/Pop-events-logo.png" alt="popup events logo" class="aligncenter events-logo" >
                    <h2><strong>Cooking classes, networking, dinner parties, and tastings</strong></h2>
                    <h3><em>Host your own or attend one of ours</em></h3>

                    <?php if(have_rows('popup_events')) : while(have_rows('popup_events')) : the_row(); ?>
										
										<div class="popup-event-single">
										<img src="<?php $img = get_sub_field('image'); if(!empty($img)) : echo $img['url']; endif; ?>" class="aligncenter">
                    <h1 class="popup-title"><?php echo get_sub_field('title_one'); ?></h1>
                    <h4><?php echo get_sub_field('title_two'); ?></h4>
                    <h2><?php echo get_sub_field('title_three'); ?></h2>
                    <p><?php echo get_sub_field('content'); ?></p>
										</div>

                    <?php endwhile; endif; ?>
                  </div>

                  <div class="secondary-signup">
                    <h2>Sign up to keep in the loop!</h2>
                    <?php echo do_shortcode('[mc4wp_form id="652"]'); ?>
                  </div>

								</section> <?php // end article section ?>

							</article>

							<?php endwhile; endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>

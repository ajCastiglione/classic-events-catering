<?php
// Template Name: Grazing Template
$args = [
	'post_type' => 'product',
	'posts_per_page' => -1,
];

$prods = new WP_Query($args);

?>
<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap cf">

		<main id="main" class="cf col-xs-12 col-sm-12 col-lg-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">

							<h1 class="page-title"><?php the_title(); ?></h1>

						</header>

						<section class="entry-content cf" itemprop="articleBody">
							<?php the_content(); ?>
						</section>

						<section class="grazing-products">
							<?php if ($prods->have_posts()) : while ($prods->have_posts()) : $prods->the_post();
									$id = $prods->post->ID;
									$img = get_the_post_thumbnail_url($id, 'full');
									$prod_title = get_the_title($id);
									$prod_desc = get_the_content($id);
									$link = get_permalink($id);
							?>
									<div class="prod-box corp-box cf">
										<div class="col-xs-12 col-sm-6 col-lg-4"><img src="<?= $img ?>" alt="<?= $prod_title ?>" /></div>
										<div class="col-xs-12 col-sm-6 col-lg-8">
											<h3><?= $prod_title ?></h3>
											<div><?= $prod_desc ?></div>

											<a class="special-menus btn" href="<?= $link ?>" rel="nofollow" data-product-id="<?= $id; ?>">View Product</a>

										</div>
									</div>
							<?php endwhile;
							endif; ?>
						</section>

					</article>

			<?php endwhile;
			endif; ?>

		</main>

	</div>

</div>

<?php get_footer(); ?>
<?php
/*
 Template Name: Featured Weddings Template
*/

?>
<?php get_header(); ?>

<?php 
  $args = array(
    'post_type' => 'featured_weddings'
  );
?>

<div id="content">

  <div id="inner-content" class="wrap cf">

  <h1 class="page-title"><?php the_title(); ?></h1>

      <main id="main" class="cf col-xs-12" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

      <article id="post-<?php the_ID(); ?>" class="cf" role="article" itemscope itemtype="http://schema.org/BlogPosting">

      <section class="entry-content featured-weddings cf" itemprop="articleBody"> 

        <?php $query = new WP_Query($args); if($query->have_posts()) : while($query->have_posts()) : $query->the_post(); ?>

        
          <?php 
            $images = get_field('gallery');
            $first_image = $images[0];
          ?>

            <div class="featured-wedding">
            <a class="featured-wedding-link" href="<?php the_permalink(); ?>">
              <img class="featured-wedding-image" src="<?php echo $first_image['url']; ?>">
            </a>
            
              <h2 class="featured-wedding-title">
                <a class="featured-wedding-link" href="<?php the_permalink(); ?>">
                  <?php
                  $msh_h1tag_data = get_option('msh_h1tag_data');
                  if ($msh_h1tag_data[$post->ID] != NULL){
                  echo $msh_h1tag_data[$post->ID];
                  }else{
                  the_title(); 
                  }
                  ?>
                </a>
              </h2> 
            </div>

          <?php endwhile; endif; ?>

          </section> <?php // end article section ?>

        </article>

      </main>

  </div>
</div>

	<?php get_footer(); ?>
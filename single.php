<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
 $postId = get_the_id();
?>

<?php get_header(); ?>

<div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  
  <div class='post__content'>
    <div class="post__content--left">    
      <div class='post__title'>
        <h1 class='title--post'><?php the_title(); ?></h1>
      </div>
      <div class='post__separator'></div>
      <div class='post__description'>
        <?php echo the_content($postId); ?>
      </div>
    </div>
    <div class='post__gallery'>
      <img src='<?php the_post_thumbnail_url($postId); ?>' >
    </div>
    <div class='post__content--full'>
      <div class='post__title'>
        <h1 class='title--post'><?php the_title(); ?>
        </h1>
      </div>
      <div class='post__separator'></div>
      <div class='post__description post__description--mobile'>
        <?php echo the_content($postId); ?>
      </div>
    </div>

  </div>

  <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>

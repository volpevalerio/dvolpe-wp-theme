<?php
/*
 * Template Name: About
 * Template Post Type: post, page, product
 */
 $postId = get_the_id();
?>

<?php get_header() ?>

<div class='grid-container'>
  <div class='container--left'>
    <h2><?php echo get_field('title_about')?></h2>
  </div>
  <div class='container--right'>
    <p><?php echo get_field('descrizione')?></p>
    <br />
    <br />
    <br />
    <p>contact me</p>
    <p><a href='mailto:info@dariovolpe.it'>info@dariovolpe.it</a></p>
  </div>
</div>

<?php get_footer() ?>

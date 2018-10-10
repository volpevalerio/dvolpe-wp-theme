<?php $postId = get_the_id() ?>
<a href='<?php echo get_permalink($postId) ?>' class="grid-item" >
  <div class='grid-item--hover' style="background-color: <?php echo get_field('over_color') ?>">
    <h4 class='title--white'><?php echo get_the_title($postId) ?></h4>
  </div>
  <?php if ( has_post_thumbnail($postId) ) { ?>
      <img src='<?php the_post_thumbnail_url($postId); ?>' >
  <?php } ?>
</a><!-- /.blog-post -->
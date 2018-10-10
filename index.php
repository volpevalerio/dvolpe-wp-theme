<?php /* Template name: dvolpe*/ ?>
<?php get_header() ?>

  <div class="container grid container--thumbs">
    <div class='container__inner' id='macy-container'>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
      ?>
      <?php endwhile; endif; ?>
    </div>
  </div>
<?php get_footer() ?>

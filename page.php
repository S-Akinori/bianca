<?php get_header(); ?>
<article>
  <div class="p-6 mx-auto container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <h1 class="text-center"><?php the_title(); ?></h1>
    <?php if(get_the_category()[0]->slug !== 'customer-voice' && has_post_thumbnail()) : ?>
    <div class="img-container text-center py-2">
      <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
    </div>
    <?php endif ; ?>
    <div>
      <?php the_content(); ?>
    </div>
    <p><?php the_date(); ?></p>
    <?php endwhile; endif ?>
  </div>
</article>
<?php get_footer(); ?>
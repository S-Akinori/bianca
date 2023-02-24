<?php get_header(); ?>
<article class="p-page">
  <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="c-fv p-top-fv">
    <div class="c-fv__image">
      <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
    </div>
    <div class="c-fv__text-container ">
      <h1 class="c-fv__text-container__title"><?php the_title(); ?></h1>
    </div>
  </div>
  <div class="p-4 mx-auto container">
    <div>
      <?php the_content(); ?>
    </div>
    <p><?php the_date(); ?></p>
  </div>
  <?php endwhile; endif ?>
</article>
<?php get_footer(); ?>
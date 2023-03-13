<?php get_header(); ?>
<article class="p-single">
  <div class="p-4 mx-auto container">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <h1 class="text-center p-single__title" style="margin-bottom: 0;"><?php the_title(); ?></h1>
    <p class="text-sm text-center"><?php the_date(); ?></p>
    <?php if(has_post_thumbnail()) : ?>
    <div class="img-container text-center py-2">
      <img src="<?= get_the_post_thumbnail_url('', 'full') ?>" alt="<?php the_title() ?>">
    </div>
    <?php endif ; ?>
    <div class="mt-8">
      <?php the_content(); ?>
    </div>
    <?php endwhile; endif ?>
    <div class="text-center">
      <a href="<?= home_url('/news') ?>" class="c-button">ニュース一覧に戻る</a>
    </div>
  </div>
</article>
<?php get_footer(); ?>
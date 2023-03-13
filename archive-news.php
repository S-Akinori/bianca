<?php get_header(); ?>
  <div class="mt-8">
    <h1 class="text-center mb-0">ニュース</h1>
  </div>
  <div class="c-page-section container">
    <div class="max-w-screen-md mx-auto">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <div class="p-4 border-b border-main">
          <a href="<?php the_permalink() ?>" class="block h-full">
            <span class="text-sm"><?= get_the_date() ?></span>
            <h3 class="mb-0 pb-0 text-[1rem]"><?php the_title(); ?></h3>
          </a>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
  <?php if(function_exists("pagination")) {
      pagination();
  } ?>
<?php get_footer(); ?>
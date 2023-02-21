<?php get_header(); ?>
  <div class="c-fv p-top-fv">
    <div class="c-fv__image p-top-fv__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fv-top.jpg" alt="オールハンドによる究極の癒しエステ" /></div>
    <div class="c-fv__text-container ">
      <div class="c-fv__text-container__title">オールハンドによる究極の癒しエステ</div>  
    </div>
    <div class="p-top-fv__owner">
      <div class="p-top-fv__owner__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/owner.jpg" width="200" height="200" alt="松本 萌夏" />
      </div>
      <div class="p-top-fv__owner__name">
        オーナー / 松本 萌夏
      </div>
    </div>
  </div>
  <div class="flex flex-wrap">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="md:w-1/2 p-4">
      <div>
        <div>
          <a href="<?php the_permalink() ?>"><img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/dist/img/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(); ?>"></a>
        </div>
        <div>
          <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
          <p><?php the_date() ?></p>
          <p><?php echo esc_html(get_the_excerpt()); ?></p>
        </div>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>
  <?php if(function_exists("pagination")) {
      pagination();
  } ?>
<?php get_footer(); ?>
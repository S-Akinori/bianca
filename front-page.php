<?php 
  get_header();
  $args = array(
    'numberposts ' => 4,
  );
  $posts = get_posts($args);
  
  $review_args = array(
    'numberposts' => 4,
    'post_type' => 'reviews'
  );
  $review_posts = get_posts($review_args);

  $menu_categories = get_terms('menus-cat');

  $news_args = array(
    'numberposts' => 4,
    'post_type' => 'news'
  );
  $news_posts = get_posts($news_args);
?>
  <div class="p-top-fv c-fv relative">
    <div class="p-top-fv__image active c-fv__image">
      <img src="<?= get_option('top_fv_image1') ;?>" alt="<?= get_option('top_fv_text') ;?>" />
    </div>
    <div class="p-top-fv__image c-fv__image">
      <img src="<?= get_option('top_fv_image2') ;?>" alt="<?= get_option('top_fv_text') ;?>" />
    </div>
    <div class="p-top-fv__image c-fv__image">
      <img src="<?= get_option('top_fv_image3') ;?>" alt="<?= get_option('top_fv_text') ;?>" />
    </div>
    <div class="c-fv__text-container">
      <h1 class="c-fv__text-container__title"><?= get_option('top_fv_text') ;?></h1>  
    </div>
    <div class="p-top-fv__owner">
      <div class="p-top-fv__owner__image">
        <img src="<?= get_option('company_CEO_image'); ?>" width="200" height="200" alt="<?= get_option('company_CEO'); ?>" />
      </div>
      <div class="p-top-fv__owner__name">
        <?= get_option('company_CEO_title'); ?> / <?= get_option('company_CEO'); ?>
      </div>
    </div>
  </div>
  <div id="topMessage" class="c-page-section c-container">
    <section>
      <div class="c-title-text">
        <div class="text-center c-fade-in">
          <span class="text-sm text-main"><?= get_option('top_message_en') ;?></span>
          <h2 class="c-title-text__title u-text-center"><?= get_option('top_message_title') ;?></h2>
        </div>
        <div class="c-title-text__text u-text-center c-fade-in">
          <?= get_option('top_message_text') ;?>
        </div>
      </div>
    </section>
  </div>
  <div id="topFeatures" class="c-page-section">
    <section>
      <div class="c-title-text">
        <div class="text-center c-fade-in">
          <span class="text-sm text-main"><?= get_option('top_feature_en'); ?></span>
          <h2 class="c-title-text__title u-text-center"><?= get_option('top_feature_title'); ?></h2>
        </div>
      </div>
      <div class="p-top-features">
        <div class="p-top-features__item c-fade-in relative border-t border-b border-main2" style="background: url(<?= get_option('top_feature1_image'); ?>) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title"><?= get_option('top_feature1_title'); ?></h3>
            <?= get_option('top_feature1_text'); ?>
          </div>
        </div>
        <div class="p-top-features__item c-fade-in relative border-t border-b border-main2" style="background: url(<?= get_option('top_feature2_image'); ?>) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title"><?= get_option('top_feature2_title'); ?></h3>
            <?= get_option('top_feature2_text'); ?>
          </div>
        </div>
        <div class="p-top-features__item c-fade-in relative border-t border-b border-main2" style="background: url(<?= get_option('top_feature3_image'); ?>) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title"><?= get_option('top_feature3_title'); ?></h3>
            <?= get_option('top_feature3_text'); ?>
          </div>
        </div>
      </div>
    </section>
  </div>
  <div id="topMenu" class="c-page-section c-container">
    <section>
      <div class="c-title-text c-fade-in">
        <div class="text-center">
          <span class="text-sm text-main">Menu</span>
          <h2 class="c-title-text__title u-text-center">メニュー</h2>
        </div>
      </div>
      <div>
        <?php foreach($menu_categories as $category): if($category->slug !== 'set-menu'): $category_image = get_term_meta($category->term_id, 'category-image', true); ?>
          <div class="md:flex mb-12 c-fade-in">
            <div class="md:w-1/2">
              <img src="<?= $category_image; ?>" alt="<?= $category->name; ?>">
            </div>
            <div class="p-4 md:w-1/2 bg-main2">
              <div class="text-xl text-main mb-4"><?= $category->name; ?></div>
              <div><?= $category->description; ?></div>
              <ul class="c-list">
                <?php 
                  $menu_args = array(
                    'post_type' => 'menus',
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'menus-cat',
                        'field'=>'term_id',
                        'terms'=>$category->term_id, 
                      )
                    )
                  );
                  $menu_posts = get_posts($menu_args);
                  foreach($menu_posts as $post):
                  setup_postdata($post);
                ?>
                  <li class="c-list__item c-list__item--main-light flex justify-between"><span><?php the_title(); ?></span> <span><?php the_field('price'); ?></span></li>
                <?php endforeach; wp_reset_postdata(); ?>
              </ul>
            </div>
          </div>
        <?php endif; endforeach; ?>
      </div>
      <div>
        <h3>お得なセットメニュー</h3>
        <ul class="c-list md:flex flex-wrap">
          <?php 
            $menu_args = array(
              'numberposts' => -1,
              'post_type' => 'menus',
              'order' => 'ASC',
              'orderby' => 'date',
              'tax_query' => array(
                array(
                  'taxonomy' => 'menus-cat',
                  'field'=>'slug',
                  'terms'=>'set-menu', 
                )
              )
            );
            $menu_posts = get_posts($menu_args);
            foreach($menu_posts as $post):
            setup_postdata($post);
          ?>
            <li class="c-list__item c-list__item--main-light flex justify-between w-full"><span><?php the_title(); ?></span> <span><?php the_field('price'); ?></span></li>
          <?php endforeach; wp_reset_postdata(); ?>
        </ul>
      </div>
    </section>
  </div>
  <div id="topReview" class="c-page-section c-container relative">
    <section>
      <div class="c-title-text c-fade-in">
        <div class="text-center">
          <span class="text-sm text-main">Review</span>
          <h2 class="c-title-text__title u-text-center">お客様の声</h2>
        </div>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
        <?php foreach($review_posts as $post): setup_postdata($post); ?>
          <div class="swiper-slide">
            <div class="md:flex">
              <div class="md:w-32 aspect-square shrink-0">
                <img class="w-full h-full object-cover" src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" alt="<?php the_title(); ?>" />
              </div>
              <div class="md:px-4">
                <h3 class="text-main mb-0"><?php the_title(); ?></h3>
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </section>
  </div>
  <div class="md:flex c-page-section c-container">
    <div id="topBlog" class="mb-8 md:mb-0 pr-2 md:w-1/2 relative">
      <section>
        <div class="c-title-text c-fade-in">
          <div class="text-center">
            <span class="text-sm text-main">Blog</span>
            <h2 class="c-title-text__title u-text-center">オーナー日記</h2>
          </div>
        </div>
        <div class="bg-main2 c-fade-in">
          <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
          <div class="p-4">
            <a href="<?php the_permalink() ?>" class="flex">
              <div class="w-32 aspect-video">
                <img class="object-cover w-full h-full" src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(); ?>">  
              </div>
              <div class="w-full p-4 bg-white">
                <span class="text-sm"><?= get_the_date() ?></span>
                <h3 class="text-[1rem]"><?= esc_html(get_the_excerpt()); ?></h3>
              </div>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
          <?php else: ?>
            <p class="p-4">投稿がありません。</p>
          <?php endif; ?>
        </div>
      </section>
    </div>
    <div id="topNews" class="pl-2 md:w-1/2 relative">
      <section>
        <div class="c-title-text c-fade-in">
          <div class="text-center">
            <span class="text-sm text-main">News</span>
            <h2 class="c-title-text__title u-text-center">ニュース</h2>
          </div>
        </div>
        <div class="c-fade-in">
          <?php foreach($news_posts as $post): setup_postdata($post); ?>
          <div class="p-4 border-b border-main">
            <a href="<?php the_permalink() ?>" class="block h-full">
              <span class="text-sm"><?= get_the_date() ?></span>
              <h3 class="mb-0 pb-0 text-[1rem]"><?php the_title(); ?></h3>
            </a>
          </div>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
      </section>
    </div>
  </div>
  <div id="topContact" class="c-page-section c-container relative">
    <section>
      <div class="c-title-text c-fade-in">
        <div class="text-center">
          <span class="text-sm text-main">Contact</span>
          <h2 class="c-title-text__title u-text-center">エステ情報</h2>
        </div>
      </div>
      <div class="md:flex c-fade-in">
        <div class="md:w-1/2 mb-4 md:mb-0 md:px-4"><?= get_option('company_map'); ?></div>
        <div class="md:w-1/2 md:px-4">
          <h3 class="text-main"><?= get_option('company_name'); ?></h3>
          <div>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_CEO_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_CEO'); ?></div>
            </div>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_tel_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_tel'); ?></div>
            </div>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_address_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_address'); ?></div>
            </div>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_hours_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_hours'); ?></div>
            </div>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_dayoff_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_dayoff'); ?></div>
            </div>
          </div>
          <div class="text-sm">
            <?= get_option('company_info_sub'); ?>
          </div>
        </div>
      </div>
    </section>
    <div class="c-page-section c-container relative">
      <div class="text-center">
        <a href="tel:<?= get_option('company_tel'); ?>" class="c-button">ご予約：<?= get_option('company_tel'); ?></a>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
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
        <?php if(get_option('top_feature1_image')): ?>
        <div class="p-top-features__item c-fade-in relative border-t border-b border-main2" style="background: url(<?= get_option('top_feature1_image'); ?>) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title"><?= get_option('top_feature1_title'); ?></h3>
            <?= get_option('top_feature1_text'); ?>
          </div>
        </div>
        <?php endif; ?>
        <?php if(get_option('top_feature2_image')): ?>
        <div class="p-top-features__item c-fade-in relative border-t border-b border-main2" style="background: url(<?= get_option('top_feature2_image'); ?>) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title"><?= get_option('top_feature2_title'); ?></h3>
            <?= get_option('top_feature2_text'); ?>
          </div>
        </div>
        <?php endif; ?>
        <?php if(get_option('top_feature3_image')): ?>
        <div class="p-top-features__item c-fade-in relative border-t border-b border-main2" style="background: url(<?= get_option('top_feature3_image'); ?>) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title"><?= get_option('top_feature3_title'); ?></h3>
            <?= get_option('top_feature3_text'); ?>
          </div>
        </div>
        <?php endif; ?>
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
              <img src="<?= $category_image; ?>" class="w-full h-full object-cover" alt="<?= $category->name; ?>">
            </div>
            <div class="p-4 md:w-1/2 bg-main2">
              <div class="text-xl text-main mb-4"><?= $category->name; ?></div>
              <div class="whitespace-pre-wrap"><?= $category->description; ?></div>
              <ul class="c-list">
                <?php 
                  $menu_args = array(
                    'numberposts' => -1, //全ての記事を取得
                    'post_type' => 'menus',
                    'order' => 'ASC',
                    'orderby' => 'date',
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
                  <li class="c-list__item c-list__item--main-light">
                    <div class="flex justify-between">
                      <div><?php the_title(); ?></div>
                      <div><?php the_field('price'); ?></div>
                    </div>
                    <div><?php the_excerpt(); ?></div>
                  </li>
                <?php endforeach; wp_reset_postdata(); ?>
              </ul>
            </div>
          </div>
        <?php endif; endforeach; ?>
      </div>
    </section>
  <section id="topNews" class="c-page-section c-container">
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
            <?php if(get_option('company_CEO')) : ?>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_CEO_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_CEO'); ?></div>
            </div>
            <?php endif; ?>
            <?php if(get_option('company_tel')) : ?>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_tel_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_tel'); ?></div>
            </div>
            <?php endif; ?>
            <?php if(get_option('company_address')) : ?>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_address_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_address'); ?></div>
            </div>
            <?php endif; ?>
            <?php if(get_option('company_hours')) : ?>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_hours_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_hours'); ?></div>
            </div>
            <?php endif; ?>
            <?php if(get_option('company_dayoff')) : ?>
            <div class="md:flex mb-4 pb-4 border-b border-main2">
              <div class="w-32 pr-4"><?= get_option('company_dayoff_title'); ?></div>
              <div class="whitespace-pre-wrap"><?= get_option('company_dayoff'); ?></div>
            </div>
            <?php endif; ?>
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
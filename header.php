<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>エステNEXUS</title>
  <meta property="og:title" content="エステNEXUS" />
  <meta property="og:description" content="エステNEXUSのホームページです" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image.png" />
  <meta property="og:site_name" content="エステNEXUS" />
  <meta property="og:locale" content="ja_JP"  />
  <!-- <link rel="icon" href="/favicon.ico" /> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css?v=1.0.0" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css?v=1.0.0">
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="flex justify-between items-center">
      <div class="c-logo"><a href="<?= home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt=""></a></div>
      <div class="hidden lg:block">
        <nav>
          <ul class="flex">
            <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topMessage' : home_url("#topMessage"); ?>">メッセージ</a></li>
            <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topFeatures' : home_url("#topFeatures"); ?>">3つの特徴</a></li>
            <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topMenu' : home_url("#topMenu"); ?>">メニュー</a></li>
            <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topReview' : home_url("#topReview"); ?>">お客様の声</a></li>
            <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topBlog' : home_url("#topBlog"); ?>">ブログ</a></li>
            <li class="px-2 text-sm"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topContact' : home_url("#topContact"); ?>">サロン情報</a></li>
          </ul>
        </nav>
      </div>
      <div class="flex items-center">
      <a href="tel:<?= get_option('company_tel'); ?>" class="c-button text-sm">ご予約：<?= get_option('company_tel'); ?></a>
        <div class="lg:hidden pl-2">
          <button class="js-menu-button flex items-center justify-center">
            <span class="material-icons">
              menu
            </span>
          </button>
        </div>
      </div>
    </div>
  </header>
  <div id="jsNav" class="l-nav-container">
    <div class="relative">
      <button class="js-menu-button absolute right-0 top-0 flex items-center justify-center">
        <span class="material-icons text-main">close</span>
      </button>
      <nav class="mb-4">
        <ul>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topMessage' : home_url("#topMessage"); ?>">メッセージ</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topFeatures' : home_url("#topFeatures"); ?>">3つの特徴</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topMenu' : home_url("#topMenu"); ?>">メニュー</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topReview' : home_url("#topReview"); ?>">お客様の声</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topBlog' : home_url("#topBlog"); ?>">ブログ</a></li>
          <li class="px-2 text-sm text-center"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?> js-menu-button" href="<?= is_front_page() ? '#topContact' : home_url("#topContact"); ?>">サロン情報</a></li>
        </ul>
      </nav>
      <div class="text-center">
        <a href="tel:<?= get_option('company_tel'); ?>" class="c-button">ご予約：<?= get_option('company_tel'); ?></a>
      </div>
    </div>
  </div>
  <div class="header_space h-20"></div>
  <main>
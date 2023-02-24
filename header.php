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
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css">
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="flex justify-between items-center">
      <div class="c-logo"><a href="<?= home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg" alt=""></a></div>
      <div class="hidden lg:block">
        <nav>
          <ul class="flex">
            <li class="px-2 text-sm"><a class="js-anchorLink" href="#topMessage">メッセージ</a></li>
            <li class="px-2 text-sm"><a class="js-anchorLink" href="#topFeatures">3つの特徴</a></li>
            <li class="px-2 text-sm"><a class="js-anchorLink" href="#topMenu">メニュー</a></li>
            <li class="px-2 text-sm"><a class="js-anchorLink" href="#topReview">お客様の声</a></li>
            <li class="px-2 text-sm"><a class="js-anchorLink" href="#topBlog">ブログ</a></li>
            <li class="px-2 text-sm"><a class="js-anchorLink" href="#topContact">サロン情報</a></li>
          </ul>
        </nav>
      </div>
      <div class="flex">
        <a href="" class="c-button">ご予約: 000-0000-000</a>
        <div class="lg:hidden">
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
    <button class="js-menu-button absolute right-16 top-16 flex items-center justify-center">
      <span class="material-icons text-gray-400">close</span>
    </button>
    <nav>
      <ul>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
        <li><a href="">Link</a></li>
      </ul>
    </nav>
  </div>
  <main>
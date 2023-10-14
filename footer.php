  <div class="hidden fixed bottom-0 left-0 p-4 w-full bg-main" style="z-index: 9999;">
    <div class="flex">
      <a href="" class="c-button">ご予約: 000-0000-000</a>
    </div>
  </div>
</main>
<footer class="footer">
  <div class="c-container mx-auto">
    <div class="footer__top">
      <div class="c-logo mx-auto md:ml-0 md:mr-auto mb-4"><img src="<?= get_option('company_logo'); ?>" alt=""></div>
      <div class="text-center md:text-left whitespace-pre-wrap"><?= get_option('company_address'); ?></div>
    </div>
    <div>
      <ul class="footer__link-list">
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topMessage' : home_url("#topMessage"); ?>">メッセージ</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topFeatures' : home_url("#topFeatures"); ?>">3つの特徴</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topMenu' : home_url("#topMenu"); ?>">メニュー</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topNews' : home_url("#topNews"); ?>">ニュース</a></li>
        <li class="footer__link-list__item"><a class="<?= is_front_page() ? 'js-anchorLink' : ''; ?>" href="<?= is_front_page() ? '#topContact' : home_url("#topContact"); ?>">サロン情報</a></li>
      </ul>
    </div>
    <div class="text-center text-sm">&copy;2023 <?= get_option('company_name'); ?></div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
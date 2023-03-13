<?php 
  $news_args = array(
    'numberposts' => 4,
    'post_type' => 'news'
  );
  $news_posts = get_posts($news_args);
?>
<aside>
  <h4 class="p-post__title">最新のニュース</h4>
  <ul class="c-list">
    <?php foreach($categories as $category): ?>
    <li class="c-list__item"><a href="<?= home_url('category/'.$category->slug); ?>"><?= $category->name ; ?></a></li>
    <?php endforeach; ?>
  </ul>
</aside>
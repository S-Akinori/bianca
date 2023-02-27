<?php 
  get_header();
  $args = array(
    'numberposts ' => 4,
  );
  $posts = get_posts($args);
?>
  <div class="p-top-fv c-fv relative">
    <div class="p-top-fv__image active c-fv__image">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/fv-top1.jpg" alt="オールハンドによる究極の癒しエステ" />
    </div>
    <div class="p-top-fv__image c-fv__image">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/fv-top2.jpg" alt="オールハンドによる究極の癒しエステ" />
    </div>
    <div class="p-top-fv__image c-fv__image">
      <img src="<?= get_template_directory_uri(); ?>/assets/images/fv-top3.jpg" alt="オールハンドによる究極の癒しエステ" />
    </div>
    <div class="c-fv__text-container">
      <div class="c-fv__text-container__title">オールハンドによる究極の癒しエステ</div>  
    </div>
    <div class="p-top-fv__owner">
      <div class="p-top-fv__owner__image">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/owner.jpg" width="200" height="200" alt="松本 萌夏" />
      </div>
      <div class="p-top-fv__owner__name">
        オーナー / 松本 萌夏
      </div>
    </div>
  </div>
  <div id="topMessage" class="c-page-section c-container">
    <section>
      <div class="c-title-text">
        <div class="text-center c-fade-in">
          <span class="text-sm text-main">Message</span>
          <h2 class="c-title-text__title u-text-center">内面から美しく、癒しを提供</h2>
        </div>
        <div class="c-title-text__text u-text-center c-fade-in">
          <p>環境や生活の変化で荒れてしまいがちな肌。皮膚科に通っても治らない肌。</p>
          <p>わたしたちは施術による外部からのケアはもちろん、食事など内面からのサポートも行い、お客様の肌の悩みを解決します。</p>
        </div>
      </div>
    </section>
  </div>
  <div id="topFeatures" class="c-page-section">
    <section>
      <div class="c-title-text">
        <div class="text-center c-fade-in">
          <span class="text-sm text-main">Features</span>
          <h2 class="c-title-text__title u-text-center">エステNEXUSの3つの特徴</h2>
        </div>
      </div>
      <div class="p-top-features">
        <div class="p-top-features__item relative border-t border-b border-main2" style="background: url(<?= get_template_directory_uri(); ?>/assets/images/fv-top1.jpg) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title">マッサージ、ストレッチ、指圧を組み合わせたオールハンドエステ</h3>
            <p>
              わたしたちは脱毛を除き機械を使用しません。肌の悩みはお客様ごとに様々で、機械で誰でも同じように施術できる形では解決できません。
            </p>
            <p>オールハンドで行うことでお客様に最も効果的な施術を行えます。</p>
          </div>
        </div>
        <div class="p-top-features__item relative border-t border-b border-main2" style="background: url(<?= get_template_directory_uri(); ?>/assets/images/menu1.jpg) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title">コミュニケーションを大切にしお客様に寄り添う</h3>
            <p>
              お客様によって対処すべき原因は様々です。現在の症状はもちろん、症状が出るまでにどのようなことがあったかという過程も重要です。
            </p>
            <p>
              またコミュニケーションを取ることで癒しの場をご提供いたします。
            </p>
          </div>
        </div>
        <div class="p-top-features__item relative border-t border-b border-main2" style="background: url(<?= get_template_directory_uri(); ?>/assets/images/menu2.jpg) no-repeat left center / cover;">
          <div class="p-top-features__item__inner md:w-1/2 ml-auto">
            <h3 class="p-top-features__item__inner__title">食事療法も取り入れ内面から美しく</h3>
            <p>肌荒れは内部的な原因もあります。周りの環境や食生活、ストレスなどが大きく起因することが多いです。</p>
            <p>食事療法など内面からのケアを行い、肌荒れの根本的な原因を解決します。</p>
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
      <div class="md:flex">
        <div class="md:w-1/3 p-4">
          <div class="c-box-image">
            <a href="<?= home_url('face-care'); ?>">
              <div>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/menu1.jpg" alt="フェイシャル" />
              </div>
              <div class="c-box-image__text">
                <div class="text-center text-xs">Face Care</div>
                <div class="text-lg text-center">フェイシャル</div>
              </div>
            </a>
          </div>
        </div>
        <div class="md:w-1/3 p-4">
          <div class="c-box-image">
            <a href="/">
              <div>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/menu2.jpg" alt="脱毛" />
              </div>
              <div class="c-box-image__text">
                <div class="text-center text-xs">Waxing</div>
                <div class="text-lg text-center">脱毛</div>
              </div>
            </a>
          </div>
        </div>
        <div class="md:w-1/3 p-4">
          <div class="c-box-image">
            <a href="/">
              <div>
                <img src="<?= get_template_directory_uri(); ?>/assets/images/menu3.jpg" alt="脱毛" />
              </div>
              <div class="c-box-image__text">
                <div class="text-center text-xs">Body Care</div>
                <div class="text-lg text-center">ボディ</div>
              </div>
            </a>
          </div>
        </div>
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
          <div class="swiper-slide">
            <div class="md:flex">
              <div class="md:w-32 aspect-square shrink-0">
                <img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/review1.jpg" alt="お客様の声1" />
              </div>
              <div class="md:px-4">
                <h3 class="text-main mb-0">51さん</h3>
                <p>人生で初めてのフェイシャルをやっていただきました。施術中は足元も温めていただけるので、血行がよくなりずっと頭の先から爪先までポカポカ、夢見ごこちのひとときを過ごすことができました</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="md:flex">
              <div class="md:w-32 aspect-square shrink-0">
                <img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/review1.jpg" alt="お客様の声1" />
              </div>
              <div class="md:px-4">
                <h3 class="text-main mb-0">51さん</h3>
                <p>いきなりの予約でしたが、すごく良い対応していただいてありがとうございました。終始満足でした。</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="md:flex">
              <div class="md:w-32 aspect-square shrink-0">
                <img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/review1.jpg" alt="お客様の声1" />
              </div>
              <div class="md:px-4">
                <h3 class="text-main mb-0">51さん</h3>
                <p>人生で初めてのフェイシャルをやっていただきました。施術中は足元も温めていただけるので、血行がよくなりずっと頭の先から爪先までポカポカ、夢見ごこちのひとときを過ごすことができました</p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="md:flex">
              <div class="md:w-32 aspect-square shrink-0">
                <img class="w-full h-full object-cover" src="<?= get_template_directory_uri(); ?>/assets/images/review1.jpg" alt="お客様の声1" />
              </div>
              <div class="md:px-4">
                <h3 class="text-main mb-0">51さん</h3>
                <p>人生で初めてのフェイシャルをやっていただきました。施術中は足元も温めていただけるので、血行がよくなりずっと頭の先から爪先までポカポカ、夢見ごこちのひとときを過ごすことができました</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </section>
  </div>
  <div id="topBlog" class="c-page-section c-container relative">
    <section>
      <div class="c-title-text">
        <div class="text-center">
          <span class="text-sm text-main">Blog</span>
          <h2 class="c-title-text__title u-text-center">スタッフブログ</h2>
        </div>
      </div>
      <div class="flex flex-wrap bg-main2">
        <?php foreach($posts as $post): setup_postdata($post); ?>
        <div class="md:w-1/2 p-4">
          <a href="<?php the_permalink() ?>" class="block h-full">
            <div class="aspect-video">
              <img class="object-cover w-full h-full" src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url('', 'full') : get_template_directory_uri() . '/assets/images/no-image.jpg' ?>" width="1200" height="800" alt="<?php the_title(); ?>">  
            </div>
            <div class="p-4 bg-white">
              <span><?php the_date() ?></span>
              <h3 class=""><?= esc_html(get_the_excerpt()); ?></h3>
            </div>
          </a>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
    </section>
  </div>
  <div id="topContact" class="c-page-section c-container relative">
    <section>
      <div class="c-title-text">
        <div class="text-center">
          <span class="text-sm text-main">Contact</span>
          <h2 class="c-title-text__title u-text-center">エステ情報</h2>
        </div>
      </div>
      <div class="md:flex">
        <div class="md:w-1/2 mb-4 md:mb-0 md:px-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.948308359583!2d139.7328464152152!3d35.65364518020082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188ba1b13b8ded%3A0xaa439db0345efd4a!2z44CSMTA2LTAwNDUgVG9reW8sIE1pbmF0byBDaXR5LCBBemFidWrFq2JhbiwgMy1jaMWNbWXiiJI34oiSNSDjg57jgrnjgrPjg5Pjg6vpurvluIPlvJDnlarppKggMzAx!5e0!3m2!1sen!2sjp!4v1677480582714!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        <div class="md:w-1/2 md:px-4">
          <h3 class="text-main">エステNEXUS</h3>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">代表</div>
            <div>松本 萌夏</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">電話番号</div>
            <div>080-7400-9710</div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">住所</div>
            <div>
              〒106-0045<br />
              東京都港区麻布十番3丁目7-5 マスコビル弐番館301号室
            </div>
          </div>
          <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">営業時間</div>
            <div>11:00～18:00</div>
          </div>
          <!-- <div class="md:flex mb-4 pb-4 border-b border-main">
            <div class="w-32 pr-4">定休日</div>
            <div>月曜日</div>
          </div> -->
          <div class="text-sm">
            麻布十番駅1番出口を出て、きらぼし銀行が目の前にあるので、その手前を右折し、直進します。<br />
            2個めの十字路(ひかり鶏という居酒屋さんが右手に見える所)が出てきますので、そこを渡り左へ直進します。<br />
            右手に階段(あさごやという飲食店さんが一階にございます)が出てきますので、そこを上がっていただき、3階301号室となります。
          </div>
        </div>
      </div>
    </section>
    <div class="c-page-section c-container relative">
      <div class="text-center">
        <a href="tel:08074009710" class="c-button">ご予約：080-7400-9710</a>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
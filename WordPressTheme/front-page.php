<?php
global $voice, $campaign, $information, $blog, $price;
?>
<?php get_header(); ?>

<main>
  <section class="mv top-mv">
    <div class="mv__loading">
      <div class="mv__loading-inner js-mv__loading-inner">
        <div class="mv__loading-image mv__loading-image--left"></div>
        <div class="mv__loading-image mv__loading-image--right"></div>
      </div>
      <div class="mv__title js-mv__title">
        <h2 class="mv__title-big">diving</h2>
        <p class="mv__title-small">into&nbsp;the&nbsp;ocean</p>
      </div>
    </div>
    <div class="mv__swiper swiper js-mv__swiper">
      <div class="mv__swiper-wrapper swiper-wrapper">
        <!-- mvスライダーのループ開始 -->
        <?php
        $slide_count = 4;
        for ($i = 1; $i <= $slide_count; $i++) :
          $pc_image = get_field('slider_' . $i);
          $sp_image = get_field('slider_sp_' . $i);
          $pc_image_url = !empty($pc_image) ? esc_url($pc_image['url']) : get_theme_file_uri('/assets/images/common/mv-pc_' . $i . '.jpg');
          $sp_image_url = !empty($sp_image) ? esc_url($sp_image['url']) : get_theme_file_uri('/assets/images/common/mv-sp_' . $i . '.jpg');
          $alt_text = !empty($sp_image['alt']) ? esc_attr($sp_image['alt']) : '代替テキストなし';
        ?>
          <div class="mv__swiper-item swiper-slide">
            <picture>
              <source media="(min-width:768px)" srcset="<?php echo $pc_image_url; ?>">
              <img src="<?php echo $sp_image_url; ?>" alt="<?php echo $alt_text; ?>">
            </picture>
          </div>
        <?php endfor; ?>
        <!-- mvスライダーのループ終了 -->
      </div>
    </div>
  </section>

  <section class="campaign top-campaign">
    <div class="inner">
      <div class="campaign__title section-title">
        <p class="section-title__en">campaign</p>
        <h2 class="section-title__ja">キャンペーン</h2>
      </div>
      <div class="campaign__swiper-button u-desktop">
        <div class="campaign__swiper-button-prev">
          <span class="campaign__swiper-button-arrow campaign__swiper-button-arrow--prev"></span>
        </div>
        <div class="campaign__swiper-button-next">
          <span class="campaign__swiper-button-arrow campaign__swiper-button-arrow--next"></span>
        </div>
      </div>
      <!-- swiper/サブループ開始 -->
      <div class="campaign__swiper swiper js-campaign__swiper">
        <div class="campaign__swiper-wrapper swiper-wrapper">
          <?php
          $sub_campaign = array(
            'post_type' => 'campaign',
            'posts_per_page' => 8,
          );
          $the_query = new WP_Query($sub_campaign);
          if ($the_query->have_posts()):
          ?>
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
              <div class="campaign__item swiper-slide">
                <div class="campaign-card">
                  <div class="campaign-card__image">
                    <!-- アイキャッチここから -->
                    <?php if (has_post_thumbnail()) : ?>
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                    <?php else : ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                    <?php endif; ?>
                    <!-- アイキャッチここまで -->
                  </div>
                  <div class="campaign-card__content">
                    <?php
                    $campaign_terms = get_the_terms(get_the_ID(), 'campaign_category');
                    if (!empty($campaign_terms) && !is_wp_error($campaign_terms)) {
                      foreach ($campaign_terms as $campaign_term) {
                    ?>
                        <p class="campaign-card__category"><?php echo esc_html($campaign_term->name); ?></p>
                    <?php
                      }
                    }
                    ?>
                    <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                    <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                    <p class="campaign-card__price">
                      <?php if (get_field('campaign_2')) : ?>
                        <span class="campaign-card__price-disabled"><?php the_field('campaign_2') ?></span>
                      <?php endif; ?>
                      <?php if (get_field('campaign_3')) : ?>
                        <span class="campaign-card__price-current"><?php the_field('campaign_3') ?></span>
                      <?php endif; ?>
                    </p>
                  </div>
                </div>
              </div>
          <?php endwhile;
          endif; ?>
          <!-- swiper/ループ終了 -->
        </div>
      </div>

      <div class="campaign__btn">
        <a class="btn" href="<?php echo $campaign; ?>">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </div>
  </section>
  <section class="about top-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__en">about&nbsp;us</p>
        <h2 class="section-title__ja">私たちについて</h2>
      </div>
      <div class="about__image">
        <img class="about__image-small" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about_1.jpg" alt="屋根の上のシーサーの置物の画像">
        <img class="about__image-big" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about_2.jpg" alt="水中を漂う魚の画像">
      </div>
      <div class="about__content">
        <h3 class="about__head">
          <span class="about__initial">d</span>ive&nbsp;into&nbsp;
          <br>the
          <span class="about__initial">o</span>cean
        </h3>
        <div class="about__text-wrapper">
          <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
          <div class="about__btn">
            <a class="btn" href="<?php echo $aboutus; ?>">
              <span class="btn__inner">view&nbsp;more </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="information top-information">
    <div class="inner">
      <div class="information__title section-title">
        <p class="section-title__en">information</p>
        <h2 class="section-title__ja">ダイビング情報</h2>
      </div>
      <div class="information__content-wrapper">
        <div class="information__image colorbox js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-info.jpg" alt="水中にいる無数の魚の画像">
        </div>
        <div class="information__content">
          <h3 class="information__head">ライセンス講習</h3>
          <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。
            <br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__btn">
            <a class="btn" href="<?php echo $information; ?>">
              <span class="btn__inner">view&nbsp;more </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog top-blog">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <p class="section-title__en section-title__en--white">blog</p>
        <h2 class="section-title__ja section-title__ja--white">ブログ</h2>
      </div>
      <div class="blog__card-wrapper blog-cards">

        <!-- サブループ開始-ブログカード3枚 -->
        <?php
        $sub_blog = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $the_query = new WP_Query($sub_blog);
        if ($the_query->have_posts()):
        ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <article class="blog-cards__item blog-card">
              <a href="<?php the_permalink(); ?>" class="blog-card__link">
                <div class="blog-card__image">
                  <!-- アイキャッチここから -->
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                  <!-- アイキャッチここまで -->
                </div>
                <div class="blog-card__meta">
                  <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                  <h3 class="blog-card__title blog-card__title--sub"><?php the_title(); ?></h3>
                </div>
                <p class="blog-card__text">
                  <?php
                  $content = get_the_content();
                  $content = preg_replace('/<h2\b[^>]*>(.*?)<\/h2>/i', '', $content);
                  $content = preg_replace('/<h3\b[^>]*>(.*?)<\/h3>/i', '', $content);
                  $content = wp_strip_all_tags($content);
                  echo wp_trim_words($content, 100, '...');
                  ?>
                </p>
              </a>
            </article>
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
        <!-- サブループ終了 -->

      </div>
      <div class="blog__btn">
        <a class="btn" href="<?php echo $blog; ?>">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </div>
  </section>
  <section class="voice top-voice icon-fish icon-fish--voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__en">voice</p>
        <h2 class="section-title__ja">お客様の声</h2>
      </div>
      <div class="voice__card-wrapper voice-cards">
        <!-- サブループ開始-ボイスカード2枚 -->
        <?php
        $sub_voice = array(
          'post_type' => 'voice',
          'posts_per_page' => 2,
        );
        $the_query = new WP_Query($sub_voice);
        if ($the_query->have_posts()):
        ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <article class="voice-cards__item voice-card">
              <div class="voice-card__head">
                <div class="voice-card__info">
                  <div class="voice-card__inner">
                    <?php if (get_field('voice_1')) : ?>
                      <p class="voice-card__age"><?php the_field('voice_1') ?></p>
                    <?php endif; ?>
                    <?php
                    $voice_terms = get_the_terms(get_the_ID(), 'voice_category');
                    if (!empty($voice_terms) && !is_wp_error($voice_terms)) {
                      foreach ($voice_terms as $voice_term) {
                    ?>
                        <p class="voice-card__category"><?php echo esc_html($voice_term->name); ?></p>
                    <?php
                      }
                    }
                    ?>
                  </div>
                  <h3 class="voice-card__title"><?php the_title(); ?></h3>
                </div>
                <div class="voice-card__image colorbox js-colorbox">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_1.jpg" alt="女性の画像">
                </div>
              </div>
              <?php if (get_field('voice_2')) : ?>
                <p class="voice-card__text">
                  <?php the_field('voice_2') ?>
                </p>
              <?php endif; ?>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- サブループ終了 -->

      </div>
      <div class="voice__btn">
        <a class="btn" href="<?php echo $voice; ?>">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </div>
  </section>
  <section class="price top-price">
    <div class="inner">
      <div class="price__title section-title">
        <p class="section-title__en">price</p>
        <h2 class="section-title__ja">料金一覧</h2>
      </div>
      <div class="price__content">
        <div class="price__image colorbox js-colorbox">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="ウミガメの画像">
          </picture>
        </div>
        <div class="price__list-wrapper">
            <?php
            $source_page_id = 13;
            // カテゴリー名
            $course_cats = [
              scf::get('course_cat_1', $source_page_id),
              scf::get('course_cat_2', $source_page_id),
              scf::get('course_cat_3', $source_page_id),
              scf::get('course_cat_4', $source_page_id),
            ];
            // 項目と金額
            $course_data = [
              scf::get('course_1', $source_page_id),
              scf::get('course_2', $source_page_id),
              scf::get('course_3', $source_page_id),
              scf::get('course_4', $source_page_id),
            ];

            for ($i = 0; $i < 4; $i++) :
              if (!empty($course_cats[$i]) && !empty($course_data[$i])) :
            ?>
            <div class="price__list">
              <h3 class="price__list-title"><?php echo esc_html($course_cats[$i]); ?></h3>
              <?php foreach ($course_data[$i] as $index => $course) : ?>
              <dl class="price__list-item">
                  <dt><?php echo wp_kses_post($course['course_name_' . ($i + 1)]); ?></dt>
                  <dd><?php echo esc_html($course['course_price_' . ($i + 1)]); ?></dd>
                </dl>
                <?php endforeach; ?>
              </div>
              <?php endif; endfor; ?>
          </div>
        </div>
        <div class="price__btn">
          <a class="btn" href="<?php echo $price; ?>">
            <span class="btn__inner">view&nbsp;more </span>
          </a>
        </div>
    </div>
  </section>
  <!-- 共通コンタクトエリア取得 -->
  <?php get_template_part('parts/common-contact'); ?>
</main>
<?php get_footer(); ?>
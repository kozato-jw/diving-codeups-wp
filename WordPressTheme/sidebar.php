<?php
global $voice, $campaign;
?>

<aside class="blog-sub__sidebar sidebar">
  <div class="sidebar__inner">

    <section class="sidebar__content">
      <h2 class="sidebar__title sidebar__title--article">人気記事</h2>
      <div class="sidebar__blog-cards">
        <!-- サブループ開始-blog3件 -->
        <?php
        $sub_blog = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
        );
        $the_query = new WP_Query($sub_blog);
        if ($the_query->have_posts()):
        ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <article class="sidebar__blog-card blog-card">
              <a href="<?php the_permalink(); ?>" class="blog-card__link blog-card__link--sidebar">
                <div class="blog-card__image blog-card__image--sidebar">
                  <!-- アイキャッチここから -->
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else : ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                  <!-- アイキャッチここまで -->
                </div>
                <div class="blog-card__meta">
                  <time class="blog-card__date blog-card__date--sidebar" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                  <h3 class="blog-card__title blog-card__title--sidebar"><?php the_title(); ?></h3>
                </div>
              </a>
            </article>
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
        <!-- サブループ終了 -->
      </div>
    </section>

    <section class="sidebar__content">
      <h2 class="sidebar__title">口コミ</h2>
      <!-- サブループ開始-ボイスカード1枚 -->
      <?php
      $sub_voice = array(
        'post_type' => 'voice',
        'posts_per_page' => 1,
      );
      $the_query = new WP_Query($sub_voice);
      if ($the_query->have_posts()):
      ?>
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
          <article class="sidebar__voice-card voice-card voice-card--sidebar">
            <div class="voice-card__head voice-card__head--sidebar">
              <div class="voice-card__info voice-card__info--sidebar">
                <div class="voice-card__inner">
                  <p class="voice-card__age voice-card__age--sidebar">30代(カップル)</p>
                </div>
                <h3 class="voice-card__title voice-card__title--sidebar"><?php the_title() ?></h3>
              </div>
              <div class="voice-card__image voice-card__image--sidebar">
                <!-- アイキャッチここから -->
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                <?php endif; ?>
                <!-- アイキャッチここまで -->
              </div>
            </div>
          </article>
          <!-- サブループ終了 -->
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
      <div class="sidebar__btn">
        <a class="btn" href="<?php echo $voice; ?>">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </section>

    <section class="sidebar__content">
      <h2 class="sidebar__title sidebar__title--campaign">キャンペーン</h2>
      <div class="sidebar__campaign-cards">
        <!-- サブループ開始-キャンペーン2件 -->
        <?php
        $sub_campaign = array(
          'post_type' => 'campaign',
          'posts_per_page' => 2,
        );
        $the_query = new WP_Query($sub_campaign);
        if ($the_query->have_posts()):
        ?>
          <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="sidebar__campaign-card campaign-card">
              <div class="campaign-card__image campaign-card__image--sidebar">
                <!-- アイキャッチここから -->
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                <?php endif; ?>
                <!-- アイキャッチここまで -->
              </div>
              <div class="campaign-card__content campaign-card__content--sidebar">
                <h3 class="campaign-card__title campaign-card__title--sidebar"><?php the_title() ?></h3>
                <p class="campaign-card__text campaign-card__text--sidebar">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price campaign-card__price--sidebar">
                  <span class="campaign-card__price-disabled campaign-card__price-disabled--sidebar"><?php the_field('campaign_2') ?></span>
                  <span class="campaign-card__price-current campaign-card__price-current--sidebar"><?php the_field('campaign_3') ?></span>
                </p>
              </div>
            </div>
            <!-- サブループ終了 -->
        <?php endwhile;
          wp_reset_postdata();
        endif; ?>
      </div>
      <div class="sidebar__btn">
        <a class="btn" href="<?php echo $campaign; ?>">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </section>

    <section class="sidebar__content">
      <h2 class="sidebar__title">アーカイブ</h2>
      <ol class="sidebar__archive-lists">
        <?php
        $years = $wpdb->get_results("
          SELECT DISTINCT YEAR(post_date) AS year, MONTH(post_date) AS month
          FROM $wpdb->posts
          WHERE post_status = 'publish'
          AND post_type = 'post'
          ORDER BY post_date DESC
        ");

        $current_year = null;

        foreach ($years as $year) {
          if ($current_year !== $year->year) {
            if ($current_year !== null) {
              echo '</ol></li>';
            }
            $current_year = $year->year;
            echo '<li class="sidebar__archive-list">';
            echo '<a class="sidebar__archive-year">' . esc_html($year->year) . '</a>';
            echo '<ol class="sidebar__archive-months">';
          }

          $month_name = date_i18n('F', mktime(0, 0, 0, $year->month, 10));
          echo '<li class="sidebar__archive-month">';
          echo '<a href="' . get_month_link($year->year, $year->month) . '">' . esc_html($year->month) . '月</a>';
          echo '</li>';
        }
        if ($current_year !== null) {
          echo '</ol></li>';
        }
        ?>
      </ol>
    </section>
  </div>
</aside>
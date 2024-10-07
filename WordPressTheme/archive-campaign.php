<?php get_header(); ?>
<main>
  <section class="mv-sub campaign-mv">
    <h1 class="mv-sub__title">campaign</h1>
    <picture>
      <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv_pc.jpg">
      <img class="mv-sub__image" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign-mv_sp.jpg" alt="海中を泳ぐ黄色い魚の画像">
    </picture>
  </section>
  <div class="breadcrumbs campaign-breadcrumbs">
    <div class="inner">
      <!-- パンくずリスト取得 -->
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>
  <section class="campaign-sub campaign-sub-content icon-fish">
    <div class="inner">

      <!-- カスタムタクソノミー/Custom Post Type UI -->
      <div class="campaign-sub__category category">
        <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="category__btn active" data-tab="tab-1">all</a>
        <?php
        $terms = get_terms(array(
          'taxonomy' => 'campaign_category',
          'hide_empty' => false,
        ));
        if (!empty($terms) && !is_wp_error($terms)) {
          $tab_index = 2;
          foreach ($terms as $term) {
            $term_link = get_term_link($term);
            if (is_wp_error($term_link)) {
              continue;
            }
        ?>
            <a href="<?php echo esc_url($term_link); ?>" class="category__btn" data-tab="tab-<?php echo $tab_index; ?>"><?php echo esc_html($term->name); ?></a>
        <?php
            $tab_index++;
          }
        }
        ?>
      </div>
      <!-- カスタムタクソノミー/Custom Post Type UI/ここまで -->

      <div class="campaign-sub__cards">
        <!-- ループ開始 -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="campaign-card js-tab-2">
              <div class="campaign-card__image">
                <!-- アイキャッチここから -->
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else : ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                <?php endif; ?>
                <!-- アイキャッチここまで -->
              </div>
              <div class="campaign-card__content campaign-card__content--sub">
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
                <h2 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h2>
                <p class="campaign-card__text campaign-card__text--sub">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price campaign-card__price--sub">
                  <?php if (get_field('campaign_2')) : ?>
                    <span class="campaign-card__price-disabled"><?php the_field('campaign_2') ?></span>
                  <?php endif; ?>
                  <?php if (get_field('campaign_3')) : ?>
                    <span class="campaign-card__price-current"><?php the_field('campaign_3') ?></span>
                  <?php endif; ?>
                </p>
                <?php if (get_field('campaign_4')) : ?>
                  <p class="campaign-card__description u-desktop"><?php the_field('campaign_4') ?></p>
                <?php endif; ?>
                <?php if (get_field('campaign_5')) : ?>
                  <p class="campaign-card__description-date u-desktop"><?php the_field('campaign_5') ?></p>
                <?php endif; ?>
                <p class="campaign-card__description-cta u-desktop">ご予約・お問い合わせはコチラ</p>
                <div class="campaign-card__btn u-desktop">
                  <a class="btn" href="<?php echo esc_url(home_url('/contact/')); ?>">
                    <span class="btn__inner">contact&nbsp;us </span>
                  </a>
                </div>
              </div>
            </div>
        <?php endwhile;
        endif; ?>
        <!-- ループ終了 -->

      </div>
      <!-- ページネーション取得 -->
      <?php wp_pagenavi(); ?>
    </div>
  </section>
  <!-- 共通コンタクトエリア取得 -->
  <?php get_template_part('parts/common-contact'); ?>
</main>
<?php get_footer(); ?>
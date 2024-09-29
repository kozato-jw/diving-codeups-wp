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
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>
  <section class="campaign-sub campaign-sub-content icon-fish">
    <div class="inner">
      <!-- カスタムタクソノミー/Custom Post Type UI -->
      <div class="campaign-sub__category category">
        <!-- hrefとdata-tabを #category- プレフィックスに変更 -->
        <a href="#category-tab-1" class="category__btn active" data-tab="tab-1">all</a>
        <a href="#category-tab-2" class="category__btn" data-tab="tab-2">ライセンス講習</a>
        <a href="#category-tab-4" class="category__btn" data-tab="tab-4">ファンダイビング</a>
        <a href="#category-tab-3" class="category__btn" data-tab="tab-3">体験ダイビング</a>
      </div>
      <!-- カスタムタクソノミー/Custom Post Type UI/ここまで -->

      <div class="campaign-sub__cards">


        <!-- ループ多分ここから -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="campaign-card js-tab-2">
              <div class="campaign-card__image">
                <!-- アイキャッチここから -->
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                <?php else :  ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                <?php endif; ?>
                <!-- アイキャッチここまで -->
              </div>
              <div class="campaign-card__content campaign-card__content--sub">
                <p class="campaign-card__category"><?php the_field('campaign_1') ?></p>
                <h2 class="campaign-card__title campaign-card__title--sub"><?php the_title(); ?></h2>
                <p class="campaign-card__text campaign-card__text--sub">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price campaign-card__price--sub">
                  <span class="campaign-card__price-disabled"><?php the_field('campaign_2') ?></span>
                  <span class="campaign-card__price-current"><?php the_field('campaign_3') ?></span>
                </p>
                <p class="campaign-card__description u-desktop"><?php the_field('campaign_4') ?></p>
                <p class="campaign-card__description-date u-desktop"><?php the_field('campaign_5') ?></p>
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

      <?php wp_pagenavi(); ?>

    </div>
  </section>

  <?php get_template_part('parts/common-contact'); ?>

</main>
<?php get_footer(); ?>
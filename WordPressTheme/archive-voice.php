<?php get_header(); ?>
<main>
  <section class="mv-sub voice-mv">
    <h1 class="mv-sub__title">voice</h1>
    <picture>
      <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv_pc.jpg">
      <img class="mv-sub__image" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice-mv_sp.jpg" alt="ダイビングをしている人の画像">
    </picture>
  </section>
  <div class="breadcrumbs voice-breadcrumbs">
    <div class="inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>
  <div class="voice-sub voice-sub-content icon-fish">
    <div class="inner">
      <!-- カスタムタクソノミー/Custom Post Type UI -->
      <div class="voice-sub__category category">
        <!-- hrefとdata-tabを #category- プレフィックスに変更 -->
        <a href="#category-tab-1" class="category__btn active" data-tab="tab-1">all</a>
        <a href="#category-tab-2" class="category__btn" data-tab="tab-2">ライセンス講習</a>
        <a href="#category-tab-4" class="category__btn" data-tab="tab-4">ファンダイビング</a>
        <a href="#category-tab-3" class="category__btn" data-tab="tab-3">体験ダイビング</a>
      </div>
      <!-- カスタムタクソノミー/Custom Post Type UI/ここまで -->

      <div class="voice-sub__card-wrapper voice-cards">

        <!-- ループ開始 -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="voice-cards__item voice-card js-tab-2">
              <div class="voice-card__head">
                <div class="voice-card__info">
                  <div class="voice-card__inner">
                    <p class="voice-card__age">20代(女性)</p>
                    <p class="voice-card__category">ライセンス講習</p>
                  </div>
                  <h2 class="voice-card__title"><?php the_title(); ?></h2>
                </div>
                <div class="voice-card__image colorbox js-colorbox">
                  <!-- アイキャッチここから -->
                  <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                  <?php else :  ?>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                  <?php endif; ?>
                  <!-- アイキャッチここまで -->
                </div>
              </div>
              <p class="voice-card__text">
                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              </p>
            </article>
        <?php endwhile;
        endif; ?>
        <!-- ループ終了 -->

      </div>

      <?php wp_pagenavi(); ?>

    </div>
  </div>

  <?php get_template_part('parts/common-contact'); ?>

</main>
<?php get_footer(); ?>
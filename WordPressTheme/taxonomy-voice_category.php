<?php
$voice_taxonomy = get_query_var('voice_category');
$voice_license = get_term_by('slug', '$voice_taxonomy', 'license');
$voice_fundiving = get_term_by('slug', '$voice_taxonomy', 'fundiving');
$voice_experience = get_term_by('slug', '$voice_taxonomy', 'experience');
?>

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
        <!-- 「すべて」のタブリンク -->
        <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="category__btn active" data-tab="tab-1">all</a>

        <?php
        // voice_categoryタクソノミーからタームを取得
        $terms = get_terms(array(
          'taxonomy' => 'voice_category',
          'hide_empty' => false, // 空のタームも表示する
        ));

        // タームが取得できた場合の処理
        if (!empty($terms) && !is_wp_error($terms)) {
          $tab_index = 2; // タブインデックスの初期値
          foreach ($terms as $term) {
            // タームのリンクURLを取得
            $term_link = get_term_link($term);
            if (is_wp_error($term_link)) {
              continue; // エラーが発生した場合は次のループに進む
            }
        ?>
            <!-- タームに基づくリンクを生成 -->
            <a href="<?php echo esc_url($term_link); ?>" class="category__btn" data-tab="tab-<?php echo $tab_index; ?>">
              <?php echo esc_html($term->name); ?>
            </a>
        <?php
            $tab_index++; // タブインデックスをインクリメント
          }
        }
        ?>
      </div>
      <!-- カスタムタクソノミー/Custom Post Type UI/ここまで -->

      <div class="voice-sub__card-wrapper voice-cards">
        <!-- ループ開始 -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="voice-cards__item voice-card js-tab-2">
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
              <?php if (get_field('voice_2')) : ?>
                <p class="voice-card__text">
                  <?php the_field('voice_2') ?>
                </p>
              <?php endif; ?>
            </article>
          <?php endwhile; ?>
        <?php endif; ?>
        <!-- ループ終了 -->

      </div>

      <?php wp_pagenavi(); ?>

    </div>
  </div>

  <?php get_template_part('parts/common-contact'); ?>

</main>
<?php get_footer(); ?>
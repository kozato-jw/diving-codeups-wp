<?php get_header(); ?>
<main>
  <section class="mv-sub faq-mv">
    <h1 class="mv-sub__title mv-sub__title--faq">faq</h1>
    <picture>
      <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv_pc.jpg">
      <img class="mv-sub__image" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq-mv_sp.jpg" alt="青い波と白い砂浜の波打ち際の画像">
    </picture>
  </section>
  <div class="breadcrumbs faq-breadcrumbs">
    <div class="inner">
      <!-- パンくずリスト取得 -->
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>
  <section class="faq-sub faq-sub-content icon-fish">
    <div class="inner-sub">
      <div class="faq-sub__items faq-boxes">
        <!-- 繰り返しフィールド開始 -->
        <?php
        $faq_box = scf::get('faq_box');
        ?>
        <?php
        if (!empty($faq_box)) :
        ?>
          <?php
          foreach ($faq_box as $index => $faq_item) :
            $faq_title = $faq_item['faq_title'];
            $faq_answer = $faq_item['faq_answer'];
          ?>
            <div class="faq-boxes__item faq-box">
              <h2 class="faq-box__function">
                <?php echo esc_html($faq_title); ?>
              </h2>
              <div class="faq-box__answer">
                <p class="faq-box__answer-text">
                  <?php echo esc_html($faq_answer);
                  ?>
                </p>
              </div>
            </div>
        <?php endforeach;
        endif; ?>
        <!-- 繰り返しフィールド終了 -->
      </div>
    </div>
  </section>
  <!-- ページネーション取得 -->
  <?php get_template_part('parts/common-contact'); ?>
</main>
<?php get_footer(); ?>
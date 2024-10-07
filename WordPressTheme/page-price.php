<?php get_header(); ?>
<main>
  <section class="mv-sub price-mv">
    <h1 class="mv-sub__title">price</h1>
    <picture>
      <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv_pc.jpg">
      <img class="mv-sub__image" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-mv_sp.jpg" alt="ダイバーが海面から頭を出している画像">
    </picture>
  </section>
  <div class="breadcrumbs price-breadcrumbs">
    <div class="inner">
      <!-- パンくずリスト取得 -->
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>
  <section class="price-sub price-sub-content icon-fish icon-fish--price">
    <div class="inner-sub">
      <div class="price-sub__items price-lists">

        <?php
        // カテゴリー名
        $course_cats = [
          scf::get('course_cat_1'),
          scf::get('course_cat_2'),
          scf::get('course_cat_3'),
          scf::get('course_cat_4'),
        ];
        // 項目と金額
        $course_data = [
          scf::get('course_1'),
          scf::get('course_2'),
          scf::get('course_3'),
          scf::get('course_4'),
        ];

        for ($i = 0; $i < 4; $i++) :
          if (!empty($course_cats[$i]) && !empty($course_data[$i])) :
        ?>
            <div id="licensediving" class="price-lists__item price-list">
              <div class="price-list__title">
                <h2 class="price-list__title-text"><?php echo ($course_cats[$i]); ?></h2>
              </div>
              <table class="price-list__list">
                <?php
                foreach ($course_data[$i] as $index => $course) :
                  $course_name = $course['course_name_' . ($i + 1)];
                  $course_price = $course['course_price_' . ($i + 1)];
                ?>
                  <tr>
                    <th class="price-list__head"><?php echo wp_kses_post($course_name); ?></th>
                    <td class="price-list__price"><?php echo esc_html($course_price); ?></td>
                  </tr>
                <?php
                endforeach;
                ?>
              </table>
            </div>
        <?php
          endif;
        endfor;
        ?>

      </div>
    </div>
  </section>
  <!-- 共通コンタクトエリア取得 -->
  <?php get_template_part('parts/common-contact'); ?>
</main>
<?php get_footer(); ?>
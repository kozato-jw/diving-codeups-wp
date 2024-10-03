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
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>
  <section class="price-sub price-sub-content icon-fish icon-fish--price">
    <div class="inner-sub">
      <div class="price-sub__items price-lists">

        <?php
        //カテゴリー名
        $course_1_cat = scf::get('course_cat_1');
        $course_2_cat = scf::get('course_cat_2');
        $course_3_cat = scf::get('course_cat_3');
        $course_4_cat = scf::get('course_cat_4');
        // 繰り返しフィールドの情報
        $course_1_data = scf::get('course_1');
        $course_2_data = scf::get('course_2');
        $course_3_data = scf::get('course_3');
        $course_4_data = scf::get('course_4');
        ?>

        <?php
        if (!empty($course_1_cat) && !empty($course_1_data)) :
        ?>
          <div id="licensediving" class="price-lists__item price-list">
            <div class="price-list__title">
              <h2 class="price-list__title-text"><?php echo ($course_1_cat); ?></h2>
            </div>
            <table class="price-list__list">
              <?php
              foreach ($course_1_data as $index => $course) :
                $course_name = $course['course_name_1'];
                $course_price = $course['course_price_1'];
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
        <?php endif; ?>

        <?php
        if (!empty($course_2_cat) && !empty($course_2_data)) :
        ?>
          <div id="licensediving" class="price-lists__item price-list">
            <div class="price-list__title">
              <h2 class="price-list__title-text"><?php echo ($course_2_cat); ?></h2>
            </div>
            <table class="price-list__list">
              <?php
              foreach ($course_2_data as $index => $course) :
                $course_name = $course['course_name_2'];
                $course_price = $course['course_price_2'];
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
        <?php endif; ?>

        <?php
        if (!empty($course_3_cat) && !empty($course_3_data)) :
        ?>
          <div id="licensediving" class="price-lists__item price-list">
            <div class="price-list__title">
              <h2 class="price-list__title-text"><?php echo ($course_3_cat); ?></h2>
            </div>
            <table class="price-list__list">
              <?php
              foreach ($course_3_data as $index => $course) :
                $course_name = $course['course_name_3'];
                $course_price = $course['course_price_3'];
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
        <?php endif; ?>

        <?php
        if (!empty($course_4_cat) && !empty($course_4_data)) :
        ?>
          <div id="licensediving" class="price-lists__item price-list">
            <div class="price-list__title">
              <h2 class="price-list__title-text"><?php echo ($course_4_cat); ?></h2>
            </div>
            <table class="price-list__list">
              <?php
              foreach ($course_4_data as $index => $course) :
                $course_name = $course['course_name_4'];
                $course_price = $course['course_price_4'];
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
        <?php endif; ?>

      </div>
    </div>
  </section>

  <?php get_template_part('parts/common-contact'); ?>

</main>
<?php get_footer(); ?>
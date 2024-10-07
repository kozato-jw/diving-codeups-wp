<?php get_header(); ?>

<main>
  <section class="mv-sub about-mv">
    <h1 class="mv-sub__title">about&nbsp;us</h1>
    <picture>
      <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-mv_pc.jpg">
      <img class="mv-sub__image" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-mv_sp.jpg" alt="シーサーの画像">
    </picture>
  </section>
  <div class="breadcrumbs about-breadcrumbs">
    <div class="inner">
      <!-- パンくずリスト取得 -->
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div>
  <section class="about about--sub about-sub-content icon-fish icon-fish--about">
    <div class="about__inner inner">
      <div class="about__image about__image--sub">
        <img class="about__image-small u-desktop" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about_1.jpg" alt="屋根の上のシーサーの置物の画像">
        <img class="about__image-big about__image-big--sub" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about_2.jpg"
          alt="水中を漂う魚の画像">
      </div>
      <div class="about__content about__content--sub">
        <h2 class="about__head about__head--sub">
          <span class="about__initial">d</span>ive&nbsp;into&nbsp;
          <br>the
          <span class="about__initial">o</span>cean
        </h2>
        <div class="about__text-wrapper">
          <p class="about__text about__text--sub">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="about__gallery gallery about-gallery">
    <div class="inner">
      <div class="gallery__title section-title">
        <p class="section-title__en section-title__en--gallery">gallery</p>
        <h2 class="section-title__ja">フォト</h2>
      </div>
      <!-- 繰り返しフィールド開始 -->
      <?php
      $gallery_images = scf::get('gallery');
      ?>
      <div class="gallery__images">
        <?php
        foreach ($gallery_images as $gallery_image) :
        ?>
          <div class="gallery__image">
            <?php if (!empty($gallery_image)) : ?>
              <img src="<?php echo wp_get_attachment_url($gallery_image['gallery_image']); ?>" alt="ギャラリーの画像">
            <?php endif; ?>
          </div>
        <?php endforeach; ?>
      </div>
      <!-- 繰り返しフィールド終了 -->
    </div>
    <!-- モーダル用のHTML -->
    <div id="modal" class="modal">
      <img id="modalimage" class="modal__content" alt="ギャラリーの画像">
    </div>
  </section>
  <!-- 共通コンタクトエリア取得 -->
  <?php get_template_part('parts/common-contact'); ?>
</main>
<?php get_footer(); ?>
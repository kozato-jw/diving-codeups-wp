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
    <div class="breadcrumbs__inner inner">パンくずリストが入る</div>
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
      <div class="gallery__images">
        <div class="gallery__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery1.jpg" alt="海中を泳ぐ魚の画像">
        </div>
        <div class="gallery__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery2.jpg" alt="浅瀬に浮かぶ船の画像">
        </div>
        <div class="gallery__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery3.jpg" alt="海中を泳ぐ魚の画像">
        </div>
        <div class="gallery__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.jpg" alt="海中を泳ぐ魚の画像">
        </div>
        <div class="gallery__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.jpg" alt="海中を泳ぐ魚の画像">
        </div>
        <div class="gallery__image">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery6.jpg" alt="海中を泳ぐ魚の画像">
        </div>
      </div>
    </div>
    <!-- モーダル用のHTML -->
    <div id="modal" class="modal">
      <img id="modalimage" class="modal__content" alt="">
    </div>
  </section>
  <!-- 共通コンタクトエリア -->
  <section class="common-contact top-contact">
    <div class="inner">
      <div class="common-contact__inner">
        <div class="common-contact__content">
          <div class="common-contact__logo">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.svg" alt="コードアップスのロゴ">
          </div>
          <div class="common-contact__item">
            <div class="common-contact__address">
              <p class="common-contact__address-item">沖縄県那覇市1-1</p>
              <p class="common-contact__address-item">
                <a href="tel:01200000000">TEL:0120-000-0000</a>
              </p>
              <p class="common-contact__address-item">営業時間:8:30-19:00</p>
              <p class="common-contact__address-item">定休日:毎週火曜日</p>
            </div>
            <iframe class="common-contact__map"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d128399.76253516936!2d127.7251281218775!3d26.367773122738253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e50e1eac275ad7%3A0x33c571838dc11528!2z5rKW57iE55yM5rKW57iE5biC!5e0!3m2!1sja!2sjp!4v1716380107153!5m2!1sja!2sjp"
              style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <div class="common-contact__title-area">
          <div class="common-contact__title">
            <p class="common-contact__title-en">contact</p>
            <h2 class="common-contact__title-ja">お問い合わせ</h2>
          </div>
          <p class="common-contact__text">ご予約・お問い合わせはコチラ</p>
          <div class="common-contact__btn">
            <a class="btn" href="page-contact.html">
              <span class="btn__inner">contact&nbsp;us </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />

  <?php wp_head(); ?>

</head>

<body>
  <!-- <header class="header js-top-header"> -->
    <header class="<?php echo is_front_page() ? 'header js-top-header' : 'header header--sub'; ?>">

    <div class="header__inner">
      <?php
      echo is_front_page()
        ? '<h1 class="header__logo">
        <a href="' . esc_url(home_url('/')) . '">
          <img src="' . get_theme_file_uri('/assets/images/common/logo-white.png') . '" alt="コードアップス">
        </a>
      </h1>'
        : '<div class="header__logo">
        <a href="' . esc_url(home_url('/')) . '">
          <img src="' . get_theme_file_uri('/assets/images/common/logo-white.png') . '" alt="コードアップス">
        </a>
      </div>';
      ?>

      <nav class="header__menu main-nav u-desktop">
        <ul class="main-nav__items">
          <li class="main-nav__item">
            <a class="main-nav__link" href="archive-campaign.html">
              <p class="main-nav__link-en">campaign</p>
              <p class="main-nav__link-ja">キャンペーン</p>
            </a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="page-about-us.html">
              <p class="main-nav__link-en">about
                <span class="main-nav__link--initial">u</span>s
              </p>
              <p class="main-nav__link-ja">私たちについて</p>
            </a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="page-information.html">
              <p class="main-nav__link-en">information</p>
              <p class="main-nav__link-ja">ダイビング情報</p>
            </a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="home.html">
              <p class="main-nav__link-en">blog</p>
              <p class="main-nav__link-ja">ブログ</p>
            </a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="archive-voice.html">
              <p class="main-nav__link-en">voice</p>
              <p class="main-nav__link-ja">お客様の声</p>
            </a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="page-price.html">
              <p class="main-nav__link-en">price</p>
              <p class="main-nav__link-ja">料金一覧</p>
            </a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link" href="page-faq.html">
              <p class="main-nav__link-en main-nav__link-en--faq">faq</p>
              <p class="main-nav__link-ja">よくある質問</p>
            </a>
          </li>
          <li class="main-nav__item">
            <a class="main-nav__link main-nav__link--contact" href="page-contact.html">
              <p class="main-nav__link-en">contact</p>
              <p class="main-nav__link-ja">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- ハンバーガーメニュー -->
      <div class="header__hamburger hamburger js-hamburger u-mobile" id="hamburger">
        <span class="hamburger__bar"></span>
        <span class="hamburger__bar"></span>
        <span class="hamburger__bar"></span>
      </div>
    </div>
    <!-- ハンバーガーメニュー内部 -->
    <div class="header__nav-wrapper js-header__nav-wrapper u-mobile">
      <nav class="header__nav gnav inner">
        <ul class="gnav__items">
          <li class="gnav__item gnav__item--main">
            <a href="archive-campaign.html#category-tab-1">キャンペーン</a>
          </li>
          <li class="gnav__item gnav__item--sub">
            <a href="archive-campaign.html#category-tab-2">ライセンス取得</a>
          </li>
          <li class="gnav__item gnav__item--sub">
            <a href="archive-campaign.html#category-tab-3">貸切体験ダイビング</a>
          </li>
          <li class="gnav__item gnav__item--sub gnav__item--mb40">
            <a href="archive-campaign.html#category-tab-4">ファンダイビング</a>
          </li>
          <li class="gnav__item gnav__item--main">
            <a href="page-about-us.html">私たちについて</a>
          </li>
        </ul>
        <ul class="gnav__items">
          <li class="gnav__item gnav__item--main gnav__item--mb40">
            <a href="archive-voice.html">お客様の声 </a>
          </li>
          <li class="gnav__item gnav__item--main">
            <a href="page-price.html">料金一覧 </a>
          </li>
          <li class="gnav__item gnav__item--sub">
            <a href="page-price.html#licensediving">ライセンス講習</a>
          </li>
          <li class="gnav__item gnav__item--sub">
            <a href="page-price.html#trialdiving">体験ダイビング</a>
          </li>
          <li class="gnav__item gnav__item--sub gnav__item--mb40">
            <a href="page-price.html#fundiving">ファンダイビング</a>
          </li>
        </ul>
        <ul class="gnav__items">
          <li class="gnav__item gnav__item--main">
            <a href="page-information.html">ダイビング情報 </a>
          </li>
          <li class="gnav__item gnav__item--sub">
            <a href="page-information.html#tab-license">ライセンス講習</a>
          </li>
          <li class="gnav__item gnav__item--sub">
            <a href="page-information.html#tab-trialdiving">体験ダイビング</a>
          </li>
          <li class="gnav__item gnav__item--sub gnav__item--mb40">
            <a href="page-information.html#tab-fundiving">ファンダイビング</a>
          </li>
          <li class="gnav__item gnav__item--main">
            <a href="home.html">ブログ</a>
          </li>
        </ul>
        <ul class="gnav__items">
          <li class="gnav__item gnav__item--main gnav__item--mb40">
            <a href="page-faq.html">よくある質問</a>
          </li>
          <li class="gnav__item gnav__item--main gnav__item--mb40">
            <a href="page-privacypolicy.html">プライバシー
              <br class="u-mobile">ポリシー
            </a>
          </li>
          <li class="gnav__item gnav__item--main gnav__item--mb40">
            <a href="page-terms-of-service.html">利用規約</a>
          </li>
          <li class="gnav__item gnav__item--main gnav__item--mb40">
            <a href="page-sitemap.html">サイトマップ</a>
          </li>
          <li class="gnav__item gnav__item--main gnav__item--mb40">
            <a href="page-contact.html">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
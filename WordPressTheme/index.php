<?php get_header(); ?>

<main>
  <section class="mv top-mv">
    <div class="mv__loading">
      <div class="mv__loading-inner js-mv__loading-inner">
        <div class="mv__loading-image mv__loading-image--left"></div>
        <div class="mv__loading-image mv__loading-image--right"></div>
      </div>
      <div class="mv__title js-mv__title">
        <h2 class="mv__title-big">diving</h2>
        <p class="mv__title-small">into&nbsp;the&nbsp;ocean</p>
      </div>
    </div>
    <div class="mv__swiper swiper js-mv__swiper">
      <div class="mv__swiper-wrapper swiper-wrapper">
        <div class="mv__swiper-item swiper-slide">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_1.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_1.jpg" alt="海中を泳ぐウミガメの画像">
          </picture>
        </div>
        <div class="mv__swiper-item swiper-slide">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_2.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_2.jpg" alt="海中を泳ぐウミガメの画像">
          </picture>
        </div>
        <div class="mv__swiper-item swiper-slide">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_3.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_3.jpg" alt="海に浮かぶ船と青空の画像">
          </picture>
        </div>
        <div class="mv__swiper-item swiper-slide">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-pc_4.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/mv-sp_4.jpg" alt="空と海と砂浜の画像">
          </picture>
        </div>
      </div>
    </div>
  </section>
  <section class="campaign top-campaign">
    <div class="inner">
      <div class="campaign__title section-title">
        <p class="section-title__en">campaign</p>
        <h2 class="section-title__ja">キャンペーン</h2>
      </div>
      <div class="campaign__swiper-button u-desktop">
        <div class="campaign__swiper-button-prev">
          <span class="campaign__swiper-button-arrow campaign__swiper-button-arrow--prev"></span>
        </div>
        <div class="campaign__swiper-button-next">
          <span class="campaign__swiper-button-arrow campaign__swiper-button-arrow--next"></span>
        </div>
      </div>
      <div class="campaign__swiper swiper js-campaign__swiper">
        <div class="campaign__swiper-wrapper swiper-wrapper">
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_1.jpg" alt="水中にいる無数の魚の画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">ライセンス講習</p>
                <h3 class="campaign-card__title">ライセンス取得</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥56,000</span>
                  <span class="campaign-card__price-current">¥46,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_2.jpg" alt="浅瀬に浮かぶ船の画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">体験ダイビング</p>
                <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥24,000</span>
                  <span class="campaign-card__price-current">¥18,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_3.jpg" alt="水中を漂うクラゲの画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">体験ダイビング</p>
                <h3 class="campaign-card__title">ナイトダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥10,000</span>
                  <span class="campaign-card__price-current">¥8,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_4.jpg" alt="ダイビングをしている人の画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">ファンダイビング</p>
                <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥20,000</span>
                  <span class="campaign-card__price-current">¥16,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_1.jpg" alt="水中にいる無数の魚の画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">ライセンス講習</p>
                <h3 class="campaign-card__title">ライセンス取得</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥56,000</span>
                  <span class="campaign-card__price-current">¥46,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_2.jpg" alt="浅瀬に浮かぶ船の画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">体験ダイビング</p>
                <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥24,000</span>
                  <span class="campaign-card__price-current">¥18,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_3.jpg" alt="水中を漂うクラゲの画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">体験ダイビング</p>
                <h3 class="campaign-card__title">ナイトダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥10,000</span>
                  <span class="campaign-card__price-current">¥8,000</span>
                </p>
              </div>
            </div>
          </div>
          <div class="campaign__item swiper-slide">
            <div class="campaign-card">
              <div class="campaign-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_4.jpg" alt="ダイビングをしている人の画像">
              </div>
              <div class="campaign-card__content">
                <p class="campaign-card__category">ファンダイビング</p>
                <h3 class="campaign-card__title">貸切ファンダイビング</h3>
                <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                <p class="campaign-card__price">
                  <span class="campaign-card__price-disabled">¥20,000</span>
                  <span class="campaign-card__price-current">¥16,000</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="campaign__btn">
        <a class="btn" href="archive-campaign.html">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </div>
  </section>
  <section class="about top-about">
    <div class="about__inner inner">
      <div class="about__title section-title">
        <p class="section-title__en">about&nbsp;us</p>
        <h2 class="section-title__ja">私たちについて</h2>
      </div>
      <div class="about__image">
        <img class="about__image-small" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about_1.jpg" alt="屋根の上のシーサーの置物の画像">
        <img class="about__image-big" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-about_2.jpg" alt="水中を漂う魚の画像">
      </div>
      <div class="about__content">
        <h3 class="about__head">
          <span class="about__initial">d</span>ive&nbsp;into&nbsp;
          <br>the
          <span class="about__initial">o</span>cean
        </h3>
        <div class="about__text-wrapper">
          <p class="about__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
          </p>
          <div class="about__btn">
            <a class="btn" href="page-about-us.html">
              <span class="btn__inner">view&nbsp;more </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="information top-information">
    <div class="inner">
      <div class="information__title section-title">
        <p class="section-title__en">information</p>
        <h2 class="section-title__ja">ダイビング情報</h2>
      </div>
      <div class="information__content-wrapper">
        <div class="information__image colorbox js-colorbox">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-info.jpg" alt="水中にいる無数の魚の画像">
        </div>
        <div class="information__content">
          <h3 class="information__head">ライセンス講習</h3>
          <p class="information__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。
            <br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
          </p>
          <div class="information__btn">
            <a class="btn" href="page-information.html">
              <span class="btn__inner">view&nbsp;more </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="blog top-blog">
    <div class="blog__inner inner">
      <div class="blog__title section-title">
        <p class="section-title__en section-title__en--white">blog</p>
        <h2 class="section-title__ja section-title__ja--white">ブログ</h2>
      </div>
      <div class="blog__card-wrapper blog-cards">
        <article class="blog-cards__item blog-card">
          <a href="single.html" class="blog-card__link">
            <div class="blog-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_1.jpg" alt="サンゴの画像">
            </div>
            <div class="blog-card__meta">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">ライセンス取得</h3>
            </div>
            <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            </p>
          </a>
        </article>
        <article class="blog-cards__item blog-card">
          <a href="single.html" class="blog-card__link">
            <div class="blog-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_2.jpg" alt="ウミガメの画像">
            </div>
            <div class="blog-card__meta">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
            </div>
            <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </a>
        </article>
        <article class="blog-cards__item blog-card">
          <a href="single.html" class="blog-card__link">
            <div class="blog-card__image">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_3.jpg" alt="イソギンチャクに隠れている魚の画像">
            </div>
            <div class="blog-card__meta">
              <time class="blog-card__date" datetime="2023-11-17">2023.11/17</time>
              <h3 class="blog-card__title">カクレクマノミ</h3>
            </div>
            <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
              <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
            </p>
          </a>
        </article>
      </div>
      <div class="blog__btn">
        <a class="btn" href="home.html">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </div>
  </section>
  <section class="voice top-voice icon-fish icon-fish--voice">
    <div class="voice__inner inner">
      <div class="voice__title section-title">
        <p class="section-title__en">voice</p>
        <h2 class="section-title__ja">お客様の声</h2>
      </div>
      <div class="voice__card-wrapper voice-cards">
        <article class="voice-cards__item voice-card">
          <div class="voice-card__head">
            <div class="voice-card__info">
              <div class="voice-card__inner">
                <p class="voice-card__age">20代(女性)</p>
                <p class="voice-card__category">ライセンス講習</p>
              </div>
              <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
            </div>
            <div class="voice-card__image colorbox js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_1.jpg" alt="女性の画像">
            </div>
          </div>
          <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </article>
        <article class="voice-cards__item voice-card">
          <div class="voice-card__head">
            <div class="voice-card__info">
              <div class="voice-card__inner">
                <p class="voice-card__age">30代(女性)</p>
                <p class="voice-card__category">ファンダイビング</p>
              </div>
              <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
            </div>
            <div class="voice-card__image colorbox js-colorbox">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_2.jpg" alt="男性の画像">
            </div>
          </div>
          <p class="voice-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
            <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
          </p>
        </article>
      </div>
      <div class="voice__btn">
        <a class="btn" href="archive-voice.html">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
    </div>
  </section>
  <section class="price top-price">
    <div class="inner">
      <div class="price__title section-title">
        <p class="section-title__en">price</p>
        <h2 class="section-title__ja">料金一覧</h2>
      </div>
      <div class="price__content">
        <div class="price__image colorbox js-colorbox">
          <picture>
            <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-pc.jpg">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="ウミガメの画像">
          </picture>
        </div>
        <div class="price__list-wrapper">
          <div class="price__list">
            <h3 class="price__list-title">ライセンス講習</h3>
            <dl class="price__list-item">
              <dt>オープンウォーターダイバーコース</dt>
              <dd>¥50,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>アドバンスドオープンウォーターコース</dt>
              <dd>¥60,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>レスキュー＋EFRコース</dt>
              <dd>¥70,000</dd>
            </dl>
          </div>
          <div class="price__list">
            <h3 class="price__list-title">体験ダイビング</h3>
            <dl class="price__list-item">
              <dt>ビーチ体験ダイビング(半日)</dt>
              <dd>¥7,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>ビーチ体験ダイビング(1日)</dt>
              <dd>¥14,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>ボート体験ダイビング(半日)</dt>
              <dd>¥10,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>ボート体験ダイビング(1日)</dt>
              <dd>¥18,000</dd>
            </dl>
          </div>
          <div class="price__list">
            <h3 class="price__list-title">ファンダイビング</h3>
            <dl class="price__list-item">
              <dt>ビーチダイビング(2ダイブ)</dt>
              <dd>¥14,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>ボートダイビング(2ダイブ)</dt>
              <dd>¥18,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>スペシャルダイビング(2ダイブ)</dt>
              <dd>¥24,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>ナイトダイビング(1ダイブ)</dt>
              <dd>¥10,000</dd>
            </dl>
          </div>
          <div class="price__list">
            <h3 class="price__list-title">スペシャルダイビング</h3>
            <dl class="price__list-item">
              <dt>貸切ダイビング(2ダイブ)</dt>
              <dd>¥24,000</dd>
            </dl>
            <dl class="price__list-item">
              <dt>1日ダイビング(3ダイブ)</dt>
              <dd>¥32,000</dd>
            </dl>
          </div>
        </div>
      </div>
      <div class="price__btn">
        <a class="btn" href="page-price.html">
          <span class="btn__inner">view&nbsp;more </span>
        </a>
      </div>
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
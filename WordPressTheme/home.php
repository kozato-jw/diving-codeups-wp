<?php get_header(); ?>
<main>
  <section class="mv-sub blog-mv">
    <h1 class="mv-sub__title">blog</h1>
    <picture>
      <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv_pc.jpg">
      <img class="mv-sub__image" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog-mv_sp.jpg" alt="海中を泳ぐ魚の画像">
    </picture>
  </section>
  <div class="breadcrumbs blog-breadcrumbs">
    <div class="breadcrumbs__inner inner">パンくずリストが入る</div>
  </div>
  <div class="blog-sub blog-sub-content icon-fish">
    <div class="blog-sub__inner inner">
      <div class="blog-sub__content">
        <div class="blog-sub__cards blog-cards blog-cards--sub">

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <!-- ループ開始 -->
              <article class="blog-cards__item blog-card">
                <a href="single.html" class="blog-card__link">
                  <div class="blog-card__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_1.jpg" alt="サンゴの画像">
                  </div>
                  <div class="blog-card__meta">
                    <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                    <h2 class="blog-card__title blog-card__title--sub"><?php the_title(); ?></h2>
                  </div>
                  <p class="blog-card__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    <br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                  </p>
                </a>
              </article>
              <!-- ループ終了 -->
          <?php endwhile;
          endif; ?>

        </div>
        <!-- Wp-PageNavi -->
        <div class="blog-sub__pagenav wp-pagenavi">
          <a class="previouspostslink" rel="prev" href=""></a>
          <span class="current">1</span>
          <a href="page larger">2</a>
          <a href="page larger">3</a>
          <a href="page larger">4</a>
          <a href="page larger" class="u-desktop">5</a>
          <a href="page larger" class="u-desktop">6</a>
          <a class="nextpostslink" rel="next" href=""></a>
        </div>
        <!-- Wp-PageNaviここまで -->
      </div>
      <aside class="blog-sub__sidebar sidebar">
        <div class="sidebar__inner">
          <section class="sidebar__content">
            <h2 class="sidebar__title sidebar__title--article">人気記事</h2>
            <div class="sidebar__blog-cards">
              <article class="sidebar__blog-card blog-card">
                <a href="single.html" class="blog-card__link blog-card__link--sidebar">
                  <div class="blog-card__image blog-card__image--sidebar">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_4.jpg" alt="黄色の熱帯魚の画像">
                  </div>
                  <div class="blog-card__meta">
                    <time class="blog-card__date blog-card__date--sidebar" datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title blog-card__title--sidebar">ライセンス取得</h3>
                  </div>
                </a>
              </article>
              <article class="sidebar__blog-card blog-card">
                <a href="single.html" class="blog-card__link blog-card__link--sidebar">
                  <div class="blog-card__image blog-card__image--sidebar">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_2.jpg" alt="ウミガメの画像">
                  </div>
                  <div class="blog-card__meta">
                    <time class="blog-card__date blog-card__date--sidebar" datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title blog-card__title--sidebar">ウミガメと泳ぐ</h3>
                  </div>
                </a>
              </article>
              <article class="sidebar__blog-card blog-card">
                <a href="single.html" class="blog-card__link blog-card__link--sidebar">
                  <div class="blog-card__image blog-card__image--sidebar">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_3.jpg" alt="カクレクマノミの画像">
                  </div>
                  <div class="blog-card__meta">
                    <time class="blog-card__date blog-card__date--sidebar" datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title blog-card__title--sidebar">カクレクマノミ</h3>
                  </div>
                </a>
              </article>
            </div>
          </section>
          <section class="sidebar__content">
            <h2 class="sidebar__title">口コミ</h2>
            <article class="sidebar__voice-card voice-card voice-card--sidebar">
              <div class="voice-card__head voice-card__head--sidebar">
                <div class="voice-card__info voice-card__info--sidebar">
                  <div class="voice-card__inner">
                    <p class="voice-card__age voice-card__age--sidebar">30代(カップル)</p>
                  </div>
                  <h3 class="voice-card__title voice-card__title--sidebar">ここにタイトルが入ります。ここにタイトル</h3>
                </div>
                <div class="voice-card__image voice-card__image--sidebar">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_3.jpg" alt="カップルが腕を組んでいる画像">
                </div>
              </div>
            </article>
            <div class="sidebar__btn">
              <a class="btn" href="archive-voice.html">
                <span class="btn__inner">view&nbsp;more </span>
              </a>
            </div>
          </section>
          <section class="sidebar__content">
            <h2 class="sidebar__title sidebar__title--campaign">キャンペーン</h2>
            <div class="sidebar__campaign-cards">
              <div class="sidebar__campaign-card campaign-card">
                <div class="campaign-card__image campaign-card__image--sidebar">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_1.jpg" alt="">
                </div>
                <div class="campaign-card__content campaign-card__content--sidebar">
                  <h3 class="campaign-card__title campaign-card__title--sidebar">ライセンス取得</h3>
                  <p class="campaign-card__text campaign-card__text--sidebar">全部コミコミ(お一人様)</p>
                  <p class="campaign-card__price campaign-card__price--sidebar">
                    <span class="campaign-card__price-disabled campaign-card__price-disabled--sidebar">¥56,000</span>
                    <span class="campaign-card__price-current campaign-card__price-current--sidebar">¥46,000</span>
                  </p>
                </div>
              </div>
              <div class="sidebar__campaign-card campaign-card">
                <div class="campaign-card__image campaign-card__image--sidebar">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign_2.jpg" alt="">
                </div>
                <div class="campaign-card__content campaign-card__content--sidebar">
                  <h3 class="campaign-card__title campaign-card__title--sidebar">貸切体験ダイビング</h3>
                  <p class="campaign-card__text campaign-card__text--sidebar">全部コミコミ(お一人様)</p>
                  <p class="campaign-card__price campaign-card__price--sidebar">
                    <span class="campaign-card__price-disabled campaign-card__price-disabled--sidebar">¥24,000</span>
                    <span class="campaign-card__price-current campaign-card__price-current--sidebar">¥18,000</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="sidebar__btn">
              <a class="btn" href="archive-campaign.html">
                <span class="btn__inner">view&nbsp;more </span>
              </a>
            </div>
          </section>
          <section class="sidebar__content">
            <h2 class="sidebar__title">アーカイブ</h2>
            <ol class="sidebar__archive-lists">
              <li class="sidebar__archive-list js-open">
                <a class="sidebar__archive-year" href="#">2023</a>
                <ol class="sidebar__archive-months">
                  <li class="sidebar__archive-month">
                    <a href="single.html">3月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">2月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">1月</a>
                  </li>
                </ol>
              </li>
              <li class="sidebar__archive-list">
                <a class="sidebar__archive-year" href="#">2022</a>
                <ol class="sidebar__archive-months">
                  <li class="sidebar__archive-month">
                    <a href="single.html">12月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">11月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">10月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">9月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">8月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">7月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">6月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">5月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">4月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">3月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">2月</a>
                  </li>
                  <li class="sidebar__archive-month">
                    <a href="single.html">1月</a>
                  </li>
                </ol>
              </li>
            </ol>
          </section>
        </div>
      </aside>
    </div>

  </div>
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
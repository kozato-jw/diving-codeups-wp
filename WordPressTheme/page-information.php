<?php get_header(); ?>
  <main>
    <section class="mv-sub information-mv">
      <h1 class="mv-sub__title">information</h1>
      <picture>
        <source media="(min-width:768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv_pc.jpg">
        <img class="mv-sub__image" src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-mv_sp.jpg" alt="海中を泳ぐ魚の画像">
      </picture>
    </section>
    <div class="breadcrumbs information-breadcrumbs">
      <div class="breadcrumbs__inner inner">パンくずリストが入る</div>
    </div>
    <section class="information-sub information-sub-content icon-fish icon-fish--information">
      <div class="inner">
        <div class="information-sub__tab tab">
          <!-- タブボタンの href を #tab- プレフィックスに変更 -->
          <a href="#tab-license" class="tab__btn active">ライセンス<br class="u-mobile">講習</a>
          <a href="#tab-fundiving" class="tab__btn">ファン<br class="u-mobile">ダイビング</a>
          <a href="#tab-trialdiving" class="tab__btn">体験<br class="u-mobile">ダイビング</a>
        </div>
    
        <div class="information-sub__cards">
          <!-- カードの id を #tab- プレフィックスに変更 -->
          <div id="tab-license" class="information-sub__card information-card">
            <div class="information-card__inner">
              <div class="information-card__text-wrapper">
                <h2 class="information-card__title">ライセンス講習</h2>
                <p class="information-card__text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </p>
              </div>
              <div class="information-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-license.jpg" alt="ダイビングをしている人の画像">
              </div>
            </div>
          </div>
    
          <div id="tab-fundiving" class="information-sub__card information-card">
            <div class="information-card__inner">
              <div class="information-card__text-wrapper">
                <h2 class="information-card__title">ファンダイビング</h2>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <div class="information-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-diving.jpg" alt="海中で無数の小魚が泳いでいる画像">
              </div>
            </div>
          </div>
    
          <div id="tab-trialdiving" class="information-sub__card information-card">
            <div class="information-card__inner">
              <div class="information-card__text-wrapper">
                <h2 class="information-card__title">体験ダイビング</h2>
                <p class="information-card__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </p>
              </div>
              <div class="information-card__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/info-experience.jpg" alt="海中を泳ぐ魚の画像">
              </div>
            </div>
          </div>
    
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
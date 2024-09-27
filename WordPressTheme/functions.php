<?php
// フォント、CSS、JavaScriptファイルを読み込む関数
function my_theme_enqueue_styles_and_scripts()
{
  // Google Fonts
  wp_enqueue_style(
    'google-fonts',
    'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@200..900&display=swap',
    array(),
    null
  );

  // Swiper CSS
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css',
    array(),
    null
  );

  // テーマのスタイルシート
  wp_enqueue_style(
    'theme-style',
    get_theme_file_uri('/assets/css/style.css'),
    array(),
    filemtime(get_theme_file_path('/assets/css/style.css'))
  );

  // jQuery
  wp_enqueue_script(
    'jquery',
    'https://code.jquery.com/jquery-3.7.1.js',
    array(),
    null,
    true
  );

  // Swiper JavaScript
  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js',
    array(),
    null,
    true
  );

  // jQuery Inview Plugin
  wp_enqueue_script(
    'jquery-inview',
    get_theme_file_uri('/assets/js/jquery.inview.min.js'),
    array('jquery'),
    filemtime(get_theme_file_path('/assets/js/jquery.inview.min.js')),
    true
  );

  // テーマのJavaScript
  wp_enqueue_script(
    'theme-script',
    get_theme_file_uri('/assets/js/script.js'),
    array('jquery'),
    filemtime(get_theme_file_path('/assets/js/script.js')),
    true
  );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles_and_scripts');

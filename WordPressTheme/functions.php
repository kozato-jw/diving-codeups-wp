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



function my_setup()
{
  add_theme_support('post-thumbnails'); /* アイキャッチ */
  add_theme_support('automatic-feed-links'); /* RSSフィード */
  add_theme_support('title-tag'); /* タイトルタグ自動生成 */
  add_theme_support(
    'html5',
    array( /* HTML5のタグで出力 */
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    )
  );
}
add_action('after_setup_theme', 'my_setup');

//キャンペーンページの表示件数変更
function change_posts_per_page_campaign($query)
{
  if (is_admin() || ! $query->is_main_query())
    return;
  if ($query->is_archive('campaign')) { //カスタム投稿タイプのスラッグを指定
    $query->set('posts_per_page', '4'); //表示件数を指定
  }
}
add_action('pre_get_posts', 'change_posts_per_page_campaign');

//ボイスページの表示件数変更
function change_posts_per_page_voice($query)
{
  if (is_admin() || ! $query->is_main_query())
    return;
  if ($query->is_archive('voice')) { //カスタム投稿タイプのスラッグを指定
    $query->set('posts_per_page', '6'); //表示件数を指定
  }
}
add_action('pre_get_posts', 'change_posts_per_page_voice');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false()
{
  return false;
}



// （ナビメニュー）グローバル変数の定義
global $home, $campaign, $aboutus, $information, $blog, $voice, $price, $faq, $contact, $privacy, $termsofservice, $sitemap;


$home = esc_url(home_url('/'));
$campaign = esc_url(home_url('/campaign/'));
$aboutus = esc_url(home_url('/about-us/'));
$information = esc_url(home_url('/information/'));
$blog = esc_url(home_url('/blog/'));
$voice = esc_url(home_url('/voice/'));
$price = esc_url(home_url('/price/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$privacy = esc_url(home_url('/privacypolicy/'));
$termsofservice = esc_url(home_url('/terms-of-service/'));
$sitemap = esc_url(home_url('/sitemap/'));


//投稿タイプのエディターを非表示
add_action('init', 'my_remove_post_support');
function my_remove_post_support()
{
  remove_post_type_support('campaign', 'editor');
  remove_post_type_support('voice', 'editor');
  remove_post_type_support('page', 'editor');
}

//通常投稿の名称変更
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'ブログ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'ブログ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

//カスタムメニュー
add_theme_support('menus');
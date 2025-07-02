<?php

// テーマ機能追加設定
function my_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_setup');


// CSS, JS読み込み
function my_enqueue_scripts() {
    wp_enqueue_style("ress", "https://unpkg.com/ress/dist/ress.min.css", array(), "all");
    wp_enqueue_style("main_style", get_template_directory_uri() . './css/style.css', array(), "all");
    wp_enqueue_style("style", get_stylesheet_uri(), array("ress"), "all");
    wp_enqueue_script("main", get_template_directory_uri() . './js/main.js', array(), null , true);
    // wp_enqueue_script('gsap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/gsap.min.js", array(), '3.13.0', true);
    // wp_enqueue_script('scrolltrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.13.0/ScrollTrigger.min.js", array(), "3.13.0", true);
    wp_enqueue_script('anime', get_template_directory_uri() . './js/anime.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// カスタムメニュー
function register_my_menus() {
    register_nav_menus(array(
        'header-menu' => 'ヘッダーメニュー',
        'footer-menu' => 'フッターメニュー'
    ));
}
add_action('after_setup_theme', 'register_my_menus');

// ページネーション
function my_custom_pagination($query = null) {
    global $wp_query;
    $query = $query ?: $wp_query; // カスタム投稿用の投稿ページかどうかを判断
    
    $total_pages = $query->max_num_pages;
    $current_page = max(1, get_query_var('paged'));
    
    if($total_pages > 1) {
        echo '<nav class="pagination">';
        echo '<ul class="pagination__list">';

        // Prev
        // if($current_page > 1) {
        //     echo '<li class="pagination__item"><a class="pagination__link" href="' . esc_url(get_pagenum_link($current_page - 1)) . '">前へ</a></li>';
        // }
        // Page numbers
        for($i = 1; $i <= $total_pages; $i++){
            if($i === $current_page){
                echo '<li class="pagination__item"><span class="pagination__link is-current">' . esc_html($i) .'</span></li>';
            } else {
                echo '<li class="pagination__item"><a class="pagination__link" href="' . esc_url(get_pagenum_link($i)) . '">'. esc_html($i) . '</a></li>';
            }
        }
    echo '</ul>';
    echo '</nav>';
    }
}
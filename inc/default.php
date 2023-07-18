<?php

// +++=== Dynamically Get ===+++
function market_theme_support(){
    // === Adds Dynamic Title Tag Support ===
    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('custom-background');

    //image
    add_theme_support('post-thumbnails', array('page', 'post', 'service'));
    add_image_size( 'post-thumbnails', 442, 321, true);

    add_theme_support('comments');

}
add_action('after_setup_theme','market_theme_support');

// +++=== Except More ===+++
function market_theme_excerpt_more(){
    
    return '<a class="' . 'read_more' . '" href="' . esc_url(get_permalink()) .'">' . 'Read More' . '</a>';
}
add_filter( 'excerpt_more', 'market_theme_excerpt_more' );

// +++=== Except Word Length ===+++
function market_theme_excerpt_length(){
    return 20;
}
add_filter( 'excerpt_length', 'market_theme_excerpt_length', 999 );

// +++=== Pagenav Function ===+++
function market_theme_pagination () {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if(!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $args['prev_text'] = 'Prev';
    $args['next_text'] = 'Next';
    if($max > 1) echo '<pre> 
        <div class="wp_pagenav">'; 
        if($total == 1 && $max > 1) $pages = '<p class="pages"> Page'. $current . '<span>of</span>' .  $max . '</p>';
        echo $pages . paginate_links( $args );
        if($max > 1) echo '</div></pre>';
}
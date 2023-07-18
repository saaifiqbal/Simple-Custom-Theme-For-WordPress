<?php
function market_theme_widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="footer_css">',
            'after_widget' => '</div>',
            'name' => 'Footer Content 1',
            'id' => __('footer-1', 'fort'),
            'description' => 'Footer Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="footer_css">',
            'after_widget' => '</div>',
            'name' => 'Footer Content 2',
            'id' => __('footer-2', 'fort'),
            'description' => 'Footer Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="footer_css">',
            'after_widget' => '</div>',
            'name' => 'Footer Content 3',
            'id' => __('footer-3', 'fort'),
            'description' => 'Footer Widget Area'
        )
    );
    register_sidebar(
        array(
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '<div class="sidebar_css">',
            'after_widget' => '</div>',
            'name' => __('Sidebar Area', 'fort'),
            'id' => 'sidebar-1',
            'description' => 'Add single post sidebar'
        )
    ); 
}
add_action('widgets_init', 'market_theme_widget_areas');

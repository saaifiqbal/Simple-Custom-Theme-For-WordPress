<?php
function market_theme_menu () {
    $locations = array(
        'primary' => 'Desktop Primary Menu',
        'footer' => 'Footer Menu Items'
    );
    register_nav_menus($locations);
}
add_action('init', 'market_theme_menu');
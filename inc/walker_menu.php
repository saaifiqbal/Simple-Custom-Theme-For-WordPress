<?php

function market_theme_description( $item_output, $item, $args){
    if(!empty($item->description)) {
        $item_output = str_replace($args->link_after . '</a>', '<span class="walker_nav">' . $item->description . '</span>' . $args->link_after .  '</a>', $item_output);
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'market_theme_description' , 10, 3 );
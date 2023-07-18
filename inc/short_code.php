<?php

//basic Shortcode
function basic_shortcoder() {
    return 'Hello World!';
}
add_shortcode( 'test_custom', 'basic_shortcoder' );

//button_shortcode
function button_shortcoder($atts, $content = null) {
    $values = shortcode_atts(array (
        'url' => '#',
    ), $atts);
    return '<a class="button" href="'.esc_attr( $values['url'] ).'">' .$content . '</a>';
}
add_shortcode('button_code','button_shortcoder');

//short code and custom post 
function service_shortcode ($atts) {
    ob_start();
    $query = new WP_Query( array(
        'post_type' => 'service',
        'posts_per_page' => 3,
        'order' => 'ASC',
        'orderby' => 'title',
        ) 
    ); 
    if ($query->have_posts()) :
        ?>
        <div class="wedo">
             <div class="wedo_white">
                <div class="container-fluid">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="titlepage text_align_center ">
                            <h2>What We Do. </h2>
                            <p>that it has a more-or-less normal distribution of letters, as </p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="container-fluid">
                <div class="row">
                   <div class="col-lg-10 offset-lg-1 col-md-12">
                      <div class="ma_top">
                         <div class="row">
                            <?php 
                                while ($query->have_posts()) : $query->the_post();
                            ?>
                            <div class="col-md-4">
                               <div class="web_box left0 text_align_center">
                                  <i><img src="<?php the_post_thumbnail_url('small'); ?>" alt="#"/></i>
                                  <h3><?php the_title() ?></h3>
                                  <p> <?php the_excerpt()?></p>
                               </div>
                            </div>
                            <?php
                                endwhile; wp_reset_postdata();
                            
                            ?>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
    </div>
    <?php
    endif; wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode( 'custom_service', 'service_shortcode' );
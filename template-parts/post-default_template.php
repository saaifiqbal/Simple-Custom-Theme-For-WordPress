<?php
/*
 * Template Name: Default Template
 * Template Post Type: page
 */

?>
<div class="work">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text-center">
                    <h2 >Blogs</h2>
                    <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                    <div class="row d_flex mt-4">
                        <?php
                        if(have_posts()) {
                            while(have_posts()){
                                the_post();
                                get_template_part( 'template-parts/content', 'post_list_template');
                            }

                        }
                        the_posts_pagination();
                        wp_reset_postdata(); // Reset the post data to restore the main query
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

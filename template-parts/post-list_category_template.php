<?php
/*
 * Template Name: Blog With Categories Template
 * Template Post Type: page
 */
$cat=get_categories(array('taxonomy'=> 'category'));
?>

<div class="work">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <?php
                if ($cat) {
                    foreach ($cat as $cat_val) {
                        ?>
                        <div class="titlepage ">
                            <!-- Category Header Area -->
                            <a href="<?php echo get_category_link($cat_val->term_id) ?>">
                                <h3 style="font-size: 40px"><?php echo $cat_val->name ?> (<?php echo $cat_val->count ?>)</h3>
                            </a>
                            <p><?php echo $cat_val->slug ?></p>
                            <div class="row d_flex mt-4">
                            <?php
                            $args = array(
                                'cat' => $cat_val->term_id, // Set the category ID to retrieve posts from
                                'posts_per_page' => -1, // Set the number of posts to display (-1 for all posts)
                            );
                            $query = new WP_Query($args); // Create a new query object
                            if ($query->have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('template-parts/content', 'post_list_template');
                                }
                            }
                            wp_reset_postdata(); // Reset the post data to restore the main query
                            ?>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

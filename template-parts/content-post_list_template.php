
<div class=" col-md-6">
    <div id="ho_img" class="work_img ">
        <figure >

            <!-- Get Thumbnails URL  -->
            <!-- <img class="thumbnail_image" src="<?php //the_post_thumbnail_url('medium'); ?>" alt="#"/> -->

            <?php echo the_post_thumbnail( 'post-thumbnails')?>
        </figure>
    </div>
    <div class="work_box">
        <!-- Post Header Title  -->
        <h3>
            <a href="<?php the_permalink() ?>">
                <?php the_title() ?>
            </a>
        </h3>

        <!-- Post Date && other -->
        <div class="meta mb-1">
            <span class="date">
                <?php the_time( 'G:i a' ); ?>,
                <?php the_time( 'F j, Y' ); ?>
                <?php //the_date(); ?>
            </span>
            <span class="time">

            </span>
            <span class="comment">
                <a href="#">
                    <?php comments_number() ?>
                </a>
            </span>
        </div>
        <?php
        the_excerpt();
        if (!is_sticky()) {
            echo '<a class="read_more" href="' . esc_url(get_permalink()) . '">Read More</a>';
        }
        ?>
        <!-- <a class="read_more" href="<?php //the_permalink()?>">Read More</a> -->
    </div>
</div>
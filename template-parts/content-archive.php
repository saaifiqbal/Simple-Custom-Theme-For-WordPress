<div class=" col-md-6">
    <div id="ho_img" class="work_img ">
        <figure ><img class="thumbnail_image" src="<?php the_post_thumbnail_url('medium'); ?>" alt="#"/></figure>
    </div>
    <div class="work_box">
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
        <div class="meta mb-1"><span class="date">
                    <?php the_date(); ?>
                </span><span class="time"></span><span class="comment"><a href="#"><?php comments_number() ?></a></span></div>
        <?php
        the_excerpt();
        ?>
        <a class="read_more" href="<?php the_permalink()?>">Read More</a>
    </div>
</div>
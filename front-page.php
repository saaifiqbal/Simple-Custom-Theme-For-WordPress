<?php
get_header();
?>

    <article class="content py-5 ">
        <?php
        // if(have_posts()) {
        //     while(have_posts()){
        //         the_post();
                
        //     }
        // }
        get_template_part( 'template-parts/content', 'front_page');
        ?>
    </article>

<?php
get_footer();
?>
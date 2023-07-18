<?php
    get_header();
?>

<?php
//            if(have_posts()) {
//                while(have_posts()){
//                    the_post();
//                    get_template_part( 'template-parts/content', 'post_list_template');
//                }
//
//            }
//            the_posts_pagination();
get_template_part( 'template-parts/post', 'list_category_template');



?>
<!--<div class="work">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="titlepage text_align_center ">
                    <h2>Our blog</h2>
                    <p>that it has a more-or-less normal distribution of letters, as </p>
                </div>
            </div>
        </div>
        <div class="row d_flex">

        </div>
    </div>
</div>-->

<?php
    get_footer();
?>

<?php
get_header();
?>

<article class="content px-3 py-5 p-md-5 container-width">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage text_align_center ">
                <h2>
                    <?php
                        if (is_category()) {
                            // $category = get_queried_object();
                            $category_name = single_cat_title('', false);
                            echo  $category_name;
                        }
                    ?>
                </h2>
            </div>
        </div>
        <?php
            if(have_posts()) {
                while(have_posts()){
                    the_post();
                    get_template_part( 'template-parts/content', 'archive');
                }
            }
        ?>
    </div>
    
</article>


<?php
get_footer();
?>


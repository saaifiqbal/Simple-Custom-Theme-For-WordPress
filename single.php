<?php
get_header();
?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <?php
            if(have_posts()) {
                while(have_posts()){
                    the_post();
                    get_template_part( 'template-parts/content', 'article');
                }
            }
            ?>
        </div>

        <div class="col-md-4" >
            <div class="card">
                <div class="card-body">
                    <?php
                    get_template_part( 'template-parts/content', 'right_sidebar_post');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>


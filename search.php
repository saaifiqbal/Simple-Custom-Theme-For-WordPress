<?php
get_header();
?>

<article class="content px-3 py-5 p-md-5 container-width">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage text_align_center ">
                <h2>
                     <?php 
                        printf(__('Search Results for: %s', 'fort'), get_search_query());
                    ?>
                </h2>
            </div>
        </div>
        <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('template-parts/content', 'archive');
                }
            } else {
                ?>
                    <div class="container text-center">
                        <h1 class="mb-4">Searched Post Not Found</h1>
                        <div class="mt-5">
                            <i class="fa fa-exclamation-circle error-icon"></i>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>
</article>

<?php
get_footer();
?>

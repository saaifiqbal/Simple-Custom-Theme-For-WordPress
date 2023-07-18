<article>

    <h2 ><?php the_title() ?></h2>
    <p class="text-muted">
        <div class="text-secondary " size="10px">
        <?php
            the_date();
        ?>
        </div>

        <?php
        the_tags('<span class="tag"><i class="fa fa-tag"></i> ', '' ,'</span>')
        ?>
    </p>
    <div style="text-align: justify;">
        <?php
        the_content();
        ?>
    </div>
    <?php
    comments_template();
    ?>
</article>
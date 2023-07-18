<!--  footer -->
<footer>
    <?php //dynamic_sidebar('footer-1') ?>
    <div class="footer">
        <section class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-1')?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-2')?>
                </div>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer-3')?>
                </div>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <?php 
                                echo esc_html(get_theme_mod('market_theme_footer_copyright')); 
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</footer>
<!-- end footer -->
<?php
wp_footer();
?>
<!-- Javascript files-->
<!--<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>-->
</body>
</html>


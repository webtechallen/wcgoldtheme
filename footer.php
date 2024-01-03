<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- Footer widget area (if applicable) -->
                <?php if (is_active_sidebar('footer-widget-area')) : ?>
                    <div class="footer-widget">
                        <?php dynamic_sidebar('footer-widget-area'); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <!-- Footer navigation or additional content -->
                <nav class="footer-nav">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'menu_class' => 'footer-menu-class'
                    ));
                    ?>
                </nav>
                <p>&copy; <?php echo date('Y'); ?> Your Website Name. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>







<?php wp_footer();?>

</body>
</html>
<footer class="footer">
    <div class="footer__inner">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => 'nav',
                'container_class' => 'footer__nav',
                'menu_class' => 'footer__nav-list',
            ));
        ?>
        <small class="footer__copyright">
            &copy;<?php echo date('Y'); ?>
            <?php bloginfo('name'); ?>
        </small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
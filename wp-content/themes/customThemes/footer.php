

<footer>
    <div class="container">
    <!-- list menu -->
    <?php 
        wp_nav_menu(
            array(
                'theme_location' => 'footer-bar',
                'menu_class' => 'footer-bar',
            )
        );
    ?>
    <!-- end list menu -->
    </div>
</footer>

<?php wp_footer();?>
</body>
</html>
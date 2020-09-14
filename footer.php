<footer id="sticky-footer" class="py-4 text-white-50">
    <div class="container text-center">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer-bar'
                )
            );
        ?>
        <small>Copyright &copy; Your Website</small>
    </div>
        
</footer>

<?php wp_footer(  );?>
</body>
</html>
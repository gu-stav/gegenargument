<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <nav class="footer__navigation">
          <?php
          if (has_nav_menu('footer_navigation')) :
            wp_nav_menu([
              'theme_location' => 'footer_navigation',
              'menu_class' => 'footer__navigation-list',
              'container' => false,
            ]);
          endif;
          ?>
        </nav>
    </div>
  </div>
</footer>

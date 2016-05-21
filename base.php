<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="app"
         role="document">
      <main class="main">
        <div class="container">
          <?php include Wrapper\template_path(); ?>
        </div>
      </main><!-- /.main -->
    </div><!-- /.wrap -->
    <?php
      wp_footer();
    ?>
  </body>
</html>

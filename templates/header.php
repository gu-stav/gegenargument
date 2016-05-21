<header class="header">

  <?php if(is_front_page()): ?>
    <div class="header__slider">
      <div class="slider">

        <button class="slider__control slider__control--previous visuallyhidden">
          <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" fill="#fff"/></svg>

          <span class="visuallyhidden">
            <?php _e('Previous Slide', 'sage'); ?>
          </span>
        </button>

        <?php
        $args = array('posts_per_page' => 5,
                      'post_type' => 'header',
        );

        $header_posts = get_posts($args);
        foreach ($header_posts as $post):
          setup_postdata($post);
          $color = get_post_meta($post->ID, 'color');
        ?>
          <div class="slider__slide"
              style="background-color: <?= $color[0]; ?>;">
            <div class="slider__content">
              <strong class="slider__title">
                <span class="slider__start-arrow"></span>
                <?php the_title() ?>
                <span class="slider__end-arrow"></span>
              </strong>
            </div>
          </div>
        <?php
          endforeach;
          wp_reset_postdata();
        ?>

        <button class="slider__control slider__control--next visuallyhidden">
          <span class="visuallyhidden">
            <?php _e('Next Slide', 'sage'); ?>
          </span>

          <svg width="1792" height="1792" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" fill="#fff"/></svg>
        </button>

      </div>
    </div>
  <?php endif; ?>

  <div class="header__navigation">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-2">
          <a class="logo"
             href="<?= esc_url(home_url('/')); ?>">
            <svg class="logo__image" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="181.676" height="21.544" viewBox="0 0 181.676 21.544" xml:space="preserve">
              <title><?php bloginfo('name'); ?></title>
              <path fill="#FFF" d="M76.563 11.917h1.761l-.881-3.053-.88 3.053zm12.582-2.721c0-.592-.365-.926-1.049-.926h-.502v1.883h.502c.684 0 1.049-.409 1.049-.957m73.844-.819h-2.201v7.986h-3.021V8.377h-2.171v-2.64h7.393v2.64zm-9.449 7.986h-3.004l-3.509-5.935v5.935h-2.958V5.737h3.08l3.418 6.026V5.737h2.973v10.626zm-12.15 0h-6.071V5.737h5.95v2.64h-2.931v1.308h2.475v2.625h-2.475v1.412h3.052v2.641zm-8.999 0h-2.883V9.896l-2.051 5.63h-2.748l-2.035-5.63v6.466h-2.898V5.737h3.932l2.369 6.315 2.398-6.315h3.916v10.626zm-15.492-4.158c0 2.564-1.639 4.355-4.63 4.355s-4.629-1.791-4.629-4.355V5.737h3.019v6.483c0 .986.623 1.609 1.61 1.609.988 0 1.61-.623 1.61-1.609V5.737h3.02v6.468zm-11.77 2.703c-1.139.787-2.459 1.652-5.055 1.652-3.447 0-5.691-2.441-5.691-5.523 0-3.054 2.244-5.497 5.691-5.497 2.475 0 3.871 1.229 4.447 1.927l-1.913 1.944c-.394-.456-1.062-1.11-2.383-1.11-1.61 0-2.687 1.186-2.687 2.736 0 1.576 1.123 2.762 2.793 2.762 1.184 0 1.807-.318 2.035-.502v-.592h-1.717v-2.473h4.479v4.676zm-14.3-3.008l2.428 4.463h-3.323l-1.792-3.75h-.548v3.75h-3.019V5.737h3.749c2.642 0 3.901 1.274 3.901 3.354 0 1.138-.485 2.231-1.396 2.809m-8.118 4.463h-3.036l-.638-2.033h-3.188l-.638 2.033h-3.036l3.674-10.625h3.188l3.674 10.625zm-12.4 0h-3.004l-3.509-5.935v5.935H60.84V5.737h3.08l3.418 6.026V5.737h2.973v10.626zm-12.15 0H52.09V5.737h5.95v2.64h-2.93v1.308h2.474v2.625H55.11v1.412h3.051v2.641zm-8.697-1.455c-1.139.787-2.46 1.652-5.056 1.652-3.446 0-5.691-2.441-5.691-5.523 0-3.054 2.245-5.497 5.691-5.497 2.475 0 3.871 1.229 4.448 1.927l-1.913 1.944c-.394-.456-1.062-1.11-2.383-1.11-1.61 0-2.687 1.186-2.687 2.736 0 1.576 1.123 2.762 2.793 2.762 1.184 0 1.807-.318 2.034-.502v-.592h-1.715v-2.473h4.479v4.676zm-12.697 1.455h-6.071V5.737h5.949v2.64h-2.93v1.308h2.475v2.625h-2.475v1.412h3.052v2.641zm-8.698-1.455c-1.138.787-2.459 1.652-5.055 1.652-3.446 0-5.692-2.441-5.692-5.523 0-3.054 2.246-5.497 5.692-5.497 2.474 0 3.871 1.229 4.448 1.927l-1.913 1.944c-.395-.456-1.063-1.11-2.384-1.11-1.609 0-2.687 1.186-2.687 2.736 0 1.576 1.124 2.762 2.794 2.762 1.184 0 1.806-.318 2.034-.502v-.592H23.59v-2.473h4.479v4.676zm153.607-4.137L169.943 0H11.702L0 10.771l10.787 10.773h159.81l11.079-10.773z"/></svg>
          </a>

          <button class="navigation__toggle">
            <span class="navigation__toggle-label">
              <?php _e('Menu', 'sage'); ?>
            </span>
            <svg class="navigation__burger"
                 width="1792"
                 height="1792"
                 viewBox="0 0 1792 1792"
                 xmlns="http://www.w3.org/2000/svg">
              <path d="M1664 1344v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19h-1408q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45z" fill="#fff"/>
            </svg>
          </button>

          <nav class="navigation js-module"
               data-module="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu([
                'theme_location' => 'primary_navigation',
                'menu_class' => 'navigation__list',
                'container' => false,
                'walker' => new Colored_Menu(),
              ]);
            endif;
            ?>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>

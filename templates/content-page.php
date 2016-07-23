<?php use Roots\Sage\Titles; ?>

<article class="page">
  <?php if(!is_front_page()): ?>
    <div class="row">
      <div class="col col-sm-8 col-sm-offset-2">
        <div class="page__header">
          <h1 class="page__header-title"
              style="background-color: <?= Titles\color(); ?>">
            <?= Titles\title(); ?>
          </h1>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="page__content">
    <div class="row">
      <div class="col col-sm-8 col-sm-offset-2">
        <div class="content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</article>

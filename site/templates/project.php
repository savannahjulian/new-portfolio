<? snippet('header') ?>

<main>
  <section class="project <?= $page->lightness() ?>" style="background-color: <?= $page->color() ?>;">
    <div class="wrapper">
      <div class="column full">
        <? if ( !$page->hide_description()->bool() ) { ?>
          <h2><?= $page->title()->html() ?></h2>
        <? } ?>
        <?= $page->text()->kirbytext() ?>
      </div>
    </div>
    <div class="wrapper">
      <div class="column full project-images">
        <? snippet('carousel', ['images' => $images]) ?>
      </div>
    </div>
    <div class="wrapper centered-layout">
      <div class="column quarter center">
        <span class="carousel-prev">Prev</span>
        <span class="carousel-next">Next</span>
      </div>
    </div>
  </section>
  <? snippet('project-navigation') ?>
  <? snippet('project-list') ?>
  <? snippet('about') ?>
</main>

<? snippet('footer') ?>

<? snippet('header') ?>

<main>
  <section class="project">
    <div class="column full">
      <h2><?= $page->title()->html() ?></h2>
      <?= $page->text()->kirbytext() ?>
      <? foreach ( $page->images() as $image ) { ?>
        <div class="image">
          <?= html::img($image->url(), ['alt' => $image->title()]) ?>
        </div>
      <? } ?>
    </div>
  </section>
  <? snippet('project-list') ?>
  <? snippet('about') ?>
</main>

<? snippet('footer') ?>
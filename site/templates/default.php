<? snippet('header') ?>

<main>
  <h2><?= $page->title()->html() ?></h2>
  <?= $page->text()->kirbytext() ?>
</main>

<? snippet('footer') ?>
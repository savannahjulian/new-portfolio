<? snippet('header') ?>

<main>
  <section class="projects">
    <div class="column full">
      <h2><?= $page->title()->html() ?></h2>
    </div>
  </section>
  <? snippet('project-list') ?>
  <? snippet('about') ?>
</main>

<? snippet('footer') ?>
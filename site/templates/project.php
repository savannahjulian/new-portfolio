<? snippet('header') ?>

<main>
  <section class="project <?= $page->lightness() ?>" style="background-color: <?= $page->color() ?>;">
    <div class="wrapper">
      <div class="column full">
        <h2><?= $page->title()->html() ?></h2>
        <?= $page->text()->kirbytext() ?>
        <? foreach ( $images as $image ) { ?>
          <div class="image">
            <figure>
              <?= html::img($image->url(), ['alt' => $image->title()]) ?>
              <figcaption>
                <h5><?= $image->title()->html() ?></h5>
                <?= $image->caption()->kirbytext() ?>
              </figcaption>
            </figure>
          </div>
        <? } ?>
      </div>
    </div>
  </section>
  <section class="project-navigation">
    <div class="wrapper">
      <div class="column half">
        <? if ( $page->hasPrev() ) { ?>
          &larr; <?= html::a($page->prevVisible()->url(), $page->prevVisible()->title()) ?>
        <? } ?>
      </div>
      <div class="column half text-right">
        <? if ( $page->hasNext() ) { ?>
          <?= html::a($page->nextVisible()->url(), $page->nextVisible()->title()) ?> &rarr;
        <? } ?>
      </div>
    </div>
  </section>
  <? snippet('project-list') ?>
  <? snippet('about') ?>
</main>

<? snippet('footer') ?>
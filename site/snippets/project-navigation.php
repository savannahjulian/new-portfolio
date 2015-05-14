<section class="project-navigation">
  <div class="wrapper">
    <div class="column half">
      <? if ( $page->hasPrev() ) { ?>
        <a class="previous" href="<?= $page->prevVisible()->url() ?>">
          <span class="arrow">&larr;</span>
          <span class="project-title"><?= $page->prevVisible()->title() ?></span>
        </a>
      <? } ?>
    </div>
    <div class="column half text-right">
      <? if ( $page->hasNext() ) { ?>
        <a class="previous" href="<?= $page->nextVisible()->url() ?>">
          <span class="project-title"><?= $page->nextVisible()->title() ?></span>
          <span class="arrow">&rarr;</span>
        </a>
      <? } ?>
    </div>
  </div>
</section>

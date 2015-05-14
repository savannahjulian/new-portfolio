<ul class="slides">
  <? foreach ( $images as $image ) { ?>
    <li class="image">
      <figure>
        <?= html::img($image->url(), ['alt' => $image->title()]) ?>
        <figcaption>
          <h5><?= $image->title()->html() ?></h5>
          <?= $image->caption()->kirbytext() ?>
        </figcaption>
      </figure>
    </li>
  <? } ?>
</ul>

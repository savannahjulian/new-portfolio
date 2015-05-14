<section class="about">
  <div class="wrapper">
    <div class="column half statement">
      <?= $site->artist_statement()->kirbytext() ?>
    </div>
    <div class="column quarter">
      <div class="experience">
        <h5>Experience.</h5>
        <ul>
          <? foreach ( $site->experience()->yaml() as $position ) { ?>
            <li>
              <h6><?= html::a($position['link'], $position['name'], ['target' => '_blank']) ?></h6>
              <span><?= $position['notes'] ?></span>
          <? } ?>
        </ul>
      </div>
      <div class="elsewhere">
        <h5>Elsewhere.</h5>
        <ul>
          <? foreach ( $site->elsewhere()->yaml() as $link ) { ?>
            <li><?= html::a($link['link'], $link['name']) ?></li>
          <? } ?>
        </ul>
      </div>
    </div>
    <div class="column quarter">
      <div class="skills">
        <h5>Skills.</h5>
        <?= $site->skills()->kirbytext() ?>
      </div> 
    </div>
  </div>
</section>

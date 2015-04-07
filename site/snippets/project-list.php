<section class="project-list">
  <div class="wrapper">
    <? foreach ( page('projects')->children()->visible() as $project ) { ?>
      <div class="column third project">
        <?= html::a($project->url(), $project->cover()) ?>
      </div>
    <? } ?>
  </div>
</section>
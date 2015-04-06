<section class="project-list">
  <? foreach ( page('projects')->children()->visible() as $project ) { ?>
    <div class="column third project">
      <?= html::a($project->url(), $project->cover()) ?>
    </div>
  <? } ?>
</section>
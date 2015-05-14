<section class="project-list">
  <div class="wrapper">
    <? foreach ( SLJ::projects_into_groups(4) as $project_group ) { ?>
      <div class="column <?= SLJ::parts_of_whole(4) ?> project">
        <? foreach ($project_group as $project ) { ?>
          <? if ( $project->cover() ) { ?>
            <div class="thumbnail"><?= html::a($project->url(), html::img($project->cover()->url())) ?></div>
          <? } else { ?>
            <?= $project->title()->html() ?>
          <? } ?>
        <? } ?>
      </div>
    <? } ?>
  </div>
</section>
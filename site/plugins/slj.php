<? class SLJ {
  public static function projects_into_groups ($num = 4) {
    $projects = page('projects')->children()->visible();
    $projects_per_group = ceil($projects->count() / $num);
    return array_chunk($projects->toArray(), $projects_per_group);
  }

  public static function parts_of_whole ($num = null) {
    $parts = [
      1 => 'full',
      2 => 'half',
      3 => 'third',
      4 => 'quarter',
      5 => 'fifth',
      6 => 'sixth'
    ];
    return ($num ? $parts[$num] : 'full');
  }
}
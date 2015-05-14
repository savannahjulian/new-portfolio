<? class ProjectPage extends Page {
  public function cover () {
    if ( !$this->thumbnail()->empty() && $thumbnail = $this->imageFromField($this->thumbnail()) ) {
      return $thumbnail;
    } else if ( $this->hasImages() ) {
      return $this->images()->first();
    } else {
      return false;
    }
  }

  public function projectImages () {
    return $this->images()->not($this->cover()->filename())->sortBy('sort', 'asc');
  }
  
  public function imageFromField ($field = null) {
    if ( $field && $this->hasImages() ) {
      return $this->image($this->thumbnail());
    } else {
      return false;
    }
  }

  public function rgb_color () {
    $color = str_replace('#', '', $this->color()->toString());
    return [
      'red' => hexdec(substr($color, 0, 2)),
      'green' => hexdec(substr($color, 2, 2)),
      'blue' => hexdec(substr($color, 4, 2))
    ];
  }

  public function is_dark () {
    # sqrt(0.299 * R^2 + 0.587 * G^2 + 0.114 * B^2)
    $rgb = static::rgb_color();
    $lightness = sqrt(0.299 * pow($rgb['red'], 2) + 0.587 * pow($rgb['green'], 2) + 0.114 * pow($rgb['blue'], 2));
    return 200 > $lightness;
  }
  
  public function lightness () {
    return ( $this->is_dark() ? 'dark' : 'light');
  }
}
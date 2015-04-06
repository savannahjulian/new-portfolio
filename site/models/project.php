<? class ProjectPage extends Page {
  public function cover () {
    if ( !$this->thumbnail()->empty() && $thumbnail = $this->imageFromField($this->thumbnail()) ) {
      return html::img($thumbnail->url(), ['alt' => $thumbnail->title()]);
    } else if ( $this->hasImages() ) {
      return html::img($this->images()->first());
    } else {
      return "No Cover Image Found";
    }
  }
  
  public function imageFromField ($field = null) {
    if ( $field && $this->hasImages() ) {
      return $this->image($this->thumbnail());
    } else {
      return false;
    }
  }
}
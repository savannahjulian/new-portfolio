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
    return $this->images()->not($this->cover()->filename());
  }
  
  public function imageFromField ($field = null) {
    if ( $field && $this->hasImages() ) {
      return $this->image($this->thumbnail());
    } else {
      return false;
    }
  }
}
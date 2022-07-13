<?php

class Movie {
  public $title;
  public $director;
  public $screenwriter;
  public $year;
  public $budget;

  function __construct(string $_title, string $_director) {
    $this->title = $title;
    $this->director = $director;
  }
}

?>
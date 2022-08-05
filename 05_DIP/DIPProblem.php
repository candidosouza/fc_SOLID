<?php

class DramaCategory
{}

class Movie
{
  private $title;
  private $category;

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getCategory()
  {
    return new DramaCategory();
  }
}

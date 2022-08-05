<?php

interface Category
{
}

class DramaCategory implements Category
{
}

class ActionCategory implements Category
{
}

// $dramaMovie = new Movie("Title Drama", new DramaCategory());
// $actionMovie = new Movie("Title Action", new ActionCategory());

class Movie
{
  private $title;
  private $category;

  public function __construct($title, Category $category)
  {
    $this->title = $title;
    $this->category = $category;
  }

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
    return $this->category;
  }

  public function setCategory($category)
  {
    $this->category = $category;
  }
}

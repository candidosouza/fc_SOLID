<?php

abstract class Video
{
  abstract public function calculateInterest();
}

class Movie extends Video
{
  public function calculateInterest()
  {
    // calcula interesse baseado em filme
  }
}

class TVShow extends Video
{
  public function calculateInterest()
  {
    // calcula interesse baseado em séries
  }
}

class Music extends Video
{
  public function calculateInterest()
  {
    // calcula interesse baseado em schow
  }
}
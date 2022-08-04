<?php

class Video
{
  private $type;

  public function calculateInterest()
  {
    if ($this->type == 'Movie') {
      // calcula interesse baseado em filme
    } elseif ($this->type == 'TVShow') {
      // calcula interesse baseado em série
    } elseif ($this->type == 'Music') {
      // calcula interesse baseado em clips
    } // ...
  }
}

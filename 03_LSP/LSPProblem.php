<?php

class Movie
{
  public function play()
  {
    echo "Playing movie\n";
  }

  public function increseVolume()
  {
    echo "Increasing volume\n";
  }
}

class TheLionKink extends Movie
{
  public function play()
  {
    echo "Playing The LionKinks\n";
  }
}

// problema
// baseada em um filme mudo que não pode aumentar o volume
class ModernTimes extends Movie
{
  public function increseVolume()
  {
    echo "PUTZ\n";
  }
}

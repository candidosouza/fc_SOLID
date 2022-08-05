<?php

interface Movie
{
  public function play();
  public function increseVolume();
}

class TheLionKink implements Movie
{
  public function play()
  {
    echo "Playing The LionKinks\n";
  }

  public function increseVolume()
  {
    echo "Increasing volume\n";
  }
}

// problema
// baseada em um filme mudo que não pode aumentar o volume
// não precisa implementa de Movie
class ModernTimes implements Movie
{
  public function play()
  {
    echo "Playing The LionKinks\n";
  }

  public function increseVolume()
  {
    throw new Exception("PUTZ");
  }
}

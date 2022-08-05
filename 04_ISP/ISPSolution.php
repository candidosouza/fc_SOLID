<?php

interface MovieControl
{
  public function play();
}

interface AudioControl
{
  public function increseVolume();
}

class TheLionKink implements MovieControl, AudioControl
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

// solução
// baseada em um filme mudo que não pode aumentar o volume
// não precisa implementa de AudioControl, pois não aumenta volume
class ModernTimes implements MovieControl
{
  public function play()
  {
    echo "Playing The LionKinks\n";
  }
}


<?php

namespace Patterns\Interfaces;

use Patterns\Classifier\HeroShip;

interface IenemyShip
{
    public function degat(HeroShip $hero);
}
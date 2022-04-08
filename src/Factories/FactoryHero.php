<?php

namespace Patterns\Factories;

use Patterns\Classifier\HeroShip;
use Patterns\Interfaces\Ifactory;

class FactoryHero implements Ifactory
{
    public function make(): HeroShip
    {
        return new HeroShip();
    }
}


<?php

namespace Patterns\Factories;

use Patterns\Classifier\EnemyShipB;
use Patterns\Interfaces\Ifactory;

class FactoryShipB implements Ifactory
{
    public function make(): EnemyShipB
    {
        return new EnemyShipB;
    }
}

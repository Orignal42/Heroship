<?php

namespace Patterns\Factories;

use Patterns\Classifier\EnemyShipE;
use Patterns\Interfaces\Ifactory;

class FactoryShipE implements Ifactory
{
    public function make(): EnemyShipE
    {
        return new EnemyShipE;
    }
}

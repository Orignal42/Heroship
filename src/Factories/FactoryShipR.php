<?php

namespace Patterns\Factories;

use Patterns\Classifier\EnemyShipR;
use Patterns\Interfaces\Ifactory;

class FactoryShipR implements Ifactory
{
    public function make(): EnemyShipR
    {
        return new EnemyShipR;
    }
}

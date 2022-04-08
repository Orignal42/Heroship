<?php

namespace Patterns\Factories;

use Patterns\Classifier\EnemyShipU;
use Patterns\Interfaces\Ifactory;

class FactoryShipU implements Ifactory
{
    public function make(): EnemyShipU
    {
        return new EnemyShipU;
    }
}

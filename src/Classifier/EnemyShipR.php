<?php

namespace Patterns\Classifier;

use Patterns\Interfaces\IenemyShip;

class EnemyShipR implements IenemyShip
{
    public $degatEnemyShip = 20;

    public function degat (HeroShip $hero) {
//        if(isset($_POST['ship'])) {
//            if ($_POST['ship'] == 'E') {
        $hero->setDamages($this->degatEnemyShip);
    }
//        }
//    }
}

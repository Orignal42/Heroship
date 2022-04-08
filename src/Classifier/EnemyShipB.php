<?php

namespace Patterns\Classifier;

use Patterns\Interfaces\IenemyShip;

class EnemyShipB implements IenemyShip
{
    public $degatEnemyShip = 40;

    public function degat (HeroShip $hero) {
//        if(isset($_POST['ship'])) {
//            if ($_POST['ship'] == 'E') {
        $hero->setDamages($this->degatEnemyShip);
    }
//        }
//    }
}

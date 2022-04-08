<?php

namespace Patterns\Classifier;

use Patterns\Interfaces\IenemyShip;

class EnemyShipE implements IenemyShip
{
    public $degatEnemyShip = 10;

    public function degat (HeroShip $hero) {
//        if(isset($_POST['ship'])) {
//            if ($_POST['ship'] == 'E') {
                $hero->setDamages($this->degatEnemyShip);
            }
//        }
//    }
}

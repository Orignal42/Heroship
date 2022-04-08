<?php

namespace Patterns\Classifier;

class HeroShip
{
   public $heroShipPoints = 200;

   public function remainingPointsHeroShip(){
       if(isset($_POST['remainingPointsHeroShip'])) {
           if($_POST['remainingPointsHeroShip'] != ''){
               $this->heroShipPoints = $_POST['remainingPointsHeroShip'];
           }
       }
   }

    /**
     * @param int $damages
     */
    public function setDamages(int $damages): void
    {
        $this->heroShipPoints =  $this->heroShipPoints - $damages;
    }
}
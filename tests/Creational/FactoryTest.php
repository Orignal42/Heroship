<?php declare(strict_types=1);

namespace tests;

use Patterns\Factories\FactoryHero;
use Patterns\Factories\FactoryShipE;
use Patterns\Factories\FactoryShipR;
use Patterns\Factories\FactoryShipU;
use Patterns\Factories\FactoryShipB;
use PHPUnit\Framework\TestCase;

final class FactoryTest extends TestCase
{
    public function testShipE(){
        $factoryEnemy = new FactoryShipE();
        $factoryHero = new FactoryHero();
        $hero = $factoryHero->make();
        $enemy = $factoryEnemy->make();
        $enemy->degat($hero);
        self::assertEquals(190, $hero->heroShipPoints);
    }
    public function testShipR(){
        $factoryEnemy = new FactoryShipR();
        $factoryHero = new FactoryHero();
        $hero = $factoryHero->make();
        $enemy = $factoryEnemy->make();
        $enemy->degat($hero);
        self::assertEquals(180, $hero->heroShipPoints);
    }
    public function testShipU(){
        $factoryEnemy = new FactoryShipU();
        $factoryHero = new FactoryHero();
        $hero = $factoryHero->make();
        $enemy = $factoryEnemy->make();
        $enemy->degat($hero);
        self::assertEquals(170, $hero->heroShipPoints);
    }
    public function testShipB(){
        $factoryEnemy = new FactoryShipB();
        $factoryHero = new FactoryHero();
        $hero = $factoryHero->make();
        $enemy = $factoryEnemy->make();
        $enemy->degat($hero);
        self::assertEquals(160, $hero->heroShipPoints);
    }
}
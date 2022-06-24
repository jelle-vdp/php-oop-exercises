<?php

declare(strict_types=1);

/* EXERCISE 4

Copy the code of exercise 2 to here and delete everything related to cola.

TODO: Make all properties protected.
TODO: Make all the other prints work without error without changing the beverage class.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    protected string $name;
    protected string $color;
    protected float $price;
    protected string $temperature = "cold";

    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function printInfo(): void{
        echo "$this->name is a $this->color colored beverage, served $this->temperature, priced at €" . number_format($this->price, 2);
    }
    
    public function getColor(){
        return $this->color;
    }
}

$cola = new Beverage("Cola", "black", 2);

$cola->printInfo();

echo "<br><br>";

class Beer extends Beverage {
    protected float $alcoholPc;

    public function __construct(string $name, string $color, float $price, float $alcoholPc){
        parent::__construct($name, $color, $price);
        $this->alcoholPc = $alcoholPc;
    }
    
    public function printInfo(): void{
        echo "$this->name is a $this->color colored beverage, served $this->temperature, priced at €" . number_format($this->price, 2) . " with an alcoholpercentage of " . number_format($this->price, 1) . "%.";
    }

    public function getAlcoholPercentage(): void{
        echo "$this->name has an alcoholpercentage of " . number_format($this->alcoholPc, 1) . "%.";
    }

    public function setAlcoholPercentage($pc){
        $this->alcoholPc = $pc;
    }
}

$caraPils = new Beer("Cara Pils", "blond", 0.60, 4.4);

$caraPils->getAlcoholPercentage();
$caraPils->setAlcoholPercentage(4.5);
echo "<br><br>";
$caraPils->getAlcoholPercentage();
echo "<br><br>";
echo $caraPils->getColor();
echo "<br><br>";
$caraPils->printInfo();
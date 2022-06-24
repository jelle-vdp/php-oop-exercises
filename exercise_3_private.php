<?php

declare(strict_types=1);

/* EXERCISE 3

TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light instead of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."

Make sure that you use the variables and not just this text line.

TODO: Print this method on the screen on a new line.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    private string $name;
    private string $color;
    private float $price;
    private string $temperature = "cold";

    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

}

class Beer extends Beverage {
    private float $alcoholPc;

    public function __construct(string $name, string $color, float $price, float $alcoholPc){
        parent::__construct($name, $color, $price);
        $this->alcoholPc = $alcoholPc;
    }
    
    public function setName($name){
        $this->name = $name;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function setTemperature($temperature){
        $this->temperature = $temperature;
    }

    public function getName(){
        return $this->name;
    }

    public function getColor(){
        return $this->color;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getTemperature(){
        return $this->temperature;
    }
    
    public function printInfo(): void{
        echo $this->getName() . " is a " . $this->getColor() . " colored beverage, served " . $this->getTemperature() . ", priced at €" . number_format($this->getPrice(), 2) . " with an alcoholpercentage of " . number_format($this->getAlcoholPercentage(), 1) . "%.";
    }

    public function getAlcoholPercentage(): void{
        echo "$this->getName has an alcoholpercentage of " . number_format($this->alcoholPc, 1) . "%.";
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
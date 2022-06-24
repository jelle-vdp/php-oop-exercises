<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

class Beverage {
    protected string $name;
    protected string $color;
    protected float $price;
    protected string $temperature = "cold";
    public static string $address = "Melkmarkt 9, 2000 Antwerpen";

    public function __construct(string $name, string $color, float $price){
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function printInfo(): void{
        echo "$this->name is a $this->color colored beverage, served $this->temperature, priced at €" . number_format($this->price, 2);
    } 
};

class Beer extends Beverage {
    private float $alcoholPc;

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
    
    public function getColor(){
        return $this->color;
    }
};

$caraPils = new Beer("Cara Pils", "blond", 0.60, 4.4);

$caraPils->getAlcoholPercentage();
$caraPils->setAlcoholPercentage(4.5);
echo "<br><br>";
$caraPils->getAlcoholPercentage();
echo "<br><br>";
echo $caraPils->getColor();
echo "<br><br>";
$caraPils->printInfo();
echo "<br><br>";
echo Beverage::$address;
echo "<br><br>";
echo Beer::$address;
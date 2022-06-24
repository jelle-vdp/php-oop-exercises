<?php

declare(strict_types=1);

/* EXERCISE 2

TODO: Make class beer that extends from Beverage.
TODO: Create the properties name (string) and alcoholPercentage (float).
TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
TODO: Instantiate an object which represents Cara Pils. Make sure that the color is set to blond, the price equals 0.60 euro and the temperature to cold automatically.
TODO: Also the name equal to Cara Pils and the alcohol percentage to 4,4%
TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the printInfo.

Make sure that each print is on a different line.
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
}

$cola = new Beverage("Cola", "black", 2);

$cola->printInfo();

echo "<br><br>";

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
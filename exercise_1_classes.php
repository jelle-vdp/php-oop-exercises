<?php

declare(strict_types=1);

/* EXERCISE 1
TODO: Create a class beverage.
TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
TODO: Have a default value "cold" in the construct for temperature.

Remember for now we will use properties and methods that can be accessed from everywhere.
TODO: Make a printInfo function which returns "This beverage is <temperature> and <color>."
TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold automatically
 print the getInfo on the screen.
TODO: Print the temperature on the screen.

USE TYPEHINTING EVERYWHERE!
*/

class Beverage {
    public string $name;
    public string $color;
    public float $price;
    public string $temperature = "cold";

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
<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
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

    public function printInfo(): void{
        echo "$this->name is a $this->color colored beverage, served $this->temperature, priced at €" . number_format($this->price, 2);
    }
}

$cola = new Beverage("Cola", "black", 3.5);

$cola->printInfo();
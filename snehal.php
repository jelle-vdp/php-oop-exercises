<?php

declare(strict_types=1);

/* EXERCISE 3
TODO: Copy the code of exercise 2 to here and delete everything related to cola.
TODO: Make all properties private.
TODO: Make all the other prints work without error.
TODO: After fixing the errors. Change the color of Duvel to light of blond and also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
TODO: Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
TODO: Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/
class Beverage{
    
    private string $name;
    private string $color;
    private float $price;
    private string $temperature;

    public function __construct(string $name, string $color, float $price, string $temperature = 'cold')
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo():string {
        return "This beverage is $this->temperature and $this->color  ";
    }
    public function setColor(string $color):void
    {
        $this->color = $color;
    }

    public function getColor():string
    {
        return $this->color;
    }

}
class Beer extends Beverage{
//name (string) and alcoholPercentage (float).
    private string $beerName;
    private float $alcoholPercentage;
    public function __construct($color,$price,$beerName, $alcoholPercentage)
	{
		parent::__construct('beer',$color,$price);
        $this->beerName = $beerName;
        $this->alcoholPercentage = $alcoholPercentage;
    }
   public function getAlcoholPercentage():float{
        return $this->alcoholPercentage;
   }
   //Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alcochol percentage of 8.5 and I have a light color."
   public function beerInfo() : string{

    return "Hi i'm <b>".$this->beerName." </b> and have an alcochol percentage of <b> ".$this->alcoholPercentage." </b> and I have a <b>light</b> color.";
   }
   
}

    
    $Duvel = new Beer('blond',3.5,'duvel',8.5);
    echo "<br/>Alcohol percentage by using function = ".$Duvel->getAlcoholPercentage();
    echo "<br/> The color of  Duvel is <b>". $Duvel->getColor()." </b> before changes";
    $Duvel->setColor('light');
    
    echo "<br/> The color of  Duvel is <b>". $Duvel->getColor()." </b> before changes";
    echo " <br/> ".$Duvel->beerInfo();
   
?>
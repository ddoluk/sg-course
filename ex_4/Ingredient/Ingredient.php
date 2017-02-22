<?php

class Ingredient
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $cost;

    /**
     * Ingredient constructor.
     * @param $name
     * @param $cost
     */

    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setCost($cost)
    {
        $this->cost = $cost;
    }
}

$salad = new Ingredient('salad', 4);

echo $salad->getCost().PHP_EOL;

$salad->setCost(2);

echo $salad->getCost().PHP_EOL;
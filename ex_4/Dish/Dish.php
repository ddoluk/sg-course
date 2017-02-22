<?php

require_once 'Ingredient.php';

class Dish extends Ingredient
{
    /**
     * @var array
     */
    private $dish = array();

    /**
     * Dish constructor.
     * @param array $ingredient_cost возвращает массив вида array('название ингредиента' => 'цена')
     */
    public function __construct($ingredient_cost = array())
    {
        parent::__construct($ingredient_cost);
    }

    public function getDish()
    {
        $this->dish = $this->getIngredients();

        if (!$this->dish) {
            throw new Exception('Dish does not contain ingredients.');
        }

        return $this->dish;
    }

    public function getTotalCost()
    {
        return array_sum($this->getDish());
    }

}

$dish_one = new Dish(
    array(
        'ingredient_one' => 2,
        'ingredient_two' => 3,
        'ingredient_tree' => 4
    )
);

$dish_two = new Dish(
    array(
        'ingredient_one' => 5,
        'ingredient_two' => 6,
        'ingredient_tree' => 7
    )
);

var_dump($dish_two->getDish());
var_dump($dish_two->getTotalCost());
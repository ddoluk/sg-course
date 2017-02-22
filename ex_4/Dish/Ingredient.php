<?php

class Ingredient
{
    /**
     * @var array
     */
    private $ingredients= array();

    /**
     * Ingredient constructor.
     * @param array $ingredient_cost возвращает массив вида array('название ингредиента' => 'цена')
     */
    public function __construct($ingredient_cost = array())
    {
        $this->ingredients = $ingredient_cost;
    }

    protected function getIngredients()
    {
        return $this->ingredients;
    }

}
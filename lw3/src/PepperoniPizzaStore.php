<?php
namespace Your\Name;

class PepperoniPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {

        switch ($type) {
            case 'pepperoni':
                $pizza = new PepperoniPizza();
                return $pizza;
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}

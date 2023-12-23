<?php
namespace Your\Name;

class MargheritaPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'margherita':
                $pizza = new MargheritaPizza();
                return $pizza;
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}

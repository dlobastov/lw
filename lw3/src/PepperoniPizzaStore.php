<?php

namespace Your\Namespace;

class PepperoniPizzaStore extends PizzaStore
{
    public function createPizza($type): Pizza
    {
        switch ($type) {
            case 'pepperoni':
                return new PepperoniPizza();
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}

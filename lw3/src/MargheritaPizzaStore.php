<?php

namespace Your\Namespace;

class MargheritaPizzaStore extends PizzaStore
{
    public function createPizza($type): Pizza
    {
        switch ($type) {
            case 'margherita':
                return new MargheritaPizza();
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}

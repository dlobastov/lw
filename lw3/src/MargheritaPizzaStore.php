<?php
namespace Your\Name;

class MargheritaPizzaStore extends PizzaStore
{
    public function createPizza(string $type): Pizza
    {
        switch ($type) {
            case 'margherita':
                return new MargheritaPizza();
            default:
                throw new \InvalidArgumentException("Неизвестный тип пиццы: $type");
        }
    }
}

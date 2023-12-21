<?php

namespace Your\Namespace;

class PepperoniPizza extends Pizza
{
    protected $name = 'Pepperoni';

    public function prepare()
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топпинги: " . implode(", ", $this->toppings) . "\n";
    }
}

<?php
namespace Your\Name;

class PepperoniPizza extends Pizza
{
    protected string $name = 'Pepperoni';

    public function prepare()
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топпинги: " . implode(", ", $this->toppings) . "\n";
    }
}

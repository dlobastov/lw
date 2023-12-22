<?php
namespace Your\Name;

class MargheritaPizza extends Pizza
{
    protected $name = 'Margherita';

    public function prepare()
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топпинги: " . implode(", ", $this->toppings) . "\n";
    }
}

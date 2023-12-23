<?php
namespace Your\Name;

class MargheritaPizza extends Pizza
{
    protected string $name = 'Margherita';

    public function  prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топпинги: " . implode(", ", $this->toppings) . "\n";
    }
}

<?php
namespace Your\Name;

abstract class Pizza
{
    protected string $name;
    protected string $sauce;
    protected string $toppings = [];
    abstract public function prepare();
    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}

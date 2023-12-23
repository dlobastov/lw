<?php
namespace Your\Name;

abstract class Pizza
{
    protected $name;
    protected $sauce;
    protected $toppings = [];
    abstract public function prepare();
    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}

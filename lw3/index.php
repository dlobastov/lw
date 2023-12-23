<?php
require_once 'vendor/autoload.php';

use Your\Name\MargheritaPizzaStore;
use Your\Name\PepperoniPizzaStore;

$pizzaType = $_POST['pizzaType'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $pizzaType !== '') {
    if ($pizzaType === 'margherita') {
        $pizzaStore = new MargheritaPizzaStore();
    } elseif ($pizzaType === 'pepperoni') {
        $pizzaStore = new PepperoniPizzaStore();
    } else {
        die("Неизвестный тип пиццы: $pizzaType");
    }

    $pizzaStore->orderPizza((string) $pizzaType);

} else {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pizza Shop</title>
    </head>

    <body>

        <form method="post">
            <label for="pizzaType">Выбери вид пиццы:</label>
            <select name="pizzaType" id="pizzaType">
                <option value="margherita">Margherita Pizza</option>
                <option value="pepperoni">Pepperoni Pizza</option>
            </select>
            <button type="submit">Заказать</button>
        </form>
    </body>

    </html>

    <?php
}
?>
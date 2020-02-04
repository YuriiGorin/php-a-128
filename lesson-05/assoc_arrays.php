<?php
$thunderstorm = [
    "windpower" => 10,
    "date" => "02.02.2020",
    "time" => "18:13",
    "duration" => 45,
];

echo "Гроза случилась {$thunderstorm["date"]} в {$thunderstorm["time"]}<hr>";

foreach ($thunderstorm as $key => $value) {
    echo "$value ($key) <br>";
}

$products = [
    ["title" => "Шкаф", "price" => 9000, "oldPrice" => 14000, "uom" => "шт.", "onStock" => true, "onSale" => true],
    ["title" => "Тумбочка", "price" => 4990, "oldPrice" => 0, "uom" => "шт.", "onStock" => true, "onSale" => false],
    ["title" => "Наполнитель для креса", "price" => 100, "oldPrice" => 0, "uom" => "кг.", "onStock" => false, "onSale" => false],
    ["title" => "Средство для мытья мебели", "price" => 190, "oldPrice" => 320, "uom" => "л.", "onStock" => true, "onSale" => true],
    ["title" => "Лак для мебели", "price" => 250, "oldPrice" => 300, "uom" => "л.", "onStock" => true, "onSale" => true],
];

echo "<table border='1' cellspacing='0' cellpadding='8'>";
echo "<tr><th>Название</th><th>Цена</th><th>Наличие</th></tr>";
foreach ($products as $product) {
    echo "<tr>";
        echo "<td>{$product["title"]} ({$product["uom"]}) </td>";
        echo "<td>";
        if ($product["onSale"]) {
            echo "<s>" . $product["oldPrice"] . "</s> " . $product["price"] . " руб.";
        } else {
            echo $product["price"] . " руб.";
        }
        echo "</td>";
        echo "<td>";
        if ($product["onStock"]) {
            echo "Есть";
        } else {
            echo "Отсутствует";
        }
        echo "</td>";
    echo "</tr>";
}
echo "</table>";


// мы закрыли тег ПХП
?>

<table border='1' cellspacing='0' cellpadding='8'>
    <tr>
        <th>Название</th>
        <th>Цена</th>
        <th>Наличие</th>
    </tr>
    <?php
        // открыли теги снова
        foreach ($products as $product) {
        // и вот тут будет разрыв
            if ($product["onSale"]) {
                $price = "<s>" . $product["oldPrice"] . "</s> " . $product["price"];
            } else {
                $price = $product["price"];
            }

            if ($product["onStock"]) {
                $onStock = "Есть";
            } else {
                $onStock = "Отсутствует";
            }
        ?>
            <tr>
                <td>
                    <?= $product["title"] ?>
                    ( <?= $product["uom"] ?> )
                </td>
                <td><?= $price?> руб.</td>
                <td><?= $onStock?></td>
            </tr>
        <?php
        // тег php надо снова открыти
        }
        // и закрыть
    ?>
</table>

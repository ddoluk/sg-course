<?php

$taxRate = (7.5 / 100);
$tipRate = (16 / 100);

$meal = array(
    array('Item', 'Unit Price', 'Quantity', 'Subtotal'),
    array('Hamburguer', 4.95, 2, 4.95 * 2),
    array('Chocolate Milk Shake', 1.95, 1, 1.95 * 1),
    array('Cola', 0.85, 1, 0.85 * 1)
);

$totalMeal = $meal[1][3] + $meal[2][3] + $meal[3][3];
$tax = $totalMeal * $taxRate;
$tip = $totalMeal * $tipRate;

$cost = array(
    array('Subtotal', $totalMeal),
    array('Tax, 7.5%', $tax),
    array('Tip', $tip),
    array('Total', $totalMeal + $tip + $tax)
);

?>

<html>
<head>
    <title></title>
</head>
<body>
<table border="1">
    <? foreach ($meal as $indexMealArray => $valueMealArray): ?>
        <tr>
            <? foreach ($valueMealArray as $mealValue): ?>
                <td>
                    <?php echo $mealValue ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    <? foreach ($cost as $indexCostArray => $valueCostArray): ?>
        <tr>
            <? foreach ($valueCostArray as $valueCost): ?>
                <td colspan="3">
                    <?php echo $valueCost ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>


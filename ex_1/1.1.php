<?php


/**
 * Task 1
 *
 * Find the errors in this PHP program:
 * <? php
 *  print 'How are you?';
 *  print 'I'm fine.';
 * ??>
 *
 * print 'I'm fine.';
 * ??>
 *
 */


/**
 * Task 2
 */

$hamburger = (4.95 * 100) * 2;
$milkshake = 1.95 * 100;
$cola = 85;
$taxRate = (7.5 / 100);
$tipRate = (16 / 100);


$meal = $hamburger + $milkshake + $cola;

$totalCost = ($meal + ($meal * $taxRate) + ($meal * $tipRate)) / 100;

printf("total cost = %.4f \n", $totalCost);
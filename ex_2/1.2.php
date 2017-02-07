<?php

/**
 * $age = 12;
 * $shoe_size = 13;
 *
 * if ($age > $shoe_size) {
 *      print "Message 1.";
 * } elseif (($shoe_size++) && ($age > 20)) {
 *      print "Message 2.";
 * } else {
 *      print "Message 3.";
 * }
 * print "Age: $age. Shoe Size: $shoe_size";
 *
 * Перша перевірка поверне значення (false), оскільки 12 не є більше 13
 * Друга перевірка збільшить $shoe_size на одиницю і поверне (false)
 *
 * Відповідь: Message 3. Age: 12. Shoe Size: 14
 *
 */
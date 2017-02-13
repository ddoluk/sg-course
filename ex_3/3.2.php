<?php

/**
 * Modify your solution to the previous exercise so that the rows in the result table are ordered by population.
 * Then modify your solution so that the rows are ordered by city name.
 */

$cities = array(
    'New York, NY' => 8175133,
    'Los Angeles, CA' => 3792621,
    'Chicago, IL' => 2695598,
    'Houston, TX' => 2100263,
    'Philadelphia, PA' => 1526006,
    'Phoenix, AZ' => 1445632,
    'San Antonio, TX' => 1327407,
    'San Diego, CA' => 1307402,
    'Dallas, TX' => 1197816,
    'San Jose, CA' => 945942
);

$total = array_sum($cities);

asort($cities);

print "<table>
        <tr>
            <th>City</th>
            <th>Population</th>
        </tr>";

foreach ($cities as $city => $population) {

    print "
            <tr>
                <td>$city</td>
                <td>$population</td>
            </tr>";

}

print "
        <tr>
            <td>Total:</td>
            <td>$total</td>
        </tr>";

print "</table>";

print "<br><br>";

ksort($cities);

print "<table>
        <tr>
            <th>City</th>
            <th>Population</th>
        </tr>";

foreach ($cities as $city => $population) {

    print "
            <tr>
                <td>$city</td>
                <td>$population</td>
            </tr>";

}

print "
        <tr>
            <td>Total:</td>
            <td>$total</td>
        </tr>";

print "</table>";
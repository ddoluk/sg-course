<?php

/**
 * Modify your solution to the first exercise so that the table also contains rows
 * that hold state population totals for each state represented in the list of cities.
 */

$cities = array(
    array('New York', 'NY', 8175133),
    array('Los Angeles', 'CA', 3792621),
    array('Chicago', 'IL', 2695598),
    array('Houston', 'TX', 2100263),
    array('Philadelphia', 'PA', 1526006),
    array('Phoenix', 'AZ', 1445632),
    array('San Antonio', 'TX', 1327407),
    array('San Diego', 'CA', 1307402),
    array('Dallas', 'TX', 1197816),
    array('San Jose', 'CA', 945942)
);

$total = 0;
$states = array();

print "<table>
        <tr>
            <th>City</th>
            <th>Population</th>
        </tr>";

foreach (array_keys($cities) as $index) {

    $total += $cities[$index][2];

    if (!key_exists($cities[$index][1], $states)) {

        $states[$cities[$index][1]] = 0;

    }

    $states[$cities[$index][1]] += $cities[$index][2];

    print "
            <tr>
                <td>" . $cities[$index][0] . " " . $cities[$index][1] . "</td>
                <td>" . $cities[$index][2] . "</td>
            </tr>";

}

print "
        <tr>
            <td>Total:</td>
            <td>$total</td>
        </tr>";

print "</table>";

print "<br><br>";


print "<table>
        <tr>
            <th>State</th>
            <th>Population</th>
        </tr>";

foreach ($states as $code => $population) {

    print "
            <tr>
                <td>$code</td>
                <td>$population</td>
            </tr>";

}

print "
        <tr>
            <td>Total:</td>
            <td>$total</td>
        </tr>";

print "</table>";
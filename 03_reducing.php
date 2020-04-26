<?php

# array_reduce iterates over an array and set a $carry at the start
# the passed function is applied to the passed item and the carry and return a value 
# 
# return a value

echo "***********************************************\n";
echo "  Exercise  1\n";
echo "  Summing numbers in an array\n";
echo "***********************************************\n";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$get_sum = function($carry, $item) {
    echo '$carry: ' . $carry . ', $item: ' . $item . "\n";
    return $carry + $item;
};

$sum = array_reduce($numbers, $get_sum, 0);

echo "$sum\n";


echo "***********************************************\n";
echo "  Exercise  2\n";
echo "  Multiplying numbers in an array \n";
echo "***********************************************\n";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$get_product = function($carry, $item) {
    echo '$carry: ' . $carry . ', $item: ' . $item . "\n";
    return $carry * $item;
};

$product = array_reduce($numbers, $get_product, 1);

echo "$product\n";


?>


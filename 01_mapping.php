<?php

# Array map iterates over an array and apply the passed function to
# each element of the array.
# return a new array

echo "***************\n";
echo "  Exercise  1\n";
echo "***************\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$doubled_numbers = array_map(fn($x) => $x * 2, $numbers);

print_r($doubled_numbers);


echo "***************\n";
echo "  Exercise  2\n";
echo "***************\n";

$numbers = ['a', 'b', 'c', 'd'];

$doubled_numbers = array_map(fn($x) => $x . $x, $numbers);

print_r($doubled_numbers);




?>


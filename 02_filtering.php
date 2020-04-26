<?php

# array_filter iterates over an array and apply the passed function to
# each element of the array.
# the function gets and item of the array and returns a boolean
# return a new array containin the items of the input array that returned TRUE
# when passed to the boolean function

echo "***********************************************\n";
echo "  Exercise  1  \n";
echo "***********************************************\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$is_even = function($x) {
    return $x % 2 == 0;
};

$even_numbers = array_filter( $numbers, $is_even );

print_r($even_numbers);

echo "***********************************************\n";
echo "  Exercise  2  \n";
echo "***********************************************\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$even_numbers = array_filter( $numbers, fn($x) => $x % 2 == 0 );

print_r($even_numbers);

echo "***********************************************\n";
echo "  Exercise  3  \n";
echo "***********************************************\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$even_numbers = array_filter( $numbers, function ($x) {
    return $x % 2 === 0;
});

print_r($even_numbers);


echo "***********************************************\n";
echo "  Exercise  4  \n";
echo "***********************************************\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

# array_values reorganizes the indexes of the array
$even_numbers = array_values( array_filter( $numbers, fn($x) => $x % 2 == 0 ) );

print_r($even_numbers);


?>
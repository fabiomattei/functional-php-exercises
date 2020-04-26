<?php

# array_map iterates over an array and apply the passed function to
# each element of the array.
# return a new array

echo "***********************************************\n";
echo "  Exercise  1\n";
echo "  Anonymous function PHP 7.4 way on numbers\n";
echo "***********************************************\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$doubled_numbers = array_map(fn($x) => $x * 2, $numbers);

print_r($doubled_numbers);


echo "***********************************************\n";
echo "  Exercise  2\n";
echo "  Anonymous function PHP 7.4 way on characters\n";
echo "***********************************************\n";

$letters = ['a', 'b', 'c', 'd'];

$doubled_numbers = array_map(fn($x) => $x . $x, $letters);

print_r($doubled_numbers);


echo "***********************************************\n";
echo "  Exercise  3\n";
echo "  Passing function by name\n";
echo "***********************************************\n";

function myfunction($num) {
  return $num * $num;
}

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$doubled_numbers = array_map('myfunction', $numbers);

print_r($doubled_numbers);


echo "***********************************************\n";
echo "  Exercise  4\n";
echo "  Passing function by variable\n";
echo "***********************************************\n";

$myAnonimousFunction = function($num) {
  return $num * $num;
};

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$doubled_numbers = array_map($myAnonimousFunction, $numbers);

print_r($doubled_numbers);

echo "***********************************************\n";
echo "  Exercise  5\n";
echo "  Anonymous function PHP 7.3 way\n";
echo "***********************************************\n";

$numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$doubled_numbers = array_map(function($x) { return $x . $x; } , $numbers);

print_r($doubled_numbers);

echo "***********************************************\n";
echo "  Exercise  6\n";
echo "  Working with two arrays \n";
echo "***********************************************\n";

function mySecondfunction( $v1, $v2 ) {
  if ( $v1 === $v2 ) {
    return "same";
  }
  return "different";
}

$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Rat");

print_r( array_map("mySecondfunction", $a1, $a2) );


echo "***********************************************\n";
echo "  Exercise  7\n";
echo "  Passing array keys \n";
echo "***********************************************\n";

$letters = ['a', 'b', 'c', 'd', 'e'];

$pairs = array_map(
    fn($letter, $index) => "The letter at position $index is $letter",
    $letters,
    array_keys($letters),
);

print_r($pairs);


?>


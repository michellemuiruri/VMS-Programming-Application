<?php

/**
 * Prints each number from 1..n on a separate line except in the following
 * cases:
 *
 * 1. If the number is divisible by 3, print "Fizz"
 * 2. If the number is divisible by 5, print "Buzz"
 * 3. If the number is divisible by 3 and 5, print "FizzBuzz"
 *
 * @param   int   $n    Upper limit of range of numbers to print.
 * @return  void
 */
function fizzbuzz($n) {

}

?>
<?php
$step[0] = 3;
$step[1] = 5;
$step[2] = 15;
// Now get to work. Build the 1 to 100 array
for ($i = 1; $i<=100; $i++) {
	$theList[$i] = $i;
}
// Mark the "Fizz"
for ($i = $step[0]; $i <= 3; $i = $i + $step[0]) {
	$theList[$i] = "Fizz";

}
// Mark the "Buzz"
for ($i = $step[1]; $i <= 5; $i = $i + $step[1]) {
	$theList[$i] = "Buzz";

}
// Mark the "FizzBuzz"es
for ($i = $step[2]; $i <= 15; $i = $i + $step[2] + $step[3]) {
	$theList[$i] = "FizzBuzz";

}
var_dump($theList);
?>

<?php
/*
 * Write a function to check if a string ($str1) contains or not another string ($str2).
 * example: $str1 = "tomorrow morning it will rain”; $str2 = "morning";
 * str_contains is case sensitive, the example is case sensitive.
 */
function doesStringContainsSubstring(string $string, string $substring): bool {
    return str_contains($string, $substring);
}
/* $phrase = "tomorrow morning it will rain”;
echo doesStringContainsSubstring($phrase, 'morning') === true ? 'true' : 'false';
echo doesStringContainsSubstring($phrase, 'afternoon') === true ? 'true' : 'false'; */

/*
 * Write a function to sum the integer part (left side of the .) of each element in an array of decimal values.
 * For example: $array = [1.23, 3.21, 4.7];
 */
function convertArrayElementFromDecimalToInteger(float $decimal): int {
    return (int) $decimal;
}

function sumIntegerOfDecimals(): int {
    $decimals = [1.23, 3.21, 4.7];
    $integers = array_map('convertArrayElementFromDecimalToInteger', $decimals);

    return array_sum($integers);
}
// print_r(sumIntegerOfDecimals());

/*
 * Write a function to sum one value to each element of an array.
 * For example: $array = [1.23, 3.21, 4.7]; $value = 3;
 */
function sumValueToEachElementOfArray(float|int $value): float|int {
    return $value + 3;
}

function sumValueToEachArrayElement(): array
{
    $numbers = [1.23, 3.21, 4.7];
    return array_map('sumValueToEachElementOfArray', $numbers);
}
// print_r(sumValueToEachArrayElement());

/*
 * Write a function to sum all the values of an array and subtract 10.
 * If the result is less than 0, then return 0.
 * Otherwise return the result;
 */
function subtractTenFromArrayElement(float|int $number): float|int {
    $result = $number - 10;
    return $result >= 0 ? $result : 0;
}

function subtractTenToEachElementOfArray(): array {
    $numbers = [1, 5, 10, 15, 20];

    return array_map('subtractTenFromArrayElement', $numbers);
}
// print_r(subtractTenToEachElementOfArray());

// What are the 3 scope levels available in PHP and how would you define them?
// Global, local and static.
// Local are variables declared inside of the function for example. It is visible only inside of the function.
// Global are variables declared outside of the function for example. It is visible inside of the function.
// Static are variable where the values declared inside of a function but persists the value across multiple calls.

// When would you use === instead of ==?
// When I must test the type and the value, 'false' is not the same of false.

/*
 * Write  function to sum all the values in this string: "1,2,3.14,9,8,7".
 */
function sumAllValuesFromString(): float|int {
    $numbers = "1,2,3.14,9,8,7";
    return array_sum(explode(',', $numbers));
}
// print_r(sumAllValuesFromString());

/*
 * Suppose that you have to implement a class named Dragonball.
 * This class must have an attribute named ballCount (which starts from 0) and a method iFoundaBall.
 * When iFoundaBall is called, ballCount is increased by one.
 * If the value of ballCount is equal to seven, then the message "You can ask your wish" is printed, and ballCount is reset to 0.
 * How would you implement this class?
 */
class Dragonball {
    private int $ballCount = 0;

    public function iFoundaBall(): int {
        if ($this->ballCount == 7) {
            echo "You can ask your wish";
            $this->ballCount = 0;
            return $this->ballCount;
        }

        $this->ballCount++;

        return $this->ballCount;
    }
}
/* $dragonball = new Dragonball();
for ($i = 0; $i <= 10; $i++) {
    echo $dragonball->iFoundaBall();
} */

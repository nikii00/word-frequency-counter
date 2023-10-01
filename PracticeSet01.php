<<<<<<< HEAD
<?php
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

/**
 * Calculate the total price of items in a shopping cart.
 *
 * @param array $items An array of items with 'name' and 'price' keys.
 * @return float The total price of the items.
 */

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

$string = "This is a poorly written program with little structure and readability.";

/**
 * Remove spaces and convert a string to lowercase.
 *
 * @param string $inputString The input string to be modified.
 * @return string The modified string.
 */

function modifyString(string $inputString): string {
    $string = str_replace(' ', '', $inputString);
    return strtolower($string);
}
$modifiedString = modifyString($string);
echo "\nModified string: " . $modifiedString;

$number = 42;

/**
 * Check if a number is even or odd.
 *
 * @param int $number The number to be checked.
 * @return string A message indicating if the number is even or odd.
 */

function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number {$number} is even.";
    } else {
        return "The number {$number} is odd.";
    }
}
$result = checkEvenOrOdd($number);
echo "\n{$result}";
?>
=======
<?php

function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

function modifyString(string $inputString): string {
    $modifiedString = str_replace('', ' ', $inputString);
    $modifiedString = strtolower($modifiedString);
    return $modifiedString;
}

function checkEvenOrOdd(int $number): string {
    if ($number % 2 == 0) {
        return "The number " . $number . " is even.";
    } else {
        return "The number " . $number . " is odd.";
    }
}


$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

$inputString = "This is a poorly written program with little structure and readability.";

$modifiedString = modifyString($inputString);
echo "\nModified string: " . $modifiedString;

$number = 17;
$evenOrOddMessage = checkEvenOrOdd($number);
echo "\n" . $evenOrOddMessage;
?>
>>>>>>> 848cea0d68c54b288af5cf5925d6f5193efe7205

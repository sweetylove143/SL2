<?php
function transformArray($inputArray)
{
    $outputArray = [];
    foreach ($inputArray as $number) {
        if ($number % 2 == 0) {
            // Even number: divide by 2
            $outputArray[] = $number / 2;
        } else {
            // Odd number: multiply by 3
            $outputArray[] = $number * 3;
        }
    }
    return $outputArray;
}

$inputArray = [4, 2, 3, 4, 5, 6];
$outputArray = transformArray($inputArray);

echo "Input Array: ";
print_r($inputArray);

echo "Output Array: ";
print_r($outputArray);
?>


// User input : 
<!-- <?php
function processArray($inputArray) {
    $outputArray = array();
    
    foreach ($inputArray as $item) {
        // Directly apply the logic without extra checks
        $outputArray[] = ($item % 2 == 0) ? $item / 2 : $item * 3;
    }

    return $outputArray;
}

// Taking user input (assuming valid integers separated by spaces)
echo "Enter integers separated by spaces: ";
$input = trim(fgets(STDIN)); // Read input from the user
$inputArray = explode(" ", $input); // Convert input string to an array

// Directly convert the input strings to integers
$inputArray = array_map('intval', $inputArray);

$outputArray = processArray($inputArray);

// Display results
echo "Input Array: " . implode(", ", $inputArray) . PHP_EOL;
echo "Output Array: " . implode(", ", $outputArray) . PHP_EOL;
?> -->


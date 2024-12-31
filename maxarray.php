<?php
function findMaxIndex($array) {
    $maxValue = $array[0];
    $maxIndex = 0;

    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $maxValue) {
            $maxValue = $array[$i];
            $maxIndex = $i;
        }
    }

    return $maxIndex;
}

// Example array
$array = [10, 20, 5, 35, 45];
$maxIndex = findMaxIndex($array);

echo "The index of the maximum element is: " . $maxIndex;
?>

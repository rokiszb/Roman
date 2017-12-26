<?php 

$numerals = [
    'I' => 1,
    'V' => 5,
    'X' => 10,
    'L' => 50,
    'C' => 100,
    'D' => 500,
    'M' => 1000
];

function roman($input, $numerals)
{
    $number = 0;
    if (strlen($input) < 2) {
        return $numerals[$input];
    }

    $exploded = str_split($input);
    $converted = array_map("convert_roman", $exploded);
    // print_r($converted);
    // die;
    for ($i=0; $i <= count($converted)-2 ; $i++) {
        // echo $i;
        if ($converted[$i] >= $converted[$i+1]) {
            $number += $converted[$i];
        } else {
            $number -= $converted[$i];
        }

        // if ()
    }
    $number += $converted[$i];
    return $number;
}

function convert_roman($roman)
{
    global $numerals;
    return $numerals[$roman];
}

echo roman('V', $numerals);
// echo roman('IV', $numerals);

echo roman('XIV', $numerals);
echo roman('XIV', $numerals);
echo roman('XXIV', $numerals);

<?php


function mergeSort($arr) {
    
    if (count($arr) <= 1) {
        return $arr;
    }

    
    $middle = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    
    $left = mergeSort($left);
    $right = mergeSort($right);

    
    return mergeFunction($left, $right);
}

function mergeFunction($left, $right) {
    $valor = [];
    $i = 0; 
    $j = 0; 

    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] <= $right[$j]) {
            $valor[] = $left[$i];
            $i++;
        } else {
            $valor[] = $right[$j];
            $j++;
        }
    }

   
    while ($i < count($left)) {
        $valor[] = $left[$i];
        $i++;
    }
    while ($j < count($right)) {
        $valor[] = $right[$j];
        $j++;
    }

    return $valor;
}


$arrayComplete = [1, 3, 4, 5, 6, 3, 6, 5, 3];

echo "Arreglo original: " . implode(", ", $arrayComplete), " \n";
$sortedArray = mergeSort($arrayComplete);
echo "Arreglo ordenado: " . implode(", ", $sortedArray);


?>
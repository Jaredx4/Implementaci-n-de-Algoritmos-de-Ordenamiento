<?php
function insertionSort($arr){
    // Copiar el arreglo original
    $array1 = [];
    for ($i = 0; $i < count($arr); $i++) {
        $array1[] = $arr[$i];
    }

    // Algoritmo de Insertion Sort
    for ($i = 1; $i < count($arr); $i++) { 
        $valor = $arr[$i];
        $j = $i - 1;

        // Mover los elementos mayores que $valor una posición adelante
        while ($j >= 0 && $arr[$j] > $valor) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }

        // Colocar el valor en su posición correcta
        $arr[$j + 1] = $valor;
    }

    // Convertir ambos arrays a cadenas y devolverlos
    $resultado = "Array Original: " . implode(", ", $array1) . "\n" . "Array Ordenado: " . implode(", ", $arr);
    return $resultado;
}

$arreglo = ["hola", "jorge", "pintura", "arbol"];
echo insertionSort($arreglo);
?>

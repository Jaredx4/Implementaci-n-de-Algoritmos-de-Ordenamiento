<?php
function BubleSort($arr){
    $array = [];
    
    for($i=0; $i<count($arr); $i++){
        $array[]=$arr[$i];
    }
    
    
    for($i=0; $i<count($arr); $i++){
        for($j=0; $j<count($arr)-1; $j++){ 
            if($arr[$j]<$arr[$j+1]){
                
              $aux=$arr[$j];
              $arr[$j]=$arr[$j+1];
              $arr[$j+1]=$aux;
            }
        }
    }
$resultado = "Array Original: " . implode(", ", $array) . "\n" . "Array Ordenado: " . implode(", ", $arr);


    return $resultado;
}
$arreglo = [1,4,5,6,3,2,7,9];
print_r(BubleSort($arreglo));
?>




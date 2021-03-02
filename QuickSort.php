<?php
    $values = [4,6,8,7,100,2000,1050];

    function quickSort($array)
    {
        if(empty($array))
            return [];
        
        $left = [];
        $right = [];
        $pivot = $array[0];
        /*
        * Esta ciclo for recorre el array
        * Si el numero es menor al pivot le hace un push a array left
        * En caso contrario le hace un push a array right
        */
        for ($i = 1; $i < count($array); $i++){
            if($array[$i] < $pivot){
                array_push($left, $array[$i]);
            }
            else{
                array_push($right, $array[$i]);
            }
        }
        /*
        * Al terminar de recorrer el array, hace un merge entre todas las listas
        * Sin embargo se llama recursivamente a la función para ordenar cada vez
        * Las listas left y right
        */
        $concat = array_merge(quickSort($left), [$pivot], quickSort($right));
        
        return $concat;
    }
   
    var_dump(quickSort($values));
?>

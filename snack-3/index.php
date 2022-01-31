<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<?php
    $numbers = range(1, 100);
    shuffle($numbers);
    $cutArray = array_slice($numbers, 0, 15);
    foreach ($cutArray as $result) {
        echo $result . '<br>';
    }
?>
<?php
    //4 - Crie uma função que receba uma lista de números e retorne o segundo maior número. A função aceita uma lista como um argumento. [2,1,3,4,5,6,6,8,9,10] = 9 [2,1,3,4,5,60,6,38,9,10] = 38

    function segundoMaior($vetor){
        $max = $vetor[0];
        $max2 = $vetor[0];
        for ($i=1; $i < count($vetor); $i++) { 
            if ($max < $vetor[$i]) {
                $max2 = $max;
                $max = $vetor[$i];
            }else if($max2 < $vetor[$i]){
                $max2 = $vetor[$i];
            }
        }

        return $max2;
    }

    $lista = [2,1,3,34,4,5,6,6,8,9,10];
    echo "<p>O segundo maior número é <strong>".segundoMaior($lista)."</strong></p>";

    $lista = [2,1,3,4,5,60,6,38,9,10];
    echo "<p>O segundo maior número é <strong>".segundoMaior($lista)."</strong></p>";

    $lista = [3, 8, 15, 7, 10, 5];
    echo "<p>O segundo maior número é <strong>".segundoMaior($lista)."</strong></p>";

    $lista = [-2, 0, 6, -10, 4, 12];
    echo "<p>O segundo maior número é <strong>".segundoMaior($lista)."</strong></p>";

    $lista = [1.5, 2.8, 3.2, 4.7, 9.1];
    echo "<p>O segundo maior número é <strong>".segundoMaior($lista)."</strong></p>";

    $lista = array(42);
    echo "<p>O segundo maior número é <strong>".segundoMaior($lista)."</strong></p>";
?>
<?php
    //2 - Crie uma função que retorne o produto de todos os inteiros ímpares em uma lista: A função aceita uma lista como um argumento. [1,1,3,2,5,8,4] = 15

    function somarImpares($vetor){
        
        $produto = 1;
        $sinal = false;

        foreach ($vetor as $num) {
            if ($num % 2 != 0) {
                $produto *= $num;
                $sinal = true;
            }
        }

            if ($sinal == true) {
                return $produto;
            }else{
                return "<p>O array não tem números ímpares</p>";    
            }
    }

    $lista = [1,1,3,2,5,8,4];
    echo somarImpares($lista);

    $lista = [8,2,10,2,4,8,4];
    echo somarImpares($lista);

    $lista = [1,1,1,1,1,1,1,1,1,1];
    echo somarImpares($lista);

    $lista = [0,0,0,0,0,0,0,0];
    echo somarImpares($lista);

    $lista = [0,0,0,0,0,0,-3,5];
    echo somarImpares($lista);


?>
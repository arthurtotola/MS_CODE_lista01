<?php 
    //3 - Crie uma função que receba uma lista de números entre 1 e 10 (excluindo um número) e retorne o número ausente. A função aceita uma lista como um argumento. [1,2,3,4,5,6,8,9,10] = 7 ou [2,1,3,4,5,6,6,8,9,10] = 7

    function verificar($vetor){

        $seq = [1,2,3,4,5,6,7,8,9,10];

        for ($i=0; $i < 10; $i++) { 
            $existe = false;            
            for ($j=0; $j < count($vetor); $j++) { 
                if ($seq[$i] == $vetor[$j]) {
                    $existe = true;
                    break;
                }
            }

            if ($existe == false) {
                return $seq[$i];
            }
        }

        return "<p>Não está faltando nenhum número";
    }

    $lista = [1,2,3,4,5,6,8,9,10];
    echo "<p>".verificar($lista)."</p>";
    
    $lista = [2,1,3,4,7,6,6,5,9,10];
    echo "<p>".verificar($lista)."</p>";

    $lista = [10,8,3,4,7,6,1,5,9,10];
    echo "<p>".verificar($lista)."</p>";

    $lista = [1,2,3,4,5,6,7,8,9,10];
    echo "<p>".verificar($lista)."</p>";

?>
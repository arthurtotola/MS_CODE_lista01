<?php 

//1 - Crie uma função que retorne “true” se uma string contiver espaços. A função aceita o String como um argumento.
   function encontrarEspaco($texto){
    
    $vetor= str_split($texto);
    
    foreach( $vetor as $carac){
        if ($carac == " ")
            return true;
        }
        return false;

   }

   $texto = "Essa frase tem espaços";
   
   echo encontrarEspaco($texto);

   $texto = "EssaFraseNãoTemEspaços";
   
   echo encontrarEspaco($texto);


?>
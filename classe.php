<?php

include 'imc-poo.php';

//instancia o objeto da classe
$calcular = new CalculoIMC();

//recebe os dados vindo do formulário
$peso   = $calcular->testa_input($_POST['peso']); 
$altura = $calcular->testa_input( $_POST['altura']);

//atribui em uma variável a variável de instância do objeto chamando a função de cálculo
$massa = $calcular->CalcIMC($peso, $altura);


//testa o valor obtido pelo cálculo
//Se a massa corpórea for menor ou igual a 18.5 
if($massa <= 18.5):
    echo "O Ìndice de Massa Corporal é: $massa <br/>";
    echo"Índice de Massa Corporal menor que 18.5 magreza elevada.";
//SE o imc for maior que 18.5 e menor ou igual a 25
elseif(($massa > 18.5) && ($massa <= 25)):
    echo "O Ìndice de Massa Corporal é: $massa <br/>";
    echo"Índice de Massa Corporal normal.";
//SE o imc for maior que 25 e menor que 30
elseif(($massa > 25) && ($massa < 30)):
    echo "O Ìndice de Massa Corporal é: $imc <br/>";
    echo"Índice de Massa Corporal entre 25 e 29.9 sobrepeso elevado.";
//SE o imc for maior ou igual a 30 e menor que 39.9
elseif(($massa >= 30) && ($massa < 40)):
    echo "O Ìndice de Massa Corporal é: $massa <br/>";
    echo"Índice de Massa Corporal entre 30 e 39.9 obesidade elevada.";
//SE o imc for igual ou maior que 40
else:
    echo"Índice de Massa Corporal maior ou igual a 40 obesidade grave muitíssima elevada.";
endif;
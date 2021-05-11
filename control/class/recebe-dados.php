<?php
    require ('class/imc-class.php');
    require ('class/recebe-dados.php');

    $calcular = new CalculoIMC ();


    //Dados imputados pelo usuário
    $peso   = $calcular->testa_input($_POST['peso']); 
    $altura = $calcular->testa_input( $_POST['altura']);

    $massa = $calcular->CalcIMC($peso, $altura);


    if ($massa <=18.5):
        echo "Seu IMC é: $massa - Magreza elevada";
    elseif (($massa >18.5) && ($massa <=25)):
        echo "Seu IMC é: $massa - Peso normal";
    elseif (($massa>=30) && ($massa <40)):
        echo "Seu IMC é: $massa - Obesidade";
    else:
        echo "Seu IMC é: $massa - Obesidade grave";    
    endif;
        
?>
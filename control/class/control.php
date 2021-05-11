<?php

require_once 'class/imc-class.php';

$massa = new Massa;
if (isset ($_POST ['altura']) && isset ($_POST['peso'])){
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    $massa->setAltura($altura);
    $massa->setPeso($peso);
    $massa->calcular();
}else{
    $massa->calcular();
}
?>
<?php
    interface iFormulario {
        public function setAltura (number $altura);
        public function setPeso (number $peso);
    }

    class Calculadora implements iFormulario{
        
    }
?>
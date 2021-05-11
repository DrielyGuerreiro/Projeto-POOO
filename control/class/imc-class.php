<?php

   class IMC {
     private $altura;
     private $peso;
     private $massa;
     private $situacao;

     public function __construct()
     {
         $this-> $peso = 0;
         $this->$altura = 0;
         $this->$situacao= '';
     }

     public function setAltura($altura){
         $this-> altura = $altura;
     }
     public function getAltura (){
         return $this-> altura;
     }
     public function setPeso($peso){
         $this->peso= $peso;
     }   
     public function getPeso (){
         $this->peso= peso;
     }
     public function setMassa ($massa){
         $this-> massa = $massa;
     }
     public function getMassa (){
         $this->massa = massa;
        }
    /*-------------------------------------------------------*/
        public function calcular(){
            if ($this->getAltura()!=0 && $this->getPeso()!=0 && $this->getAltura() >=0 && $this->getPeso() >=0){
            $this->setMassa($this->getPeso()/ ($this->getAltura()* $this->getAltura()));
        } else {
            $this->setAltura(0);
            $this->setPeso(0);
            $this->setMassa(0);
            }
        }    
    $this->situacao();
    
    private function situacao(){
        if($this->massa == 0){
            $this->situacao = 'Resultado Inválido';
        }elseif ($this->massa <17){
            $this->situacao = 'Você está abaixo do peso';
        }elseif(($massa >18.5) && ($massa <=25)){
            $this->situacao ='Você está no peso normal';
        }elseif (($massa>=30) && ($massa <40)){
            $this->situacao='Você está acima do peso'
        }    
        }
    }
?>
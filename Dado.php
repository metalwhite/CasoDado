
<?php
   //Creación clase Dado
    class Dado{
        
    //Declaración propiedades
        private $minNumDado;
        private $maxNumDado;
        
    //Declaración métodos getter y setter       
        public function getMinDado(){
            return $this->minNumDado;
        }
        public function setMinDado($minNumDado) {
            $this->minNumDado = $minNumDado;
        }
        public function getMaxDado(){
            return $this->maxNumDado;
        }
        public function setMaxDado($maxNumDado) {
             $this->maxNumDado = $maxNumDado;
        }   
    //Declaracion función tirarDado
        public function tirarDado($rand) {
            $rand = rand(0,12);
            return $rand;
        }     

    }
?>



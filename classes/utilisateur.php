<?php
    class Utilisateur implements Users{
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;
        
        public function __construct($n, $p, $r){
            $this->user_name = $n;
            $this->user_pass = $p;
            $this->user_region = $r;
        }
        
        public function __destruct(){
            //Du code à exécuter
        }
        
        public function setPrixAbo(){
            /*On peut imaginer qu'on calcule un prix d'abonnement différent
             *selon les profils des utilisateurs*/
            if($this->user_region === 'Sud'){
                return $this->prix_abo = self::PRIX_ABO / 2;
            }else{
                return $this->prix_abo = self::PRIX_ABO;
            }
        }

        public function getNom(){
            echo $this->user_name;
        }
    
        public function getPrixAbo(){
            echo $this->prix_abo;
        }
        
    }

?>
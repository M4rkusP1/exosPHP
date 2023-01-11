<?php
    
    class Admin implements Users{
        protected static $ban;
        protected $user_name;
        protected $user_region;
        protected $prix_abo;
        protected $user_pass;

        public function __construct($n, $p, $r){
            $this->user_name = strtoupper($n);
            $this->user_pass = $p;
            $this->user_region = $r;
        }
        
        public function setBan(...$b){
            foreach ($b as $ban) {
                self::$ban[] = $ban;
            }
        }
        public function getBan(){
            echo '<br>Utilisateurs bannis par '.$this->user_name. ' : ';
            foreach(self::$ban as $i => $valeur){
                if ($i < (count(self::$ban)-1)) {
                    echo $valeur .', ';
                } else {
                    echo $valeur;
                }
                
            }
        }
        
        public function setPrixAbo(){
            if($this->user_region === 'Sud'){
                return $this->prix_abo = Users::PRIX_ABO / 3;
            }else{
                return $this->prix_abo = Users::PRIX_ABO / 2;
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
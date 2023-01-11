<?php
abstract class User {
    protected $user_name;
    protected $user_region;
    protected $prix_abo;
    protected $user_pass;
    public const PRIX_ABO = 5;

    public function getNom(){
        echo $this->user_name;
    }

    abstract public function setPrixAbo();

    public function getPrixAbo(){
        echo $this->prix_abo;
    }
}


?>
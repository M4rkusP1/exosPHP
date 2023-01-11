<?php

include 'includes/autoloader.php';

// $transaction = new Transaction();

// $transaction->setStatus(Transaction::STATUS_PENDING);
// var_dump($transaction);

$pierre = new Admin('Pierre', 'abcdef', 'Sud');
$mathilde = new Admin('Mathilde', 123456, 'Nord');
$florian = new Utilisateur('Florent', 'flotri', 'Est');

$pierre->setPrixAbo();
$mathilde->setPrixAbo();
$florian->setPrixAbo();

$u = 'Utilisateur';
echo 'Valeur de ABONNEMENT dans Utilisateur : ' .$u::PRIX_ABO. '<br>';
echo 'Valeur de ABONNEMENT dans Admin : ' .Admin::PRIX_ABO. '<br>';

echo 'Prix de l\'abonnement pour ';
$pierre->getNom();
echo ' : ';
$pierre->getPrixAbo();
echo '<br>Prix de l\'abonnement pour ';
$mathilde->getNom();
echo ' : ';
$mathilde->getPrixAbo();
echo '<br>Prix de l\'abonnement pour ';
$florian->getNom();
echo ' : ';
$florian->getPrixAbo();

$pierre->setBan('Lucas','Guillaume', 'Patrice');
$mathilde->getBan();
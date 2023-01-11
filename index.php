<?php

declare(strict_types=1);
include 'includes/autoloader.php';
// require_once './transaction.php';

$transaction = (new Transaction(100, 'Premiere transaction'))
    ->addTax(8)
    ->applyDiscount(5)
    ->getAmount();
var_dump($transaction);
    unset($transaction);
    var_dump($transaction);


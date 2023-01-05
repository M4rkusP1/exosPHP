<?php
declare(strict_types=1);

require_once '../transaction.php';

$transaction = new Transaction(100, 'Premiere transaction');

$transaction->addTax(8);

var_dump($transaction->getAmount());

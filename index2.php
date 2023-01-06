<?php

include 'includes/autoloader.php';

$transaction = new Transaction();

$transaction->setStatus(Transaction::STATUS_PENDING);
var_dump($transaction);

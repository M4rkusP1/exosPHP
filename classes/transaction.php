<?php

declare(strict_types=1);

class Transaction
{
    private float $amount;
    private string $description;
    private string $status;

    public const STATUS_PAID = "paid";
    public const STATUS_PENDING = "pending";
    public const STATUS_DECLINED = "declined";

    public const ALL_STATUSES = [
        self::STATUS_PAID => 'Paid',
        self::STATUS_PENDING => 'Pending',
        self::STATUS_DECLINED => 'Declined',
    ];

    public function __construct()
    {
        // $this->amount = $amount;
        // $this->description = $description;
        $this->setStatus(self::STATUS_PENDING);
    }

    public function setStatus(string $status)
        {
            if (isset(self::ALL_STATUSES[$status])) {
               $this->status = $status;
                return $this; 
            }
            else {
                echo "status invalide $status <br>";
            }
            
        }

    // public function addTax(float $rate): self
    // {
    //     $this->amount += $this->amount * $rate /100;
    //     return $this;
    // }

    // public function applyDiscount(float $rate): Transaction
    // {
    //     $this->amount -= $this->amount * $rate /100;
    //     return $this;
    // }

    // public function getAmount(): float
    // {
    //     return $this->amount;
    // }

    
    // public function __destruct()
    // {
    //     echo "Destruction de ". $this->description."<br>";
    // }

}
<?php

class BankAccount implements IfaceBankAccount
{

    private $balance = null;

    public function __construct(Money $openingBalance)
    {
        $this->balance = $openingBalance->value();
    }

    public function balance()
    {
        return $this->balance;
    }

    public function deposit(Money $amount)
    {
        //implement this method
        $this->balance += $amount->value();
    }

    public function transfer(Money $amount, BankAccount $account)
    {
        //implement this method
    }

    /**
     * Withdraw amount
     */
    public function withdraw(Money $amount) 
    {
        $this->balance -= $amount->value();
    } 
}
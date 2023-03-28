<?php

trait Logger
{
    public function log($msg)
    {
        echo '<pre>';
        echo date('Y-m-d h:i:s') . ':' . '(' . __CLASS__ . ') ' . $msg . '<br/>';
        echo '</pre>';
    }
}
class BankAccount
{
    use Logger;

    private $accountNumber;

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        $this->log("A new $accountNumber bank account created");
    }
}
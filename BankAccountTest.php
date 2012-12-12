<?php
require 'BankAccount.php';
class BankAccountTest extends PHPUnit_Framework_TestCase
{
    protected $ba;
 
    protected function setUp()
    {
        $this->ba = new BankAccount;
    }
 
    public function testBalanceIsInitiallyZero()
    {
        $this->assertEquals(0, $this->ba->getBalance());
    }
 
    public function testBalanceCannotBecomeNegative()
    {
        try {
            $this->ba->withdrawMoney(1);
        }
 
        catch (BankAccountException $e) {
            $this->assertEquals(0, $this->ba->getBalance());
 
            return;
        }
 
        $this->fail();
    }
 
    public function testBalanceCannotBecomeNegative2()
    {
        try {
            $this->ba->depositMoney(-1);
        }
 
        catch (BankAccountException $e) {
            $this->assertEquals(0, $this->ba->getBalance());
 
            return;
        }
 
        $this->fail();
    }
}

// STEPS:
// 1. ./pu BankAccountTest.php
// 2. http://192.168.1.106/prezentacja/build/coverage/BankAccount.php.html

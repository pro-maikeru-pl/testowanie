<?php
class DatabaseConnection
{
  public function getResult()
  {
    // sleep(2); // (1)
    // return 'no results'; // (2)
    return 'db result';
  }
}
class Dependency
{
  public function decorate($what)
  {
    // $decorations = '*** '; return $decorations . $what . $decorations; // (3)
    return '*** ' . $what . ' ***';
  }
}
class Foo {
  private $db;
  private $someDependency;
  public function __construct()
  {
    $this->db = new DatabaseConnection();
    $this->someDependency = new Dependency();
  }
  public function getResult()
  {
    return $this->someDependency->decorate($this->db->getResult());
  }
}

class FooTest extends PHPUnit_Framework_TestCase
{
  /**
  * Some test.
  *
  * @test
  */
  public function someTest1()
  {
    $foo = new Foo();
    $this->assertEquals('*** db result ***', $foo->getResult());
  }
  
}

// STEPS
// 1. zwolnij baze danych (1)
// 2. zmodyfikuj rezultat bazy danych (2)
// 3. wprowadz buga do decorate
// 4. pogadaj jak mozna temu przeciwdzialac
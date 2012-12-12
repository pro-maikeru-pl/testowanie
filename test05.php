<?php
class Foo {
  private $lastChange;
  public function makeChange()
  {
    //$this->someOperations();
    $this->lastChange = new \DateTime;
  }
  public function getLastChangeTimestamp()
  {
    return $this->lastChange->getTimestamp();
  }
  private function someOperations()
  {
    usleep(0.5 * 1000000);
  }
}

class FooTest extends PHPUnit_Framework_TestCase
{
  /**
  * Some test.
  *
  * @test
  */
  public function makeChange_changeMade_shouldPersistLastChangeTime()
  {
    $foo = new Foo();
    
    $changeDateTime = new \DateTime;
    $changeTimestamp = $changeDateTime->getTimestamp();
    $foo->makeChange();
    
    $this->assertSame($changeTimestamp, $foo->getLastChangeTimestamp());
    
  }
}

// STEPS
// 1. Odkomentowac someoperations w metodzie change
// PODOBNE:
// - wyniki z bazy bez sortowania - czasem przechodza czasem nie
// - sortowanie po czasie - czasem dziala, a czasem kilka wynikow ma ten sam czas i moze inaczej posortowac
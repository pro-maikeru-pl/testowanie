<?php
class Foo {
  public function doSomethingFunny()
  {
    // some stuff
    return $this->doSomething() . 'funny';
  }
  public function doSomethingElse()
  {
    // some stuff
    return $this->doSomething() . 'else';
  }
  public function doSomethingDifferent()
  {
    // some stuff
    return $this->doSomething() . 'different';
  }
  private function doSomething()
  {
    return 'something ';
  }
}

class FooTest extends PHPUnit_Framework_TestCase
{
  /**
  * Some test.
  *
  * @test
  */
  public function someTest()
  {
    $foo = new Foo(); 
    // some configuration ...
    
    // assertions
    $this->assertEquals('something different', $foo->doSomethingDifferent());
    $this->assertEquals('something funny', $foo->doSomethingFunny());
    $this->assertEquals('something else', $foo->doSomethingElse());
  }
}

// STEPS
// 1. usun spacje po something w dosomething
// 2. odpal test i zobacz ze nie przeszedl something different - wiec popraw metode something different
// 3. odpal test i zobacz ze teraz problem w something funny - zmien wiec something funny
// 4. Pokaz source06b.php : przestan udawac i powiedz gdzie tak naprawde blad i jak to naprawic (wydzielic kazda asercje do osobnej testowej metody)
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
  public function somethingDifferent_someConfigurationDone_shouldReturnSomethingDifferent()
  {
    $foo = $this->creator_configuredFoo();
    $this->assertEquals('something different', $foo->doSomethingDifferent());
  }
  /**
  * Some test.
  *
  * @test
  */
  public function somethingFunny_someConfigurationDone_shouldReturnSomethingFunny()
  {
    $foo = $this->creator_configuredFoo();
    $this->assertEquals('something funny', $foo->doSomethingFunny());
  }
  /**
  * Some test.
  *
  * @test
  */
  public function somethingElse_someConfigurationDone_shouldReturnSomethingElse()
  {
    $foo = $this->creator_configuredFoo();
    $this->assertEquals('something else', $foo->doSomethingElse());
  }
  private function creator_configuredFoo()
  {
    $foo = new Foo(); 
    // some configuration ...
    return $foo;
  }
}

// STEPS
// 1. pokaz, ze zamiast robic kilka asercji tak naprawde trzeba bylo zrobic refaktoryzacje testow
// 2. usun spacje po something w dosomething
// 3. odpal test i zobacz ze wszystkie kilka nie przeszlo - co daje wskazowke ze moze byc wspolny problem
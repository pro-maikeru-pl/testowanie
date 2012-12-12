<?php
class Dependency1
{
  
}
class Dependency2
{
  
}
class Dependency3
{
  
}
class Foo {
  private $marks;
  public function __construct(Dependency1 $dependency1)
  {
    // some stuf
  }
  public function getResult()
  {
    // some stuff
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
    $foo = new Foo(new Dependency1());
    $this->assertTrue(true, 'some assertion');
  }
  /**
  * Some test.
  *
  * @test
  */
  public function someTest2()
  {
    $foo = new Foo(new Dependency1());
    $this->assertTrue(true, 'some assertion');
  }
  /**
  * Some test.
  *
  * @test
  */
  public function someTest3()
  {
    $foo = new Foo(new Dependency1());
    $this->assertTrue(true, 'some assertion');
  }
  /**
  * Some test.
  *
  * @test
  */
  public function someTest4()
  {
    $foo = new Foo(new Dependency1());
    $this->assertTrue(true, 'some assertion');
  }
}

// STEPS
// 1. dodac kolojce dependencies do konstruktora i pokazac jak duzo zmian
// 2. wycofac zmiane! i zrefaktoryzowac przy zielonym, az do uzyskania creatora przekazanego do setupa
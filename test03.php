<?php
class Threshold {
  private $marks;
  public function __construct(array $marks)
  {
    arsort($marks);
    $this->marks = $marks;
  }
  public function getMarks()
  {
    // return array(5 => 100, 3 => 25, 1 => 0); // (1)
    return $this->marks;
  }
}

class TresholdTest extends PHPUnit_Framework_TestCase
{
  /**
  * Some test.
  *
  * @test
  */
  public function getMarks_unorderedMarksPassedInConstructor_shouldReturnMarksmarksOrderedFromHighestToLowest1()
  {
    $unorderedMarks = array(2 => 20, 1 => 0, 5 => 80);
    $thr = new Threshold($unorderedMarks);
    
    $expectedOrderedMarks = array(5 => 80, 2 => 20, 1 => 0); // no logic inside test
    $this->assertSame($expectedOrderedMarks, $thr->getMarks());
  }
//  /**
//  * Some test.
//  *
//  * @test
//  */
//  public function getMarks_unorderedMarksPassedInConstructor_shouldReturnMarksmarksOrderedFromHighestToLowest2()
//  {
//    $unorderedMarks = array(3 => 25, 1 => 0, 5 => 100);
//    $thr = new Threshold($unorderedMarks);
//    
//    $expectedOrderedMarks = array(5 => 100, 3 => 25, 1 => 0); // no logic inside test
//    $this->assertSame($expectedOrderedMarks, $thr->getMarks());
//  }
}

// STEPS: 
// 1. zakomentowac pierwszy test a odkomentowac drugi symulujac nadpisanie poprzedniego
// 2. odkomentowac (1) i pokazac, ze bez zachowania poprzedniego testu glupie bledy moga pozostac niezauwazone
// 3. domalpowac pierwszy test i pokazac ze byl blad
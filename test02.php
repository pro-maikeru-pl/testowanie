<?php
class Threshold {
  private $marks;
  public function __construct(array $marks)
  {
    sort($marks);
    $this->marks = $marks;
  }
  public function getMarks()
  {
    return $this->marks;
  }
}

class TresholdTest extends PHPUnit_Framework_TestCase
{
 /**
  * WRONG
  * 
  * @test
  */
  public function getMarks_unorderedMarksPassedInConstructor_shouldReturnMarksmarksOrderedFromHighestToLowest1()
  {
    $input = array(2 => 20, 1 => 0, 5 => 80);
    $thr = new Threshold($input);

    sort($input); // logic inside test
    // print_r($input);
    $this->assertSame($input, $thr->getMarks());
  }
  /**
  * CORRECT
  *
  * test
  */
  public function getMarks_unorderedMarksPassedInConstructor_shouldReturnMarksmarksOrderedFromHighestToLowest2()
  {
    $unorderedMarks = array(2 => 20, 1 => 0, 5 => 80);
    $thr = new Threshold($unorderedMarks);
    
    $expectedOrderedMarks = array(5 => 80, 2 => 20, 1 => 0); // no logic inside test
    $this->assertSame($expectedOrderedMarks, $thr->getMarks());
  }
}

// STEPS:
// 1. odkomentowac print_r i pokazac blad w logice
// 2. tylko drugi test jest poprawny i uwidacznia blad w logice
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
  * Do sth.
  *
  * @test
  * @covers LMS\GroupBundle\Entity\Threshold::sanitizeMarks
  */
  public function __construct_unorderedMarksPassed_marksAreOrdered()
  {
    $unorderedMarks = array(2 => 20, 1 => 0, 5 => 80);
    $orderedMarks = array(5 => 80, 2 => 20, 1 => 0);
    $thr = new Threshold($unorderedMarks);
    $this->assertSame($orderedMarks, $thr->getMarks());
  }
}
<?php
require_once ( 'Sorter.php');

class SorterTests extends PHPUnit_Framework_TestCase
{

    function testSelection()
    {
        $sorter = new Sorter;
        $result = $sorter->selection_sort([9,662,29,4,1]);
        $this->assertEquals($result, [1,4,9,29,662]);
    }
 
    function testInsertion()
    {
        $sorter = new Sorter;
        $result = $sorter->insertion_sort([9,662,29,4,1]);
        $this->assertEquals($result, [1,4,9,29,662]);
    }
 
    function testBubble()
    {
        $sorter = new Sorter;
        $result = $sorter->bubble_sort([9,662,29,4,1]);
        $this->assertEquals($result, [1,4,9,29,662]);
    }

    function testQuick()
    {
        $sorter = new Sorter;
        $result = $sorter->quick_sort([9,662,29,4,1]);
        $this->assertEquals($result, [1,4,9,29,662]);
    }
 

    function testMerge()
    {
        $sorter = new Sorter;
        $result = $sorter->merge_sort([9,662,29,4,1]);
        $this->assertEquals($result, [1,4,9,29,662]);
    }
 
 
}

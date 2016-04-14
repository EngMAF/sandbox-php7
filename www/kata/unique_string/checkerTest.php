<?php
require_once ( 'Checker.php');

class CheckerTests extends PHPUnit_Framework_TestCase
{

    function testCheck()
    {
        $checker = new Checker;
        $result = $checker->check('abcde');
        $this->assertTrue($result);
    }
 
    function testCheck2()
    {
        $checker = new Checker;
        $result = $checker->check('abcde@#$%');
        $this->assertTrue($result);
    }
 
    function testCheck3()
    {
        $checker = new Checker;
        $result = $checker->check('abcdee');
        $this->assertFalse($result);
    }
 
    function testCheck4()
    {
        $checker = new Checker;
        $result = $checker->check('ab##cde');
        $this->assertFalse($result);
    }
 
}

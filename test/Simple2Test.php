<?php
require_once __DIR__ . '/../src/Simple2.php';

class Simple2Test extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $simple2 = new Simple2();
        $simple2->setName('Allado');
        $this->assertEquals($simple2->getName(), 'Allado');
    }

    public function testGetAge()
    {
        $simple2 = new Simple2();
        $simple2->setAge(22);
        $this->assertEquals($simple2->getAge(), 22);
    }

    public function testFaveColor()
    {
        $simple2 = new Simple2();
        $simple2->setFaveColor('Black');
        $this->assertEquals($simple2->getFaveColor(), 'Black');
    }

    public function testGetNameCheckString()
    {
        $simple2 = new Simple2();
        $simple2 ->setName('Allado');
        $this->assertIsString($simple2->getName(), 'Allado');
    }

    public function testGetAgeCheckInt()
    {
        $simple2 = new Simple2();
        $simple2->setAge(22);
        $this->assertIsInt($simple2->getAge(), 22);
    }

    public function testGetAgeCheckNumeric()
    {
        $simple2 = new Simple2();
        $simple2->setAge(22);
        $this->assertIsNumeric($simple2->getAge(), 22);
    }
    
    public function testFaveColorCheckString()
    {
        $simple2 = new Simple2();
        $simple2->setFaveColor('Black');
        $this->assertIsString($simple2->getFaveColor(), 'Black');
    }

    public function testGetTogetherInput()
    {
        $simple2 = new Simple2();
        $simple2->setTogetherInput('Allado', 22, 'Black');
        $this->assertEquals($simple2->getTogetherInput(), 'Allado', 22, 'Black');
    }

}
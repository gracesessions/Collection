<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class collection extends TestCase
{
    public function testGivenEmptyArray()
    {
        $array = [];
        $result = displayRecords($array);

        //Assert - compare the expected result to the actual result
        $this->assertEquals('', $result);
    }

    public function testGivenValidRecord()
    {

        $expected = null;
        $records = [];

        //Act - call the function
        $result = displayRecords($records);

        //Assert - compare the expected result to the actual result
        $this->assertEquals($expected, $result);
    }

    public function testGivenStringThrowError()
    {
        // Arrange - set up the function
        $records = 'Barry';

        $this->expectException(TypeError::class);

        //Act - call the function
        $result = displayRecords($records);

    }
}


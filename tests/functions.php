<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testGivenEmptyArrayReturnEmptyString()
    {
        $array = [];

        $result = displayRecords($array);

        $this->assertEquals('', $result);
    }

    public function testGivenValidRecordReturn()
    {
        $expected = '<div class="recordcontainer"><img class="vinyl" src="images/vinyl.png"><div class="recordinfo"><h2>Kind of Blue</h2><p> By Miles Davis</p><p> Released in 1959</p><p> by Columbia Records</p><p>Featuring Blue in Green</p><div class="albumcover"><img src="images/kindofblue.png"></div></div></div>';

        $records[] =  array(
            'id' => 1,
            'name' => 'Kind of Blue',
            'artist' => 'Miles Davis',
            'year' => 1959,
            'record_label' => 'Columbia Records',
            'song' => 'Blue in Green',
            'img_name' => 'kindofblue.png'
        );

        $result = displayRecords($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenStringThrowError()
    {
        $records = 'Barry';

        $this->expectException(TypeError::class);

        $result = displayRecords($records);
    }

    // validation function tests

    public function testGiven1800ReturnTrue()
    {
        validateFormData($_POST);

        $expected = True;

        $array= [
            'name' => 'name',
            'artist' = 'artist',
            $year = 1800,

        //Act - call the function
        $result = validateFormData($year);

        //Assert - compare the expected result to the actual result
        $this->assertEquals($expected, $result);
    }


//    public function testGivenEmptyArrayReturnNull()
//    {
//        $array = [];
//
//        $result = validateFormData($array);
//
//        $this->assertEquals('', $result);
//    }


    // test 1800, 3000, 3001, 1799,
// test barry data type formdata
// test year datatype

//    public function testGivenStringThrowError()
//    {
//
//    }
}

<?php

require_once '../functions.php';

use PHPUnit\Framework\TestCase;

class collection extends TestCase
{
    public function testGivenEmptyArrayReturnEmptyString()
    {
        $array = [];

        $result = displayRecords($array);

        $this->assertEquals('', $result);
    }

    public function testGivenValidRecordReturn()
    {
        $expected = '<div class="recordcontainer"><img class="vinyl" src="images/vinyl.png"><div class="recordinfo"><h2>Kind of Blue</h2><p> By Miles Davis</p><p> Released in 1959</p><p> by Columbia Records</p><p>Featuring Blue in Green</p><img src="images/kindofblue.png"></div></div>';

        $records[] =  array
            (
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
}

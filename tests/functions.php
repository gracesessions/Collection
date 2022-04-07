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

        $records[] = array(
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

    public function testGivenEmptyArrayThrowError()
    {
        $array = [];

        $result = sanitiseFormData($array);

        $this->assertIsArray($result);
        $this->assertCount(0, $result);
    }

    public function testGivenStringThrowError2()
    {
        $formData = 'Barry';
        $this->expectException(TypeError::class);

        $result = sanitiseFormData($formData);

    }

    public function testGivenArrayReturnCleanArray()
    {

        $expected = array(
            'name' => 'Kind of Blue',
            'artist' => 'Miles Davis',
            'year' => null,
            'record_label' => null,
            'song' => null
        );

        $year = '';
        $name = 'Kind of Blue';
        $artist = 'Miles Davis';
        $record_label = '';
        $song = '';

        $records = array(
            'name' => $name,
            'artist' => $artist,
            'year' => $year,
            'record_label' => $record_label,
            'song' => $song
        );

        $result = sanitiseFormData($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenCorrectYearReturnTrue()
    {
        $expected = true;

        $year = 1800;
        $name = 'Kind of Blue';
        $artist = 'Miles Davis';
        $record_label = 'Columbia Records';
        $song = 'Blue in Green';

        $records = array(
            'name' => $name,
            'artist' => $artist,
            'year' => $year,
            'record_label' => $record_label,
            'song' => $song
        );

        $result = validateFormData($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenCorrectYearReturnTrue2()
    {
        $expected = true;

        $year = 3000;
        $name = 'Kind of Blue';
        $artist = 'Miles Davis';
        $record_label = 'Columbia Records';
        $song = 'Blue in Green';

        $records = array(
            'name' => $name,
            'artist' => $artist,
            'year' => $year,
            'record_label' => $record_label,
            'song' => $song
        );

        $result = validateFormData($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenIncorrectYearReturnFalse()
    {
        $expected = false;

        $year = 3001;
        $name = 'Kind of Blue';
        $artist = 'Miles Davis';
        $record_label = 'Columbia Records';
        $song = 'Blue in Green';


        $records = array(
            'name' => $name,
            'artist' => $artist,
            'year' => $year,
            'record_label' => $record_label,
            'song' => $song
        );

        $result = validateFormData($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenIncorrectYearReturnFalse2()
    {

        $expected = false;

        $year = 1799;
        $name = 'Kind of Blue';
        $artist = 'Miles Davis';
        $record_label = 'Columbia Records';
        $song = 'Blue in Green';


        $records = array(
            'name' => $name,
            'artist' => $artist,
            'year' => $year,
            'record_label' => $record_label,
            'song' => $song
        );

        $result = validateFormData($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenIncorrectYearReturnFalse3()
    {
        $expected = false;

        $year = 20000;
        $name = 'Kind of Blue';
        $artist = 'Miles Davis';
        $record_label = 'Columbia Records';
        $song = 'Blue in Green';

        $records = array(
            'name' => $name,
            'artist' => $artist,
            'year' => $year,
            'record_label' => $record_label,
            'song' => $song
        );

        $result = validateFormData($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenIncorrectYearReturnFalse4()
    {
        $expected = false;

        $year = 'Barry';
        $name = 'Kind of Blue';
        $artist = 'Miles Davis';
        $record_label = 'Columbia Records';
        $song = 'Blue in Green';

        $records = array(
            'name' => $name,
            'artist' => $artist,
            'year' => $year,
            'record_label' => $record_label,
            'song' => $song
        );

        $result = validateFormData($records);

        $this->assertEquals($expected, $result);
    }

    public function testGivenEmptyArrayThrowError2()
    {
        $expected = false;

        $array = [];

        $result = validateFormData($array);

        $this->assertEquals($expected, $result);
        $this->assertEquals(false, $result);
    }
}


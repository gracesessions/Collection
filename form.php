<?php
require_once 'functions.php';
require_once 'db.php';
$db = 'recorddb';
$records = fetchAllRecordsData(connectToDb($db));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/collection.css">
</head>
<form  class="form" enctype="multipart/form-data" action="addrecord.php" method="post">
    <h3>Add to collection:</h3>
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name">
    </div>
    <div>
        <label for="artist">Artist: </label>
        <select name="artist" id="artist">
            <option value="1">Miles Davis</option>
            <option value="2">The Clash</option>
            <option value="3">The Rolling Stones</option>
            <option value="4">Faces</option>
            <option value="5">Duke Ellington</option>
            <option value="6">Jimi Hendrix</option>
            <option value="7">The Who</option>
            <option value="8">Little Richard</option>
            <option value="9">Cameo</option>
            <option value="10">Bee Gees</option>
            <option value="11">Chic</option>
            <option value="12">Chuck Berry</option>
            <option value="13">Oscar Peterson Trio</option>
            <option value="14">The Beatles</option>
        </select>
    </div>
    <div>
        <label for="year">Year released: </label>
        <input type="number" name="year" id="year">
    </div>
    <div>
        <label for="record_label">Record Label: </label>
        <select name="record_label" id="record_label">
            <option value=""></option>
            <option value="1">Columbia Records</option>
            <option value="2">CBS Records</option>
            <option value="3">Rolling Stones Records</option>
            <option value="4">Warner Bros</option>
            <option value="5">Sound Makers</option>
            <option value="6">MCA Records</option>
            <option value="7">Polydor</option>
            <option value="8">Showcase</option>
            <option value="9">Atlanta Artists</option>
            <option value="10">Atlantic</option>
            <option value="11">PRT Records</option>
            <option value="12">Verve</option>
            <option value="13">Parlophone</option>
        </select>
    </div>
    <div>
        <label for="song">Song: </label>
        <input type="text" name="song" id="song">
    </div>
    <div>
        <label for="img_name">Upload image: </label>
        <input type="file" name="newFile" id="img_name">
    </div>
    <div>
        <input type="submit" name="submit" id="submit">
    </div>
</form>
</html>
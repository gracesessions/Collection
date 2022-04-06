<?php
require_once 'functions.php';
require_once 'db.php';
$db = 'recorddb';
$records = fetchAllRecordsData(connectToDB($db));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/collection.css">
    <title>Record Collection</title>
</head>

<body>
    <h1>Record Collection</h1>
    <section class="collection">
        <?php
        echo displayRecords($records);
        ?>
    </section>

    <section class="form">
        <form enctype="multipart/form-data" action="addrecord.php" method="post">
                <input type="text" name="name" id="name">
                <label for="name">DONE: </label>
                <input type="text" name="artist" id="artist">
                <label for="artist">Artist: </label>
                <input type="number" name="year" id="year">
                <label for="year">Year released: </label>
                <input type="text" name="record_label" id="record_label">
                <label for="record_label">Record Label: </label>
                <input type="text" name="song" id="song">
                <label for="song">Song: </label>
                <input type="file" accept="image/png" name="file" id="song">
                <label for="song">Image: </label>
                <input type="submit" name="submit" id="submit">
                <label for="submit">Submit</label>
        </form>

    </section>
</body>
</html>
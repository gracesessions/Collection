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
<!--    <link rel="stylesheet" href="css/all.min.css">-->
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
            <p>
                <label for="name">Name: </label>
                <input type="text" name="name" id="name">
            </p>
            <p>
                <label for="artist">Artist: </label>
                <input type="text" name="artist" id="artist">
            </p>
            <p>
                <label for="year">Year released: </label>
                <input type="number" name="year" id="year">
            </p>
            <p>
                <label for="record_label">Record Label: </label>
                <input type="text" name="record_label" id="record_label">
            </p>
            <p>
                <label for="song">Song: </label>
                <input type="text" name="song" id="song">
            </p>
            <p>
                <label for="img">Upload image: </label>
                <input type="file" accept="image/png" name="file" id="img">
            </p>
            <p>
                <input type="submit" name="submit" id="submit">
            </p>
        </form>


    </section>
</body>
</html>
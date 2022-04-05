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
            Name: <input type="text" name="name"><br>
            Artist: <input type="text" name="artist"><br>
            Year released: <input type="number" name="year"><br>
            Record Label: <input type="text" name="record_label"><br>
            Song: <input type="text" name="song"><br>
            Image: <input type="file" accept="image/png" name="file"><br>
            Submit <input type="submit">
        </form>
        <?php
//            addToDb();
        ?>

    </section>
</body>
</html>
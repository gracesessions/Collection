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
    <title>Record Collection</title>
</head>

<body id="top">
    <nav class ="nav">
        <ul class ="nav-items">
            <li><h1>Record Collection</h1></li>
            <li><a href="form.php">Add to collection</a></li>
        </ul>
    </nav>

    <section class="collection">
        <?php echo displayRecords($records);?>
    </section>

<footer>
</footer>
</body>
</html>
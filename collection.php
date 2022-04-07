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
<!--    <link rel="stylesheet" href="css/all.min.css">-->
    <link rel="stylesheet" href="css/collection.css">
    <title>Record Collection</title>
</head>

<body>
    <h1>Record Collection</h1>
    <section class="collection">
        <?php echo displayRecords($records);?>
    </section>

    <section class="form">
        <?php include "form.php";?>
    </section>
</body>
</html>
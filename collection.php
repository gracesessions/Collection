<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="css/normalize.css">-->
<!--    <link href="css/all.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="collection/collectionpractice.css">
    <title>Record Collection</title>
</head>

<body>
<h1>Record Collection</h1>
<!--<section class="collection">-->
<!--<div class="recordcontainer">-->
<!--    <div class="recordinfo">-->
<?php

require_once 'db.php';
$db = 'recorddb';
$records = fetchAllRecordsData(connectToDB($db));


function displayRecords(array $records): void
{
    foreach ($records as $record) {
        echo
            "<img class='vinyl' src='images/vinyl.png'>" .
            '<h2>' . $record['name'] . '</h2>' .
            '<p> By ' . $record['artist'] . '</p>' .
            '<p> Released in ' . $record['year'] . ' by '. $record['record_label'] . '</p>' .
            '<p>Featuring ' . $record['song'] . '</p>' .
            '<img src=' . 'images/' . $record['img_name'] . '>';
    }
}

displayRecords($records);

?>
</div>

</div>
</section>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--    <link rel="stylesheet" href="css/normalize.css">-->
<!--    <link href="css/all.min.css" rel="stylesheet" type="text/css">-->
    <link rel="stylesheet" href="collectionpractice.css">
    <title>Record Collection</title>
</head>

<body>
<h1>Record Collection</h1>
<section class="collection">
<div class="recordcontainer">
    <img class='vinyl' src="vinyl.png" alt="vinyl">
    <div class="recordinfo">
<?php

require_once 'db.php';

require_once 'db.php';
$db = 'recorddb';
$records = fetchAllRecordsData(connectToDB('recorddb'));

echo '<pre>';
print_r($records);
echo '</pre>';

function displayRecord(array $records): string
{
    foreach ($records as $record) {
        return '<p>' . $record['record'] . '</p>' .
            '<p>' . $record['artist'] . '</p>' .
            '<p>' . $record['date'] . '</p>' .
            '<p>' . $record['record_label'] . '</p>' .
            '<p>' . $record['song'] . '</p>';
    }
}

//echo displayRecord($records);


?>
    </div>
    <div class="images">
        <img src='images/londoncalling Small.png'>
    </div>
</div>
</section>
</body>
</html>




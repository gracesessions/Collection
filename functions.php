<?php

require_once 'db.php';
$db = 'recorddb';
$records = fetchAllRecordsData(connectToDB($db));

function displayRecords(array $records): string
{
    $info = '';
    foreach ($records as $record)  {
        $info .=
            '<div class="recordcontainer">' .
            "<img class='vinyl' src='images/vinyl.png'>" .
            "<div class='recordinfo'>" .
            '<h2>' . $record['name'] . '</h2>' .
            '<p> By ' . $record['artist'] . '</p>' .
            '<p> Released in ' . $record['year'] . '</p>' .
            '<p> by '. $record['record_label'] . '</p>' .
            '<p>Featuring ' . $record['song'] . '</p>' .
            '<img src=' . 'images/' . $record['img_name'] . '>' .
            '</div>' .
            '</div>';
    } return $info;
}

<?php

require_once 'db.php';
$pdo = connectToDB('recorddb');

function addToDb(array $formData, PDO $pdo): bool
{

    $query = $pdo->prepare(
        'INSERT INTO `records` (`name`, `artist`, `year`, `record_label`, `song`)'
        . ' VALUES (:name, :artist, :year, :record_label, :song);'
    );

        $name = $formData['name'];
        $artist = $formData['artist'];
        $year = $formData['year'];
        $record_label = $formData['record_label'];
        $song = $formData['song'];
//        $img = $formData['img_name'];


    $query->bindParam(1, $name);
    $query->bindParam(2, $artist);
    $query->bindParam(3, $year);
    $query->bindParam(4, $record_label);
    $query->bindParam(5, $song);
//    $query->bindParam(6, $img);

    return $query->execute();
}

addToDb($_POST, $pdo);

echo 'done';



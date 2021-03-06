<?php

function connectToDb(string $db): PDO
{
    $host = 'db';
    $charset = 'utf8mb4';
    $user = 'root';
    $pass = 'password';

    $dataSourceName = "mysql:host=$host;dbname=$db;charset=$charset";

    $options = [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];

    try {
        $dbConnection = new PDO($dataSourceName, $user, $pass, $options);
    } catch (PDOException $excptn) {
        throw new PDOException($excptn->getMessage(), (int)$excptn->getCode());
    }

    return $dbConnection;
}

function fetchAll(PDO $dbConnection, string $sql, array $params = null): array
{
    $query = $dbConnection->prepare($sql);

    $query->execute($params);

    return $query->fetchAll();
}

function fetchAllRecordsData(PDO $dbConnection): array
{
     $sql =
         'SELECT `records`.`id`, `records`.`name`, `artists`.`artist`, `records`.`year`, `record_labels`.`record_label`, `records`.`song`, `records`.`img_name` 
            FROM `records`
            INNER JOIN `artists`
            ON `records`.`artist`=`artists`.`id`
            INNER JOIN `record_labels`
            ON `records`.`record_label`=`record_labels`.`id`;';

    return fetchAll($dbConnection, $sql);
}


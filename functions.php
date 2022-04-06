<?php

function displayRecords(array $records): string
{
    $info = '';
    foreach ($records as $record)  {
        $info .=
            '<div class="recordcontainer">' .
            '<img class="vinyl" src="images/vinyl.png">' .
            '<div class="recordinfo">' .
            '<h2>' . $record['name'] . '</h2>' .
            '<p> By ' . $record['artist'] . '</p>' .
            '<p> Released in ' . $record['year'] . '</p>' .
            '<p> by '. $record['record_label'] . '</p>' .
            '<p>Featuring ' . $record['song'] . '</p>' .
            '<div class="albumcover">' .
                '<img src="images/' . $record['img_name'] . '">' .
            '</div>' .
            '</div>' .
            '</div>';
    }
    return $info;
}

function sanitiseFormData(array $formData): array
{
    $year = $formData['year'];
    if ($year === '') {
        $year = null;
    }
    $record_label = $formData['record_label'];
    if ($record_label === '') {
        $record_label = null;
    }
    $song = $formData['song'];
    if ($song === '') {
        $song = null;
    }
    $cleanFormData = [
        'name' => $formData['name'],
        'artist' => $formData['artist'],
        'year' => $year,
        'record_label' => $record_label,
        'song' => $song,
        'img_name' => $formData['img_name']
    ];
    return $cleanFormData;
}

// test year, recordlabel and song  data type
// test empty string?
// test form data data type (barry)

function validateFormData(array $formData): bool
{
    $isValid = true;
    $year = $formData['year'];
    if (gettype($year) !== 'integer') {
        $isValid = false;
    } elseif ((int)$year < 1800 || (int)$year > 3000) {
        $isValid = false;
    }
    return $isValid;
}

// test 1800, 3000, 3001, 1799,
// test barry data type formdata
// test year datatype

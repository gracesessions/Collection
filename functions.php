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
    if (!is_array($formData)) {
        return [];
    }
    if (count($formData) == 0) {
        return [];
    }

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
        'song' => $song
    ];
    return $cleanFormData;
}

function validateFormData(array $formData): bool
{
    if (!is_array($formData)) {
        return false;
    }
    if (count($formData) == 0) {
        return false;
    }
    $isValid = true;
    $year = $formData['year'];
    if (is_numeric($year) && $year>=1800 && $year<=3000 && strlen($year) == 4)
    {
        $isValid = true;
    } else {
        $isValid = false;
    }
    return $isValid;
}
